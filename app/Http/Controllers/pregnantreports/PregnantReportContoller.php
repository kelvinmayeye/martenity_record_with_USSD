<?php

namespace App\Http\Controllers\pregnantreports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\pregnantreports\PregnantReport;

class PregnantReportContoller extends Controller
{
    public function getReports(){
        $pregnantReport = PregnantReport::all();
        return view('pages.reports.all_reports',compact('pregnantReport'));
    }
}
