<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobProfile extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
     protected $fillable = [
        'company_id', 'job_description', 'ctc'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   protected $table = 'job_profiles';
}