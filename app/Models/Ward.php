<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $fillable = [
        'county_code',
        'constituency_code',
        'caw_code',
        'caw_name'
    ];
}
