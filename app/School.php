<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Student;

class School extends Model
{
    //

    public function students()
    {
        return  $this::hasMany('App\Student','school_id','id');
    }
    public function users()
    {
        return  $this::hasMany('App\User','school_id','id');
    }

    public function staffs()
    {
        return  $this::hasMany('App\Staff','school_id','id');
    }
}
