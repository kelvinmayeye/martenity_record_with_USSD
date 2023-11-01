<?php

namespace App\Http\Controllers\maternitypatients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\maternitypatients\MaternityPatient;
use Illuminate\Support\Facades\Session;

class MaternityPatientController extends Controller
{
    public function registerPage(){
        return view('pages.maternitypatients.register-patient');
    }

    public function storePatient(Request $request){
    // Create a new MaternityPatient instance
    $patient = new MaternityPatient();
    $patient->first_name = $request->firstname;
    $patient->middle_name = $request->middlename;
    $patient->last_name = $request->lastname;
    $patient->dob = $request->dob;
    $patient->occupation = $request->occupation;
    $patient->blood_group = $request->blood_group;
    $patient->Phone_number = $request->PhoneNumber;
    // Save the patient to the database
    $patient->save();
    Session::flash("success","New Patient added successful");
    return back();
    }

    public function allPatients(){
        $maternityPatients = MaternityPatient::all();
        return view('pages.maternitypatients.all-patients',compact('maternityPatients'));
    }
}
