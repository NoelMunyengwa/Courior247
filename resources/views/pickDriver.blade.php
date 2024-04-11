<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Parcel247') }}
        </h2>
    </x-slot>
    <h2 class="text-xl font-medium text-gray-700 text-center my-5">Choose Driver</h2>
    <div class="flex justify-between">
    <div class="w-1/2 px-8 py-4 my-5 mx-10 bg-green-300 rounded shadow-lg">

    
<div class=" flex justify-between "> 
<form action="{{route('saveDriver',['id'=>2,'driver'=>1])}}" method="post">
@csrf  
@method('POST')
<input type="hidden" name="pickDriver" value="yes"> <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pick a Driver</button>
</form>

</div>

<ul>
    <li>Driver A</li>
    
   
    </ul>


</div>

<div class="w-1/2 px-8 py-4 my-5 mx-10 bg-gray-300 rounded shadow-lg">





</div>
</div>

</x-app-layout>