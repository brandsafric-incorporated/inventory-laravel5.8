<?php

namespace App\Http\Controllers;

use App\Models\SubDepartment;
use App\Models\Department;
use Illuminate\Http\Request;

class SubDepartmentsController extends Controller
{
    protected $model;

    public function __construct(SubDepartment $subDepartment)
    {
        $this->model=$subDepartment;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=$this->model->OrderBy('id','desc')->get();
        return view('backend.sub-department.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department=new Department();
        $departments=$department->orderBy('name','asc')->get(['id','name']);
        return view('backend.sub-department.create',compact('departments'));
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
            'department_id'=>'required',
            'name'=>'required',
            'code'=>'required|unique:departments,code',
            'status'=>'required|numeric'
            ]);
        $this->model->create($request->all());
        return redirect()->back()->withSuccess("Sub Department successfully added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubDepartment  $subDepartment
     * @return \Illuminate\Http\Response
     */
    public function show(SubDepartment $subDepartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubDepartment  $subDepartment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department=new Department();
        $departments=$department->orderBy('name','asc')->get(['id','name']);
        $data=$this->model->find($id);
        return view('backend.sub-department.create',compact('data','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubDepartment  $subDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$this->validate($request,[
            'department_id'=>'required',
            'name'=>'required',
            'code'=>'required|unique:sub_departments,code,'.$id,
            'status'=>'required|numeric'
            ]);
        $subDepartment=$this->model->find($id);
        $subDepartment->update($data);
        return redirect()->route('admin.sub-departments.index')->withSuccess("Sub Department successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubDepartment  $subDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=$this->model->find($id);
        $data->delete();
        return redirect()->back()->withSuccess('Sub Department Successfully Deleted!!!');
    }
}
