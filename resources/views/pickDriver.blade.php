<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Parcel247') }}
        </h2>
    </x-slot>
    <h2 class="text-xl font-medium text-gray-700 text-center my-5">Choose Driver</h2>
    <div class="flex justify-between">
    <div class="w-1/2 px-8 py-4 my-5 mx-10 bg-green-300 rounded shadow-lg">

    
<h1 class=" text-center">Available Drivers</h1>



@forelse($drivers as $driver)
<div class="px-8 py-4 my-5  bg-gray-300 rounded shadow-lg flex justify-between">
    <ul>
        <li>Driver Name: {{$driver->name}}</li>
       
        <li>Driver Car: {{$driver->email}}</li>

        </ul>
        <div class=" flex justify-between "> 
<form action="{{route('saveDriver',['id'=>$parcel->id,'driver'=>$driver->id])}}" method="post">
@csrf  
@method('POST')
<input type="hidden" name="pickDriver" value="yes"> <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pick a Driver</button>
</form>

</div>
</div>
    @empty
    <p>No drivers available</p>
    @endforelse
    
    



</div>

<div class="w-1/2 px-8 py-4 my-5 mx-10 bg-gray-300 rounded shadow-lg">


<ul>
        
        <li>Parcel Name: {{$parcel->name}}</li>
        <li>Recipient Name: {{$parcel->receiverName}}</li>
        <li>Delivery Address: {{$parcel->address}}</li>
        <li>Weight: {{$parcel->weight}}</li>
        @if($selectedDriver!=null)
        <li>Driver Name: {{$selectedDriver->name}}</li>
        <li>Driver Car: {{$selectedDriver->email}}</li>
        @endif
        <li>Status: {{$parcel->status}}</li>
        <li>Created At: {{$parcel->created_at}}</li>
        
        </ul>


</div>
</div>

</x-app-layout>