<?php

namespace App\Services;

use App\Repositories\Interfaces\SeatRepositoryInterface;
use App\Services\Interfaces\SeatServiceInterface;

class SeatService implements SeatServiceInterface
{
	protected $seatRepository;
	/**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(SeatRepositoryInterface $seatRepository)
    {
        $this->seatRepository = $seatRepository;
	}

    public function getAvailableSeats(array $tripData) : array
	{
        return $this->seatRepository->getAvailableSeats($tripData);
	}
	
    public function bookSeat(array $tripData) : bool
	{
        return true;
	}
}
