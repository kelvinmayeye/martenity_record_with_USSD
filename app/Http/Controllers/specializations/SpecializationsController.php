<?php

namespace App\Http\Controllers\specializations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\specializations\Specialization;

class SpecializationsController extends Controller
{
    public function addSpecialization(){
        return view('pages.specialization.add_specialization');
    }

    public function store(Request $request){
        $specialization  = new Specialization();
        $specialization->name = $request->name;
        $specialization->description = $request->description;
        $specialization->save();
        Session::flash('success','Complication added successfully');
        return back();
    }
}