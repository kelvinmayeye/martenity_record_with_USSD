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

// Parse the user's input
$menu_items = [
    1 => [
        'text' => 'list ya matatizo',
        'description' => '1.Maumivu ya mgongo\n2.Shinikizo la damu\n3.Kuvimba miguu\n4.Kutoka damu\n99.Rudi menu kuu\n0.Sitisha',
        'example' => '',
    ],
    2 => [
        'text' => 'Python',
        'description' => 'Interpreted, high-level, general-purpose programming language.',
        'example' => 'Web development, scientific computing, data analysis, artificial intelligence (AI), machine learning (ML), automation, and many more.',
    ],
    3 => [
        'text' => 'Java',
        'description' => 'Object-oriented programming language for general-purpose computing.',
        'example' => 'Enterprise applications, Android mobile applications, game development, scientific applications, and many more.',
    ],
    4 => [
        'text' => 'JavaScript',
        'description' => 'High-level, dynamic programming language for creating interactive web pages.',
        'example' => 'Client-side scripting, server-side scripting, desktop and mobile application development, and many more.',
    ],
    5 => [
        'text' => 'C#',
        'description' => 'Modern, object-oriented programming language for building Windows applications.',
        'example' => 'Windows desktop applications, web applications, games, mobile apps, and many more.',
    ],
];
$selected_item = isset($menu_items[$text]) ? $menu_items[$text] : null;

// Determine the response to send
if ($selected_item) {
    // This is a second level response where the user selected a programming language option
    $response = "END " . $selected_item['text'] . "\n\n";
    $response .= $selected_item['description'] . "\n\n";
    $response .= "Examples of applications it can build: " . $selected_item['example'];
} else {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Choose a programming language: \n";
    $response .= "1. Ripoti Tatizo\n";
    $response .= "2. Angalia Jibu la Ripoti\n";
    $response .= "3. Hakiki Taarifa\n";
    $response .= "4. Pata ufipisho wa Ripoti\n";
    $response .= "5. Sitisha";
}

// Send the response back to the API
return response($response)->header('Content-Type', 'text/plain');
    }
}
