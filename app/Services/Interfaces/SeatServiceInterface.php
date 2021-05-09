<?php

namespace App\Services\Interfaces;

interface SeatServiceInterface 
{
    public function getAvailableSeats(array $tripData): array;
    public function bookSeat(array $tripData) : bool;
}
