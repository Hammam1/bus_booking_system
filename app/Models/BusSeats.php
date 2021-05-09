<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSeats extends Model
{
    use HasFactory;
    protected $fillable = [
        'seat_name'
    ];

    public function bus(){
        return $this->hasOne(Bus::class,'bus_plate_number','plate_number');
    }
}
