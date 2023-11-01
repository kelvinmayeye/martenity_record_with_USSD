<?php

namespace App\Http\Controllers\pregnantreports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\pregnantreports\PregnantReport;
use App\Models\preganantreportreplies\PregnantReportReply;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PregnantReportContoller extends Controller
{
    public function getReports(){
        $pregnantReport = PregnantReport::all();
        return view('pages.reports.all_reports',compact('pregnantReport'));
    }

    public function storeReply(Request $request){
        $specialist_id = User::find(auth()->user()->id)->first();
        $reply = new PregnantReportReply();
        $reply->pregnant_report_id = $request->pregnantReport_id;
        $reply->message = $request->message;
        $reply->specialist_id = $specialist_id->specialist->id;
        if ($reply->save()) {
            //update report status
            $report = PregnantReport::find($request->pregnantReport_id);
            $report->is_attended = 1;
            $report->save();
            Session::flash('success','Report Reply was sent successfuly');
            return back();
        }
        Session::flash('error','Failed to reply please try again');
        return back();
    }


    public function viewReply($id){
        $replies = PregnantReportReply::where('pregnant_report_id',$id)->get();
        $report = PregnantReport::find($id)->first();
        return view('pages.reportreplies.view_report_reply',compact('replies','report'));
    }
}