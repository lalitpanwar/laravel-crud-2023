<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{

    public $timestamps=false;
    use HasFactory;

    //  function getNameAttribute($value)
    //  {
    //     return $this->attributes['name']='Mr.' . $value;
   
    //  }

    function setNameAttribute($value)
    {
        return $this->attributes['name']='Mr. '.$value;

    }
    function setEmailAttribute($value)
    {
        return $this->attributes['email']='official+'.$value;
    }

     
}
