<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    //
    public function classes()
    {
        return $this::hasMany('\App\ClassLevel','level_id','id');
    }
}
