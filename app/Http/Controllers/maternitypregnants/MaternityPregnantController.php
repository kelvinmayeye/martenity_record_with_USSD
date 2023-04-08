<?php

namespace App\Http\Controllers\maternitypregnants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaternityPregnantController extends Controller
{
    public function getpage(){
        return view('pages.maternity-pregnant');
    }
}
