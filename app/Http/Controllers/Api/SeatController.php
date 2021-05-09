<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AvailableSeatsRequest;
use App\Http\Requests\BookRequest;
use App\Services\Interfaces\SeatServiceInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class SeatController extends Controller
{
    protected $seatService ;
    /**
     * VoucherController constructor.
     */
    public function __construct(SeatServiceInterface $seatService)
    {
        $this->seatService = $seatService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAvailableSeats(AvailableSeatsRequest $request)
    {
        try{
            $tripData = $request->only([
                'from','to'
            ]);
            return response()->json(["message" => $this->seatService->getAvailableSeats($tripData)],Response::HTTP_OK);
        }catch (Exception $exception) {
            Log::error("List bus seats : ".$exception);
            return response()->json(["message" => $exception->getMessage()],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * book a seat if there is an available.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookSeat(BookRequest $request)
    {
        try{
            $tripData = $request->only([
                'from','to'
            ]);
            return response()->json(["message" => $this->seatService->bookSeat($tripData)],Response::HTTP_OK);
        }catch (Exception $exception) {
            Log::error("book seat : ".$exception);
            return response()->json(["message" => $exception->getMessage()],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
