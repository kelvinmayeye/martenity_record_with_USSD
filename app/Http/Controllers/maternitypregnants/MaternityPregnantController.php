<?php

namespace App\Http\Controllers\maternitypregnants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\maternitypregnants\MaternityPregnant;
use Illuminate\Support\Facades\Session;

class MaternityPregnantController extends Controller
{
    public function getpage(){
        $maternityPregnants = MaternityPregnant::all();
        return view('pages.maternity-pregnant',compact('maternityPregnants'));
    }

    public function store(Request $request){
        $maternityPregnant = new MaternityPregnant();

        //store the data from form POST request into table
        $maternityPregnant->maternity_patient_id = $request->patient_id;
        $maternityPregnant->is_delivered = $request->maternity_type;
        $maternityPregnant->due_date = $request->due_date;
        $maternityPregnant->num_fetuses = $request->num_fetuses;
        $maternityPregnant->save();
        Session::flash("success","Added Successfuly");
        return back();
    }
}
