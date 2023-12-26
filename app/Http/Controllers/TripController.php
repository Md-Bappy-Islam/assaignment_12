<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Line;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    function create(){
        $buses=Bus::all();
        $lines=Line::all();

        return view('pages.create_trip',['buses'=>$buses,'lines'=>$lines]);
    }
    function store(Request $request){
        $this->validate($request,[
            'bus_id'=>'required',
            'line_id'=>'required',
            'name'=>'required|string|max:255',
            'time'=>'required'
        ]);
        Trip::create([
            'bus_id'=>$request->input('bus_id'),
            'line_id'=>$request->input('line_id'),
            'name'=>$request->input('name'),
            'time'=>$request->input('time')
        ]);
        return redirect()->back()->with('success','Trip added successfully');
    }
}
