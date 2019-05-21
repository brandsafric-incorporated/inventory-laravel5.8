<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable=['name','code','status'];

    public function subDepartments()
    {
        return $this->hasMany('App\Models\SubDepartment','department_id','id');
    }
}
