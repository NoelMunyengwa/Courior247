<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Parcel247') }}
        </h2>
    </x-slot>

    <div class="min-h-screen flex  justify-between mx-5 bg-gray-100 py-6">

        <div class="w-full max-w-md px-8 py-4 bg-white rounded shadow-lg">
            <div class="flex justify-between mb-4">
                <h1 class="text-xl font-medium text-gray-700 text-center">Create Parcel</h1>
                </div>

            <form method="POST" action="{{ route('parcels.store')}}">
                 @csrf
                 @method('POST')    

                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">Parcel Name</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-1">
                    @error('name')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="weight" class="block text-sm font-medium text-gray-700">Estimated Weight (kg)</label>
                    <input type="text" id="weight" name="weight" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-1">
                    @error('weight')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                

                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">Parcel Description</label>
                    <textarea id="description" name="description" rows="4" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-1"></textarea>
                    @error('description')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="receiver" class="block text-sm font-medium text-gray-700">Receiver Full Name</label>
                    <input type="text" id="receiverName" name="receiverName" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-1">
                    @error('receiverName')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="receiverEmail" class="block text-sm font-medium text-gray-700">Receiver Email Address</label>
                    <input type="email" id="receiverEmail" name="receiverEmail" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-1">
                    @error('email')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="address" class="block text-sm font-medium text-gray-700">Receiver Physical Address</label>
                    <input type="text" id="address" name="address" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-1">
                    @error('address')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                

                <div class="flex items-center justify-end">
                    <button type="submit" class="px-4 py-2 rounded-md bg-indigo-600 text-white font-medium hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                </div>
            </form>
        </div>

        <div  class="w-1/2 px-8 py-4  mx-10 bg-gray-300 rounded shadow-lg">
            <h1 class="text-xl text-center font-medium text-gray-700">My Parcels</h1>

           


                
@foreach($parcels as $parcel)
<div class=" px-8 py-4 my-5 mx-10 bg-green-300 rounded shadow-lg">

    
    <div class=" flex justify-between "><h2 class="text-xl font-medium text-gray-700">Parcel Details</h2> 
    <form action="{{ route('pickDriver',['id' => $parcel->id]) }}" method="post">
  @csrf 
  @method('POST')
  <input type="hidden" name="target" value=" {{$parcel->id}}"> <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pick a Driver</button>
</form>

</div>
  
    <ul>
        
        <li>Parcel Name: {{$parcel->name}}</li>
        <li>Recipient Name: {{$parcel->receipientName}}</li>
        <li>Delivery Address: {{$parcel->address}}</li>
        <li>Weight: {{$parcel->weight}}</li>
        <li>Status: {{$parcel->status}}</li>
        <li>Created At: {{$parcel->created_at}}</li>
        
        </ul>
    

</div>

@endforeach
{{ $parcels->links() }}


        </div>
      
    </div>


</x-app-layout>
