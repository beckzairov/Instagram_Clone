@extends('layouts.appSec')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="{{asset(Auth::user()->profile_img)}}" alt="" srcset="" height="120" width="120" style="border-radius:50%">
                    {{ __('You are logged in!') }}
                    <a href="{{route('post.index')}}" class="bg-blue-500 text-white rounded px-4 py-2">Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
