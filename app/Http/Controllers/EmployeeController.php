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
        $this->validate($request, [
            'emp_id' => 'required|unique:employees',
            'dob' => 'required|date_format:d/m/Y',
            'gender' => 'required',
            'fname' => 'required|alpha',
            'mname' => 'alpha',
            'lname' => 'required|alpha',
            'edu_qual' => 'alpha',
            'pan' => 'alpha_num',
            'adhar' => 'alpha_num',
            'email' => 'email',
            'phone' => 'required|digits:12',
            'present_add' => 'alpha',
            'permanent_add' => 'alpha',
            'court_id' => 'required|digits:3',
            'post_id' => 'required|digits:3',
            'loc_id' => 'required|digits:3',
            'doj' => 'date_format:d/m/Y',
        ]);
        dd($request->all());
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
