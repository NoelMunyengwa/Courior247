<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;
use GuzzleHttp\Client;
use App\Models\Courior;
use App\Models\User;



class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Get authenticated user parcels
        //$parcels=Parcel::where('user_id',auth()->id())->get();
        $parcels=Parcel::all();
        dd($parcels);
        
        return view('parcel',compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Get the user's IP address
 $userIp = $request->ip();
 // Make a request to the ipinfo.io API
  $client = new Client();
  $response = $client->get("https://ipinfo.io/196.4.80.2?token=d0943f6e5438c4");
 // Parse the JSON response
  $data = json_decode($response->getBody());
 // Extract user information
//  dd($data);
  $location = $data->loc;
  $country = $data->country;

  $locationArray = explode(",", $location);

$latitude = $locationArray[0];
$longitude = $locationArray[1];

        $validated = $request->validate([
            'name' => 'required|string',
            'weight' => 'required|numeric',
            'description' => 'required|string',
            'receiverName' => 'required|string',
            'receiverEmail' => 'required|email',
            'address' => 'required|string',
        ]);
        $validated['user_id']=auth()->id(); 
        // dd($validated);

        $parcel = Parcel::create($validated);
        $parcels=Parcel::where('user_id',auth()->id())->orderBy('created_at', 'desc')->paginate(2);
        return view('dashboard',compact('parcels','location', 'country'))->with('success', 'Parcel created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     *  auth user picks a driver
     */

     public function pickDriver(Request $request,string $id){

      
        $parcel = Parcel::find($id);
        $drivers = Courior::where('is_available', true)->paginate(5);
    
      
        



        return view('pickDriver',compact('drivers','parcel'));

     }

     public function saveDriver(Request $request,string $id, string $driver){

        // dd($driver);
        // How to pick a driver
            $parcel = Parcel::find($id);
            
            $parcel->driver_id = $driver;
            $parcel->save();
            

        //
        $drivers = Courior::where('is_available',true)->paginate(5);

        return view('pickDriver',compact('drivers','parcel'));


     }
}
