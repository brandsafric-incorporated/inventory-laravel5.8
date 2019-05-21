<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    protected $model;

    public function __construct(Department $department)
    {
        $this->model=$department;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=$this->model->OrderBy('id','desc')->get();
        return view('backend.department.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'code'=>'required|unique:departments,code',
            'status'=>'required|numeric'
            ]);
        $this->model->create($request->all());
        return redirect()->back()->withSuccess("Department successfully added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=$this->model->find($id);
        return view('backend.department.create',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$this->validate($request,[
            'name'=>'required',
            'code'=>'required|unique:departments,code,'.$id,
            'status'=>'required|numeric'
            ]);
        $department=$this->model->find($id);
        $department->update($data);
        return redirect()->route('admin.departments.index')->withSuccess("Department successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=$this->model->find($id);
        $data->delete();
        return redirect()->back()->withSuccess('Department Successfully Deleted!!!');
    }
}
