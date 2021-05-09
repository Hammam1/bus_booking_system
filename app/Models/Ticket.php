<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'seat_number'
    ];

    public function trip(){
        return $this->hasOneThrough(Trip::class,BusTrip::class);
    }

    public function bus(){
        return $this->hasOneThrough(Bus::class,BusTrip::class);
    }
}
