<?php

namespace App\Repositories\Interfaces;

interface SeatRepositoryInterface 
{
    public function getAvailableSeats(array $tripData) : array;
    public function getBookedSeats(array $tripData) : array;
    public function bookSeat(array $tripData) : bool;
}
