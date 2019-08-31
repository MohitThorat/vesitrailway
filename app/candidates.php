<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidates extends Model
{
    protected $fillable = [
        'name', 'location','expected_salary','role',
    ];
}
