<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function getUserInfo(Request $request)
 {
 // Get the user's IP address
 $userIp = $request->ip();
// Make a request to the ipinfo.io API
 $client = new Client();
 $response = $client->get("https://ipinfo.io/{$userIp}?token=YOUR_API_KEY");
// Parse the JSON response
 $data = json_decode($response->getBody());
// Extract user information
 $location = $data->loc;
 $country = $data->country;
 $currency = $data->currency;
// You can return the user information or use it as needed
 return view('parcel', compact('location', 'country', 'currency'));
 }
}
