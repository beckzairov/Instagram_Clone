@extends('layouts.appSec')

@section('content')
    <div class="px-96">
        <div class="p-0 grid grid-cols-3 grid-rows-auto-fit gap-2">
            
            <img src="{{URL('images/png/no_image.png')}}" alt="" srcset="" width="120" class="rounded-full border-2 border-gray-600">
            
            <div class="justify-items-start align-items-start">
                <p class="text-lg font-medium mb-2">
                    Laragrammer
                </p>
                <p class="col-span-2">
                    Search someone else
                </p>
            </div>
            
        </div>

    </div>
    <div class="container pl-96 pr-96 mt-16 flex justify-center">
        <p class="font-bold text-xl">
            User not found
        </p>
    </div>
@endsection