<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;

class AdminController extends Controller
{

    protected $employee;
    
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('admin.index')->with('employee', $employee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // $employee= new Employee;
            // $employee->username = $request->name;
            // $employee->gender = $request->gender;
            // $employee->email = $request->email;
            // $employee->position = $request->position;
            // $employee->address = $request->address;
            // $employee->birth = $request->birth;
         dd($request->all());
         //$this->employee->create($request->all());
        // return redirect()->route('admin.employee');
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
        $employee = Employee::find($id);
        return view('admin.edit')->with('employee', $employee);
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

        //    $employee = Employee::find($id);
        //    $employee->username = $request->input('name');
        //    $employee->gender = $request->input('gender');
        //    $employee->email = $request->input('email');
        //    $employee->position = $request->input('position');
        //    $employee->address = $request->input('address');
        //    $employee->birth = $request->input('birth');
        //    $employee->save();
        //    $employee = $this->employee;
        
           $employee = $this->employee->find($id);
           if(!$employee)
             return back();

           $data = $request->all();
           $employee->update($data);
           return redirect()->route('admin.employee');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "ok delete";
    }
}
