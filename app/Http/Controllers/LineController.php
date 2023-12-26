<?php

namespace App\Http\Controllers;

use App\Models\Line;
use Illuminate\Http\Request;

class LineController extends Controller
{
    function create(){
        return view('pages.create_line');
    }
    function store(Request $request){
        $this->validate($request,[
            'name'=>'required|string|max:100'
        ]);
        Line::create([
            'name'=>$request->input('name'),
        ]);
        return redirect()->back()->with('success','Line added successfully');
    }
}
