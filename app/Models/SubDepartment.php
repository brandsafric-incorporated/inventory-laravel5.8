<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubDepartment extends Model
{
    protected $fillable=['department_id','name','code','status'];

    public  function department()
    {
        return $this->belongsTo('App\Models\Department','department_id','id');
    }
}
