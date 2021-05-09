<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $primaryKey = 'plate_number';
    public $incrementing = false;
    protected $keyType = 'string';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plate_number',
        'seat_numbers',
        'seats',
    ];

    protected $casts = [
        'seats' => 'json'
    ];

    public function tickets(){
        return $this->hasManyThrough(Ticket::class,BusTrip::class);
    }

    public function trip(){
        return $this->hasOneThrough(Trip::class,BusTrip::class);
    }
}
