@extends('layouts.appSec')

@section('content')

    <div class="lg:px-96">
        <div class="grid grid-cols-4 grid-rows-auto-fit gap-2">
            <div class="flex items-start">
                <img src="{{asset(Auth::user()->profile_img)}}" alt="profile" srcset="" width="120" class="rounded-full border-2 border-gray-600">
            </div>
            <div class="col-span-2 justify-items-start align-items-start grid gap-y-2">
                <p class="text-lg font-medium">
                    {{auth()->user()->name}}
                </p>

                {{-- <v-follow user-id="{{ Auth::user()->id }}"></v-follow> --}}

                <a href="{{route('home')}}" class="col-span-2 text-blue-500">
                    Edit Profile
                </a>
                <div class="col-span-2 grid grid-cols-3 w-full">
                    @if(count($posts)<=1)
                        <p><span class="font-bold">{{count($posts)}}</span> post</p>
                    @elseif(count($posts)>1)
                        <p><span class="font-bold">{{count($posts)}}</span> posts</p>
                    @endif
                    <p><span class="font-bold">3</span> followers</p>
                    <p><span class="font-bold">2</span> following</p>
                </div>
                <p class="col-span-2 font-bold">
                    {{auth()->user()->profile->title}}
                </p>
                <p class="col-span-2">
                    {{auth()->user()->profile->description}}
                </p>
                <a href="#" class="col-span-2 text-blue-500">
                    {{auth()->user()->profile->url}}
                </a>
            </div>
            <div class="flex justify-end items-start">
                <a href="{{route('formpost')}}" class="px-3 py-1 bg-blue-500 text-white rounded-lg pointer hover:bg-blue-400 hover:no-underline">
                    Add New Post
                </a>
            </div>
        </div>

    </div>

    <div class="mt-16 grid gap-2 grid-cols-3 lg:px-96">
            @foreach (array_reverse($posts) as $post)
                <div>
                    <v-post post-id="{{$post->id}}" file-path="{{$post->files[0]->file}}"></v-post>
                </div>
            @endforeach
    </div>
@endsection