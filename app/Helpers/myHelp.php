<?php

use Illuminate\Support\Facades\DB;
use App\Models\pregnantreports\PregnantReport;
use App\Models\maternitypatients\MaternityPatient;
use App\Models\maternitypregnants\MaternityPregnant;
use App\Models\preganantreportreplies\PregnantReportReply;


function sendReport($phoneNumber, $problem){
$userNotRegistered = "END Samahani Namba hii ya simu haipo kwenye mfumo fika hospitali kuhakiki taarifa zako au kufanya usajili";

    $user = MaternityPatient::where('phone_number', $phoneNumber)
            ->first(['id', 'first_name', 'middle_name', 'last_name']);

    if ($user) {
        $id = $user->id;
        $username = $user->fullname;

        $maternity_pregnant = DB::table('maternity_pregnant')
                ->where('maternity_patient_id', $id)
                ->orderBy('id', 'desc')
                ->first(['id']);

        if ($maternity_pregnant) {
            $maternity_pregnant_Id = $maternity_pregnant->id;

            $report = new PregnantReport();
            $report->maternity_pregnant_id = $maternity_pregnant_Id;
            $report->issue = $problem;
            $report->is_attended = 0;
            $report->save();

            $response  = "END Pole kwa tatizo hilo ".$username." \n";
            $response .= "Taarifa zako zimetufikia maumivu yaki zidi fika hospitali yoyote karibu na wewe\n";

        } else {
            $response  = "END Pole kwa tatizo hilo ".$username." \n";
            $response .= "Taarifa hii imefeli kwenda tafadhali fika hospitali kuhakiki taarifa zako\n";
        }

    } else {
        $response  = $userNotRegistered;
    }

    return $response;
}

function checkReportStatus($phoneNumber){
$userNotRegistered = "Samahani Namba hii ya simu haipo kwenye mfumo fika hospitali kuhakiki taarifa zako au kufanya usajili";

     $user = MaternityPatient::where('phone_number', $phoneNumber)
            ->first(['id', 'first_name', 'middle_name', 'last_name']);

    //check if user is registered
    if ($user) {
        $id = $user->id;
        $username = $user->fullname;

        $maternity_pregnant = DB::table('maternity_pregnant')
                ->where('maternity_patient_id', $id)
                ->orderBy('id', 'desc')
                ->first(['id']);

        if ($maternity_pregnant) {
            $maternity_pregnant_Id = $maternity_pregnant->id;

            $pregnantReports = MaternityPregnant::find($maternity_pregnant_Id)->pregnantReports;
            $replies = '';

                foreach ($pregnantReports as $pregnantReport) {
                    $pregnantReportReplies = $pregnantReport->pregnantReportReplies()->latest()->take(3)->get();

                    if ($pregnantReportReplies->count() == 0) {
                        $response = "END hukuna majibu yoyote kwa sasa";
                    } else {
                        foreach ($pregnantReportReplies as $reply) {
                        $replies .= $reply->message . "\n";
                        }
                    }
                }

        }else {
                $response  = "END Pole kwa tatizo hilo ".$username." \n";
                $response .= "Taarifa hii imefeli kwenda tafadhali fika hospitali kuhakiki taarifa zako";
            }
    }else{
        $replies = $userNotRegistered;
    }

        return $response = "END ujumbe kutoka ripoti zilizo pita \n".$replies;
}
