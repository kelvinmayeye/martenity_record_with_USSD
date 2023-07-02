<?php

namespace App\Http\Controllers\maternityattendances;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\maternityattendances\MaternityAttendance;

class MaternityAttendancesController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'maternity_pregnant_id' => 'required|numeric',
            'maternity_type' => 'required|numeric',
            'weight' => 'nullable|numeric|min:0|max:999.99',
            'description' => 'nullable|string',
        ]);
        
        $attendence = new MaternityAttendance();
        $attendence->maternity_pregnant_id = $request->maternity_pregnant_id;
        $attendence->type = $request->maternity_type;
        $attendence->weight = $request->weight;
        $attendence->description = $request->description;
        $attendence->specialist_id = 1;
        $attendence->save();
        Session::flash('success', 'Record added successfully.');
        return back();
    }
}