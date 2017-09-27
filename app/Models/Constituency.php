<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Constituency extends Model
{
    protected $fillable = [
        'county_code',
        'constituency_code',
        'constituency_name'
    ];
}
