<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    function create(){
        $buses=Bus::all();

        return view('pages.create_seat',['buses'=>$buses]);
    }
    // function store(Request $request){
    //     $this->validate($request,[
    //         'bus_id'=>'required',
    //     ]);
    //     $seats=[
    //         'A1','A2','A3','A4','B1','B2','B3','B4','C1','C2','C3','C4','D1','D2','D3','D4',
    //         'E1','E2','E3','E4','F1','F2','F3','F4','G1','G2','G3','G4','H1','H2','H3','H4',
    //     ];
    //     Seat::create([
    //         'bus_id'=>$request->input('bus_id'),
    //         'name'=>$seats,
    //     ]);
    //     return redirect()->back()->with('success','Seat added successfully');
    // }


    function store(Request $request){
        $this->validate($request,[
            'bus_id'=>'required',
        ]);
        $seats=[
            'A1','A2','A3','A4','B1','B2','B3','B4','C1','C2','C3','C4','D1','D2','D3','D4',
            'E1','E2','E3','E4','F1','F2','F3','F4','G1','G2','G3','G4','H1','H2','H3','H4',
        ];
        foreach($seats as $seat)
        // $json_data=json_encode($seat);
        Seat::create([
            'bus_id'=>$request->input('bus_id'),
            'name'=>$seat,
        ]);
        return redirect()->back()->with('success','Seat added successfully');
    }
}
