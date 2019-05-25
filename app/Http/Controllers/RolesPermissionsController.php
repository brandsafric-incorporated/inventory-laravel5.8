<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Role::get();
        return view('backend.role-permission.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::get();
        $permissions=Permission::get();
        return view('backend.role-permission.create',compact('roles','permissions'));
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
            'role'=>'required',
            'permission'=>'required'
        ]);
        /** Finding Role by role_id */
        $role=Role::findById($request->role);
        /** Multiple permissions synced to a role */
        $role->syncPermissions($request->permission);

        // foreach($request->permission as $permission){
        //     /** Finding Permission By permission_id */
        //     $permission=Permission::findById($permission);
        //     /** Assigning Permission to role */
        //     $role->givePermissionTo($permission);
        // }
        return redirect()->back()->withSuccess('Permission asssigned to Role Successfully!!!');
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
        $data=Role::findById($id);
        /** Extract all the permissions of role */
        $permission=$data->getAllPermissions();
        /** Converting permission collection to array 
         * so that we can check the checkbox by using 
         * in_array() function.
        */
        $rolePermission=array();
        foreach($permission as $per){
            $rolePermission[]=$per->id;
        }  
        /** Get all roles */
        $roles=Role::get();
        /** Get all permissions */
        $permissions=Permission::get();
        return view('backend.role-permission.create',compact('data','rolePermission','roles','permissions'));
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
        $this->validate($request,[
            'role'=>'required',
            'permission'=>'required'
        ]);
        /** Finding Role by role_id */
        $role=Role::findById($request->role);
        /** Multiple permissions synced to a role */
        $role->syncPermissions($request->permission);
        return redirect()->route('admin.roles-permissions.index')->withSuccess('Role and Permission Updated Successfully!!!');
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
