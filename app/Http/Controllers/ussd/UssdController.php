<?php

namespace App\Http\Controllers\ussd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pregnantreports\PregnantReport;
use App\Models\maternitypatients\MaternityPatient;

class UssdController extends Controller{
    public function startUssd(Request $request){
// Read the variables sent via POST from our API
$sessionId   = $request->sessionId;
$serviceCode = $request->serviceCode;
$phoneNumber = ltrim($request->phoneNumber, '+');
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
    $response .= "2. Homa kali \n";
    $response .= "3. Maumivu chini ya tumbo \n";
    $response .= "4. Kutoka damu \n";
    $response .= "5. Uchungu Kabla \n";
    $response .= "6. Kuvimba miguu,uso au mikono \n";

} else if ($text == "2") {

    $response = checkReportStatus($phoneNumber);

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
    $problem = "Maumivu ya mgongo";
    $response = sendReport($phoneNumber,$problem);


} else if($text == "1*2") {
    // This is a second level response where the user selected 1 in the first instance
    $problem = "Homa kali";
    $response = sendReport($phoneNumber,$problem);

} else if($text == "1*3") {
    // This is a second level response where the user selected 1 in the first instance
    $problem = "Maumivu chini ya tumbo";
    $response = sendReport($phoneNumber,$problem);
} else if($text == "1*4") {
    // This is a second level response where the user selected 1 in the first instance
    $problem = "Kutoka damu";
    $response = sendReport($phoneNumber,$problem);

} else if($text == "1*5") {
    // This is a second level response where the user selected 1 in the first instance
    $problem = "Uchungu Kabla";
    $response = sendReport($phoneNumber,$problem);

} else if($text == "1*6") {
    // This is a second level response where the user selected 1 in the first instance
    $problem = "Kuvimba miguu,uso au mikono";
    $response = sendReport($phoneNumber,$problem);

}

// Send the response back to the API
return response($response)->header('Content-Type', 'text/plain');
    }
}