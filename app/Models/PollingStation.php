<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollingStation extends Model
{
    protected $fillable = [
        'county_code',
        'constituency_code',
        'caw_code',
        'polling_station_code',
        'polling_station_name'
    ];
}
