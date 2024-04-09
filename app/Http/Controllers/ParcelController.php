<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;


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
        $parcels=Parcel::where('user_id',auth()->id())->paginate(5);
        return view('parcel',compact('parcels'))->with('success', 'Parcel created successfully');
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
}
