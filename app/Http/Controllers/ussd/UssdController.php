<?php

namespace App\Http\Controllers\ussd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UssdController extends Controller
{
    public function startUssd(Request $request){

// Read the variables sent via POST from our API
$sessionId   = $request->sessionId;
$serviceCode = $request->serviceCode;
$phoneNumber = $request->phoneNumber;
$text = $request->text;

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Karibu Ndugu katika menu kuu \n";
    $response .= "1. Ripoti Tatizo \n";
    $response .= "2. Angalia Jibu la Ripoti";

} else if ($text == "1") {
    // Business logic for first level response
    $response  = "CON Chagua Tatizo \n";
    $response .= "1. Maumivu ya mgongo \n";
    $response .= "2. Shinikizo la damu \n";
    $response .= "3. Kuvimba miguu \n";
    $response .= "4. Kutoka damu \n";

} else if ($text == "2") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Your phone number is ".$phoneNumber;

} else if($text == "1*1") {
    // This is a second level response where the user selected 1 in the first instance
    $response  = "END Pole \n";
    $response .= "1. Taarifa zako zimetufikia \n";

}

// Send the response back to the API
return response($response)->header('Content-Type', 'text/plain');
    }
}
