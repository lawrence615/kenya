<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable = [
        'county_code',
        'county_name'
    ];
}
