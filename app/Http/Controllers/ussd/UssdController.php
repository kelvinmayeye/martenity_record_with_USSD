<?php

namespace App\Http\Controllers\ussd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pregnantreports\PregnantReport;
use App\Models\maternitypatients\MaternityPatient;

class UssdController extends Controller{
    public function startUssd(Request $request){
// Read the variables sent via POST from our API
$sessionId   = $request->sessionId;
$serviceCode = $request->serviceCode;
$phoneNumber = $request->phoneNumber;
$text = $request->text;

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Karibu Ndugu ".$phoneNumber." menu kuu \n";
    $response .= "1. Ripoti Tatizo \n";
    $response .= "2. Angalia Jibu la Ripoti \n";
    $response .= "3. Hakiki Taarifa \n";
    $response .= "4. Pata ufipisho wa Ripoti \n";
    $response .= "5. Sitisha";

} else if ($text == "1") {
    // Business logic for first level response
    $response  = "CON Chagua Tatizo \n";
    $response .= "1. Maumivu ya mgongo \n";
    $response .= "2. Shinikizo la damu \n";
    $response .= "3. Kuvimba miguu \n";
    $response .= "4. Kutoka damu \n";

} else if ($text == "2") {
    $reports = PregnantReport::find(1);
    if($reports == 0){
        $response = "END hauna taarifa yoyote";
    }else{
        $response = "END Taarifa zako ni hizo";
    }


} else if ($text == "3") {
    $response = "END Jina fulani kanani namba ya simu 0765122900 usajili wa uzazi ni mara 2.";

} else if ($text == "4") {
    $response  = "END Tariafaa fupi za ripoti \n";
    $response .= "1. Maumivu ya mgongo \n";
    $response .= "2. Shinikizo la damu";

} else if ($text == "5") {

    $response = "END Asante Kwa heri";

} else if($text == "1*1") {
    // This is a second level response where the user selected 1 in the first instance
    $phoneNumber = ltrim($phoneNumber, '+');

    $user = MaternityPatient::where('phone_number', $phoneNumber)
            ->first(['id', 'first_name','middle_name','last_name']);

            if ($user) {
                $id = $user->id;
                $username = $user->fullname;
                //insert the report

                // do something with the id and username
                $response  = "END Pole kwa tatizo hilo ".$username." \n";
                $response .= "Taarifa zako zimetufikia maumivu yaki zidi fika hospitali yoyote karibu na wewe\n";
            } else {
                $response  = "END Samahani system haikutambui \n";
            }

} else if($text == "1*2") {
    // This is a second level response where the user selected 1 in the first instance
    $response  = "END Pole kwa shida hio \n";
    $response .= "Una shauriwa kufika hospitali mapema \n";

} else if($text == "1*3") {
    // This is a second level response where the user selected 1 in the first instance
    $response  = "END Pole kwa shida hio \n";
    $response .= "Jitahidi kufanya mazoezi lakini maumivu yakizidi fika hospitali \n";

} else if($text == "1*4") {
    // This is a second level response where the user selected 1 in the first instance
    $response  = "END Pole kwa shida hio \n";
    $response .= "Una shauriwa kufika hospitali upesi \n";

}

// Send the response back to the API
return response($response)->header('Content-Type', 'text/plain');
    }
}