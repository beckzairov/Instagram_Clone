@extends('layouts.appSec')

@section('contentEx')
<div class="container pl-96 pr-96">
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            @if (\Session::has('success'))
                <div class="bg-green-500 text-green-200 px-4 py-2 w-1/2">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <input name="file[]" class="border-2 border-fuchsia-600 rounded-lg w-full px-4 py-1 mb-2 w-full focus:outline-none focus:border-purple-600 focus:border-transparent @error('file') border-red-500 {{$message}} @enderror" type="file" placeholder="Description" multiple>
            @error('file')
                <div class="text-red-500 mt-2 text-sm inline">
                    {{ $message }}
                </div>   
            @enderror
            <input name="description" class="border-2 border-fuchsia-600 rounded-lg w-full px-4 py-2 focus:outline-none focus:border-ring focus:border-purple-600 focus:border-transparent @error('description') border-red-500 {{$message}} @enderror" type="textarea" value="{{ old('description') }}" placeholder="Description">
            @error('description')
                <div class="text-red-500 mt-2 text-sm inline">
                    {{ $message }}
                </div>
                @enderror
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                Post It!
            </button>
    </form>
</div>
@endsection