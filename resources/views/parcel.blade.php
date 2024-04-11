<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Parcel247') }}
        </h2>
    </x-slot>
    @if (session('success'))
            <div class="fixed top-0 left-0 w-full h-12 px-4 py-3 bg-green-500 text-white text-center rounded-b-md">
                {{ session('success') }}
            </div>
        @endif
@unless (empty($parcels))
@foreach($parcels as $parcel)
<div class="w-1/2 px-8 py-4 my-5 mx-10 bg-green-300 rounded shadow-lg">

    
    <div class=" flex justify-between "><h2 class="text-xl font-medium text-gray-700">Parcel Details</h2> 
    <form action="{{ route('parcels.index') }}" method="post">
  @csrf  <input type="hidden" name="target" value="some-value"> <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pick a Driver</button>
</form>

</div>
  
    <ul>
        <li>Parcel Name: {{$parcel->name}}</li>
        <li>Recipient Name: {{$parcel->receipientName}}</li>
        <li>Delivery Address: {{$parcel->address}}</li>
        <li>Weight: {{$parcel->weight}}</li>
        <li>Status: {{$parcel->status}}</li>
        <li>Created At: {{$parcel->created_at}}</li>
        <li>Location : {{$location}}</li>
        <li>Country: {{$country}}</li>
        </ul>
    

</div>
@endforeach
{{ $parcels->links() }}
@endunless
</x-app-layout>