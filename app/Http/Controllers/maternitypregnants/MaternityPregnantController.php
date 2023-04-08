<?php

namespace App\Http\Controllers\maternitypregnants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\maternitypregnants\MaternityPregnant;

class MaternityPregnantController extends Controller
{
    public function getpage(){
        $maternityPregnants = MaternityPregnant::all();
        return view('pages.maternity-pregnant',compact('maternityPregnants'));
    }
}
