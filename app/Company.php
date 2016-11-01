<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
     protected $fillable = [
        'name', 'address', 'company_category'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   protected $table = 'companies'
}