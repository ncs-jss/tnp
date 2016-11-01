<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyContact extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
     protected $fillable = [
        'name', 'contact', 'company_id','email','designation'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   protected $table = 'company_contacts';
}