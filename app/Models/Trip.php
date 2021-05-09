<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from',
        'to'
    ];

    public function tickets(){
        return $this->hasManyThrough(Ticket::class,BusTrip::class);
    }

    public function buses(){
        return $this->hasManyThrough(Bus::class,BusTrip::class);
    }
}
