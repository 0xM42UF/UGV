<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\dept;

class deptcontroller extends Controller
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
        return view('dept.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'dept_name'=>'required',
           'dept_code'=>'required',
           'std_name'=>'required',
           'std_id'=>'required',
           'std_mail'=>'required',
        ],
        [
            'dept_name.required'=>'Please enter department name',
            'dept_code.required'=>'Please enter department code',
            'std_name.required'=>'Please enter Student name',
            'std_id.required'=>'Please enter Student id',
            'std_mail.required'=>'Please enter Student mail',

        ]);
        $data=$request->all();
        dept::create($data);

        return back()->with('success','data inserted successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
