<?php

namespace App\Http\Controllers\complications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\complications\Complication;

class ComplicationsController extends Controller
{
    public function getAddComplication(){
        
        return view('pages.complications.add_complication');    
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required'
        ]);
        
        $complication = new Complication();
        $complication->name = $request->name;
        $complication->maternity_type = $request->type;
        $complication->save();
        Session::flash('success', 'added successfully.');
        return back();
        
        return view('pages.complications.add_complication');    
    }
}