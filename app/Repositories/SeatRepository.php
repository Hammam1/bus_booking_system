<?php

namespace App\Repositories;

use App\Models\Bus;
use App\Models\Ticket;
use App\Models\Trip;
use App\Repositories\Interfaces\SeatRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class SeatRepository extends BaseRepository implements SeatRepositoryInterface
{
	protected $busModel,$tripModel,$ticketModel;
	/**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Bus $busModel,Trip $tripModel,Ticket $ticketModel)
    {
        $this->busModel = $busModel;
        $this->tripModel = $tripModel;
        $this->ticketModel = $ticketModel;
	}

	public function getAvailableSeats(array $tripData) : array
	{
		dd($this->ticketModel->trip()->where('from',$tripData['from'])->where('to',$tripData['to'])->first());
		return [];
	}

	public function getBookedSeats(array $tripData) : array
	{
		dd($this->ticketModel->trip()->where('from',)->where('to',)->get());
	}

    public function bookSeat(array $tripData) : bool
	{
		return true;
	}
}
