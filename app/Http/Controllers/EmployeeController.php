<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Establishment;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
        $establishments=Establishment::all();
        return view('employee.registration')->with('establishments', $establishments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'emp_id' => 'required|unique:employees|alpha_num',
            'dob' => 'required|date_format:dd/mm/YY',
            'gender' => 'required',
            'fname' => 'required|alpha',
            'mname' => 'alpha|nullable',
            'lname' => 'required|alpha',
            'edu_qual' => 'alpha',
            'pan' => 'alpha_num|nullable',
            'adhar' => 'alpha_num|nullable',
            'email' => 'email|nullable',
            'phone' => 'required|digits:12',
            'present_add' => 'alpha',
            'permanent_add' => 'alpha',
            'court_id' => 'required|alpha_num',
            'post_id' => 'required|alpha_num',
            'loc_id' => 'required|alpha_num',
            'doj' => 'date_format:d/m/Y',
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
