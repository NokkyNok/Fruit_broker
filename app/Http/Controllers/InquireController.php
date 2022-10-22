<?php

namespace App\Http\Controllers;

use App\Inquire;
use Illuminate\Http\Request;
use Auth;

class InquireController extends Controller
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

        $inquiry = new Inquire();

        $inquiry->supplier = Auth::user()->email;
        $inquiry->phone = $request->phone;
        $inquiry->fruits_no = $request->fruits_no;
        $inquiry->fruit_grade = $request->fruit_grade;
        $inquiry->price_per = $request->price_per;
        $inquiry->date_ready = $request->date_ready;
        $inquiry->Total_to_be_paid = $inquiry->fruits_no * $inquiry->price_per;

        $inquiry->save();

        return redirect()->back()->with('success','Request received, Broker will reach you back, Goodday');


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inquire  $inquire
     * @return \Illuminate\Http\Response
     */
    public function show(Inquire $inquire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquire  $inquire
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquire $inquire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquire  $inquire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquire $inquire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquire  $inquire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquire $inquire)
    {
        //
    }
}
