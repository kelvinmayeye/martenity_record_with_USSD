<?php

use Illuminate\Support\Facades\DB;
use App\Models\pregnantreports\PregnantReport;
use App\Models\maternitypatients\MaternityPatient;
use App\Models\maternitypregnants\MaternityPregnant;
use App\Models\preganantreportreplies\PregnantReportReply;


function sendReport($phoneNumber, $problem){
$userNotRegistered = "END Samahani Namba hii ya simu haipo kwenye mfumo fika hospitali kuhakiki taarifa zako au kufanya usajili";


    $user = MaternityPatient::where('phone_number', $phoneNumber)
            ->first();

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

function getUserInformations($phoneNumber){

    $user = MaternityPatient::where('phone_number', $phoneNumber)
            ->first();

    if ($user) {
      $response = sendDetailsSms();
       // $response = 'END Utapokea ujumbe mfupi pokea ujumbe mfupi wenye taarifa zako.';
    }else{
        $response = "END Samahani namba hii haipo kwenye orodha ya wasajiliwa fika hospitali kuhakii taarifa zao.";
    }
    return $response;
}

function sendDetailsSms(){
    $api_key = '2e3e988773113f22';
    $secret_key = 'MjNlNTYzNGEwZjI5ZDc0NWU1MWIxMmQ3MjY1ZTBjNWY2NjUzZjEwYTZmZjFmYjEzZDI5ODgwZWMwMzVmZmFmOQ==';


    $postData = array(
        'source_addr' => 'INFO',
        'encoding'=>0,
        'schedule_time' => '',
        'message' => 'Hello, Sms from maternity app(Dev)',
        'recipients' => [array('recipient_id' => '255672995073','dest_addr'=>'255672995073')]
    );

    info('sms body', [
        'body' => $postData
    ]);

    $Url = 'https://apisms.beem.africa/v1/send';

    $ch = curl_init($Url);
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
            'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => json_encode($postData)
    ));

    $response = curl_exec($ch);  

    if ($response === FALSE) {
        // echo $response;
        $response = 'END Ujumbe umefaili.';   
    }
    $toJson = json_decode($response);

    if ($toJson->code == 100) {
        return $response = 'END Utapokea ujumbe mfupi punde kuhusu taarifa zako';
    } else {
        return $response = 'END Pole kuna tatizo kuna itilafu jaribu tena baadae';
    }
    
    return $response;
}