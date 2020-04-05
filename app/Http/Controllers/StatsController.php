<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ohlcResource;
use App\Repository\StatsRepository;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ohlc()
    {
        $data = StatsRepository::getOhlcFilteredByRangeDate('day');

        return ohlcResource::collection($data);
    }
}
