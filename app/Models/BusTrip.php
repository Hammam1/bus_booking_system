<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BusTrip extends Pivot
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bus_plate_number',
        'trip_id',
        'trip_type'
    ];
}
