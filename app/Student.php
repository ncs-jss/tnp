<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
     protected $fillable = [
        'name', 'email', 'course','branch','rollno','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   protected $table = 'students';
}