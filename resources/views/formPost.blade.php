@extends('layouts.appSec')

@section('contentEx')

    <div class="container pl-96 pr-96">
        <div class="grid grid-cols-3 grid-rows-auto-fit gap-2">
            <div class="flex justify-center items-center">
                <img src="{{asset(Auth::user()->profile_img)}}" alt="" srcset="" width="180" class="rounded-full border-2 border-gray-600">
            </div>
            <div class="grid grid-rows-2 grid-cols-2 justify-items-start align-items-start">
                <p class="text-lg font-medium">
                    {{Auth::user()->name}}
                </p>
                
                <v-follow user-id="{{ Auth::user()->id }}"></v-follow>
                
                <div class="col-span-2 grid grid-cols-3 w-full align-items-start">
                    <a href="{{route('home')}}" class="col-span-3 text-blue-500">
                        Edit Profile
                    </a>
                    <p><span class="font-bold">1</span> post</p>
                    <p><span class="font-bold">3</span> followers</p>
                    <p><span class="font-bold">2</span> following</p>
                </div>
                <p class="col-span-2 font-bold">
                    freeCodeCamp
                </p>
                <p class="col-span-2">
                    Cool Description
                </p>
                <a href="#" class="col-span-2 text-blue-500">
                    https://example.com
                </a>

            </div>
            <div class="flex justify-end items-start">
                <a href="{{route('formpost')}}" class="text-blue-500">
                    Add New Post
                </a>
            </div>
        </div>

    </div>

    <div class="container pl-96 pr-96 mt-16 grid gap-2 grid-cols-3">
            @foreach ($posts as $post)
                <div>
                    <v-post post-id="{{ $post->id }}" src="{{$post->files[0]->file}}"></v-post>
                </div>
            @endforeach
    </div>
    <div class="flex justify-center items-center hidden bg-black bg-opacity-50 h-100 absolute inset-0" id="overlay">
        <div class="bg-white shadow-md rounded-lg w-1/2 max-w-xl px-4 py-4">
            <div class="flex justify-between font-bold">
                <p>User Images</p>
                <svg xmlns="http://www.w3.org/2000/svg" id="close-modal" class="h-6 w-6 text-red-500 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="mt-4 flex">
                <div>
                    <p id="fileId" class="inline-flex">
                    </p>
                    <img src="/storage/userPost/1623051929503Image 11.jpg" class="inline w-1/4 h-1/4" alt="" id="f">
                </div>
            </div>
            <div class="mt-4 flex justify-end">
                <button class="bg-red-500 text-white rounded-md px-6 py-2 outline-none" id="delete">
                    Delete
                </button>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener(
            'DOMContentLoaded', ()=>{
                const overlay = document.querySelector('#overlay')
                const files = document.querySelector('.files')
                const closeModal = document.querySelector('#close-modal')

                document.querySelectorAll('.files').forEach(item => {
                    item.addEventListener('click', event => {
                        overlay.classList.remove('hidden')
                    })
                })
                
                closeModal.addEventListener('click', ()=>{
                    overlay.classList.add('hidden')
                })
            }
        ) 
    </script>
@endsection