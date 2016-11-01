<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
     protected $fillable = [
        'student_id', 'job_profile_id', 'company_id','offer_letter_status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   protected $table = 'placements';
}