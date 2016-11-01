<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentMark extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
     protected $fillable = [
        'student_id', 'diploma', 'Xmarkstype',
        'Xmarks','XIImarkstype','XIImarks',
        'sem1','sem2','sem3','sem4','sem5',
        'sem6','sem7','sem8','diplomayr1','diplomayr2'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   protected $table = 'marks';
}