<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use PDF;
use App\User;
use App\Role;
use App\Supply;
use App\Inquire;
use App\expenses;
use Illuminate\Http\Request;

class PagesController extends Controller
{


	

	public function login()
	{
		return view('pages.login');
	}

	public function register()
	{
		return view('pages.registration');
	}
	public function alogin()
	{
		return view('pages.alogin');
	}
		public function elogin()
	{
		return view('pages.elogin');
	}
		public function about()
	{
		return view('pages.about');
	}
		public function registration()
	{
		return view('pages.registration');
	}


	public function brokers()
	{
		$user = User::where('email','!=', 'admin1@gmail.com')->get(['name','email','phone_number','ID_Number']);
		
		return view('broker.broker',compact('user'));
	}



	public function dash()
	{
		$broker_supply = Supply::where('supplier_name',Auth::user()->email)->get();
		$broker_count = Supply::where('supplier_name',Auth::user()->email)->count();
		$broker_active = Supply::where('supplier_name',Auth::user()->email)->where('state',1)->count();
		$broker_pending = Supply::where('supplier_name',Auth::user()->email)->where('state',0)->count();
		



		$request = Inquire::count();
		$sup= User::count();
		$expense = expenses::first();
		$desig = DB::table('supplies')->count('supply_amount');
		return view('broker.dash',compact('expense','sup','desig','request','broker_supply','broker_count','broker_pending','broker_active'));
	}

	public function expense()
	{
		return view('broker.expenses');
	}

	public function pxpense()
	{
		return view('broker.newexpense');
	}

	public function nexpense(Request $request)
	{
		$expense = expenses::first();

		$expense->total_monthly_expenses = $request->total_monthly_expenses + $expense->total_monthly_expenses;

		$expense->save();

		return redirect()->back()->with('success','Expense Updated');


		
	}


	public function supply()
	{
		$supply = Supply::all();
		return view('broker.supply',compact('supply'));
	}

	public function newsupply()
	{
		
		$user = User::all();
		return view('broker.register',compact('user'));
	}




	public function supplierdash()
	{
		$supply = Supply::where('supplier_name',Auth::user()->email)->get();
		return view('supplier.dash',compact('supply'));
	}
	public function state($id)
	{
		$state = Supply::find($id);
		$state->state = "Completed";
		$state->save();

		return redirect()->back()->with('success','Your submission for suplly completion is received, broker will follow back');
	}


	public function inquire()
	{
		return view('supplier.inquire');
	}

	public function inquiry()
	{
		$inquiry = Inquire::all();
		return view('broker.inquiry',compact('inquiry'));
	}

	public function inq()
	{
		$supply = Inquire::where('supplier',Auth::user()->email)->get();
		return view('supplier.request',compact('supply'));
	}





	public function pdf_report()
	{
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($this->convert_customer_data_to_html());
		return $pdf->stream();
	}

	public function generate_supply_report()
	{
		$supply = Supply::all();

		$output= '
		<h3 align="center">Supply Data</h3>
		<table width="100%" style="border-collapse: collapse; border: 0px;">
		<tr>
		<th style="border: 1px solid; padding:12px;" width="20%">Broker_supplier</th>
		<th style="border: 1px solid; padding:12px;" width="30%">Contact_No</th>
		<th style="border: 1px solid; padding:12px;" width="15%">Amount_allocated</th>
		<th style="border: 1px solid; padding:12px;" width="15%">Fruit_type</th>
		<th style="border: 1px solid; padding:12px;" width="20%">State</th>
	</tr>
		';
		foreach($supply as $supply)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$supply->supplier_name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supply->supplier_contact.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supply->supply_amount.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supply->fruit_grade.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supply->state.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
		
	 $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($output);
     return $pdf->stream();
    

	}

	public function prints()
	{
		$supply = $supply = Supply::all();
		return view('broker.prints',compact('supply'));
	}


	public function approve($id)
	{
		$inq = Inquire::find($id);

		$inq->status = 'paid';
		$expense = expenses::first();

		$expense->total_monthly_expenses = $expense->total_monthly_expenses-$inq->Total_to_be_paid;

		$expense->save();

		$inq->save();

		return redirect()->back();
	}

	public function decline($id)
	{
		$inq = Inquire::find($id);

		$inq->status = 'declined';

		$inq->save();

		return redirect()->back();
	}

	public function registr(Request $request)
	{
		$user = new User;

		$user->name = $request->name;
		$user->ID_Number = $request->ID_Number;
		$user->phone_number = $request->phone_number;
		$user->email = $request->email;
		$user->name = Hash::make($request->password);



		return redirect()->back();
	}

	public function registering()
	{
		



		return view('pages.register');
	}



	public function userd($id)
	{
		User :: where('id',$id)->delete();
        return  redirect()->back();

	}









    //
}
