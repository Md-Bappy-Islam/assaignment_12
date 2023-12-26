<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    function create(){
        return view('pages.create_bus');
    }
    function store(Request $request){
        $this->validate($request,[
            'name'=>'required|string|max:100'
        ]);
        Bus::create([
            'name'=>$request->input('name'),
        ]);
        return redirect()->back()->with('success','Bus added successfully');
    }

}
