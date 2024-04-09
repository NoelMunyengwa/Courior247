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

<div class="w-1/2 px-8 py-4 bg-blue-100 rounded shadow-lg">

    <h2 class="text-xl font-medium text-gray-700">Parcel Details</h2>
    @foreach($parcels as $parcel)
    <ul>
        <li>Parcel Name: {{$parcel->name}}</li>
        <li>Recipient Name: {{$parcel->receipientName}}</li>
        <li>Delivery Address: {{$parcel->address}}</li>
        <li>Weight: {{$parcel->weight}}</li>
        <li>Status: {{$parcel->status}}</li>
        </ul>
    @endforeach

</div>
{{ $parcels->links() }}
@endunless
</x-app-layout>