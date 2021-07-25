<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container flex justify-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'LaraGram') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        <nav class="py-6 px-96 bg-white flex items-center justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="{{ url('/') }}" class="text-blue-500 font-bold hover:no-underline">
                        {{ config('app.name', 'LaraGram') }}
                    </a>
                </li>

            </ul>
            <div class="w-2/5">
                <input type="text" value="" class="px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-300 focus:ring-opacity-30 focus:border-blue-300 w-full bg-white text-gray-500 border border-gray-200 rounded-full" placeholder="Search...">
            </div>
            <ul class="flex items-center">
                @auth
                <li>
                        <v-dropdown placement="right">
                        <!-- Button content -->
                            <template v-slot:button>
                                <img class="w-10 h-10 rounded-full border-2 border-gray-600 mr-3" src="{{asset(Auth::user()->profile_img)}}" alt="Saleh Mir" />

                                <a href="#" class="mr-2 hover:no-underline">{{Auth::user()->name}}</a>

                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 0 1-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z" />
                                </svg>
                            </template>

                            <!-- Opened dropdown content -->
                            <template v-slot:content>
                                <a class="flex w-full justify-between items-center rounded px-2 py-1 my-1 hover:bg-gray-200 hover:no-underline hover:text-black" href="{{route('post.index')}}">Profile</a>
                                <a class="flex w-full justify-between items-center rounded px-2 py-1 my-1 hover:bg-gray-200 hover:no-underline hover:text-black" href="#">Settings</a>
                                <a class="flex w-full justify-between items-center rounded px-2 py-1 my-1 hover:bg-gray-200 hover:no-underline hover:text-black" href="#">Help</a>

                                <hr/>
                                <form action="{{ route('logout') }}" method="post" class="inline px-2 py-1">
                                    @csrf
                                    <button class="flex w-full justify-between items-center rounded px-2 py-1 hover:bg-red-600 hover:text-white">Logout</button>
                                </form>
                            </template>
                        </v-dropdown>
                </li>
                @endauth
                @guest
                    <div>
                        <v-dropdown placement="right">
                            <!-- Button content -->
                            <template v-slot:button>
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 0 1-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z" />
                                </svg>
                            </template>

                            <!-- Opened dropdown content -->
                            <template v-slot:content>
                                <a class="flex w-full justify-between items-center rounded px-2 py-1 my-1 hover:bg-indigo-600 hover:text-white" href="{{ route('login') }}">Login</a>
                                <hr />
                                <a class="flex w-full justify-between items-center rounded px-2 py-1 my-1 hover:bg-indigo-600 hover:text-white" href="{{ route('register') }}">Register</a>
                            </template>
                        </v-dropdown>
                    </div>
                @endguest
            </ul>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
