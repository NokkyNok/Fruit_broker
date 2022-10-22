<?php

namespace App\Http\Controllers;

use Auth;
use App\Supply;
use App\expenses;
use Illuminate\Http\Request;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $expense = expenses::take(1)->first();

        $supply = new Supply();

        $supply->supplier_name = $request->supplier_name;
        $supply->supply_amount= $request->supplier_amount;
        $supply->supplier_contact = $request->supplier_contact;
        $supply->location = $request->location;
        $supply->fruit_grade = $request->fruit_grade;
        $supply->due_after = $request->due_after;
        $supply->broker = Auth::user()->email;

        $expense->total_monthly_expenses = $expense->total_monthly_expenses - $supply->supply_amount;

        $expense->save();

        $supply->save();

        return redirect()->back()->with('success','Submission received, supplier will be notified promptly');
        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show(Supply $supply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit(Supply $supply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supply $supply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supply $supply)
    {
        //
    }
}
