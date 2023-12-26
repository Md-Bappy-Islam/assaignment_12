<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Seat;
use App\Models\Stop;
use App\Models\Trip;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    function select(Request $request)
    {
        $buses = Bus::all();
        return view('pages.select_bus', ['buses' => $buses]);
    }
    function useBusId(Request $request)
    {
        $this->validate($request, [
            'bus_id' => 'required'
        ]);
        $bus_id = $request->input('bus_id');
        $trips = Trip::select('*')->where('bus_id', $bus_id)->get();
        $seats = Seat::where('bus_id', $bus_id)->whereNotIn('id', function ($query) {
            $query->select('seat_id')
                ->from('stops');
        })->get();
        return view('pages.purchase', ['trips' => $trips, 'seats' => $seats, 'bus_id' => $bus_id]);
    }
    function store(Request $request)
    {
        $this->validate($request, [
            'trip_id' => 'required',
            'seat_id' => 'required',
            'time' => 'required',
            'datepicker' => 'required'
        ]);
        Ticket::create([
            'time' => $request->input('time'),
            'date' => $request->input('datepicker'),
            'bus_id' => $request->input('bus_id'),
            'trip_id' => $request->input('trip_id'),
            'seat_id' => $request->input('seat_id'),
            'user_id' => 1
        ]);
        Stop::create([
            'time' => $request->input('time'),
            'date' => $request->input('datepicker'),
            'bus_id' => $request->input('bus_id'),
            'trip_id' => $request->input('trip_id'),
            'seat_id' => $request->input('seat_id'),
            'user_id' => 1
        ]);


        return redirect()->route('purchase')->with('success', 'Ticket Purchase successfully');
    }

}
