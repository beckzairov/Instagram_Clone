@extends('layouts.appSec')

@section('contentEx')
    <div class="container flex flex-col justify-center items-center">
        <div class="card w-full sm:4/5 md:w-3/5 lg:w-1/2 rounded mb-6">
            <div class="flex items-center p-3 overflow-x-auto">
                @for ($i = 0; $i < 15; $i++)    
                    <div class="flex flex-col items-center ml-2">
                        <a href="#" class="inline-flex justify-center items-center">
                            <img class="rounded-full p-1 border-2 border-solid border-red-500 overflow-hidden" height="64" width="64" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbLkgm7JNRLV4tjS3PUEwhdEzvoKngDrkHGQ&usqp=CAU" alt="">
                        </a>
                        <span>otabekzairov</span>
                    </div>
                @endfor
            </div>
        </div>
        @for ($i = 0; $i < 5; $i++)            
            <div class="card w-full sm:w-4/5 md:w-3/5 lg:w-1/2 rounded mb-6">
                <div class="flex justify-between items-center p-3">
                    <div class="flex items-center">
                        <a href="#" class="inline-flex justify-center items-center h-12 w-12">
                            <img class="rounded-full p-1 border-2 border-solid border-red-500 overflow-hidden" height="64" width="64" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbLkgm7JNRLV4tjS3PUEwhdEzvoKngDrkHGQ&usqp=CAU" alt="">
                        </a>
                        <a href="#" class="font-bold ml-3 hover:no-underline">
                            otabekzairov
                        </a>
                    </div>
                    <button class="focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </button>
                </div>
                <img height="1080" width="1080" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEUAAACnej3aAAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC" alt="" srcset="">
                <div class="flex justify-between pl-3 pr-3 pt-2 pb-2">
                    <div class="icon-pack flex">
                        <button class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                        <button class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </button>
                    </div>
                    <button class="focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>
                    </button>
                </div>
                <div class="pl-3 pr-3">
                    <div class="font-bold">
                        <p>
                            <button class="focus:outline-none font-bold">
                                10K likes
                            </button>
                        </p>
                        <a href="#" class="focus:no-underline">
                            otabekzairov
                        </a>
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Voluptatem magni nulla doloribus veniam alias. Voluptates 
                        possimus aliquid dolorum unde delectus iusto facilis facere natus rem! 
                        Sequi iste quas aspernatur dolore.Repudiandae possimus porro velit 
                        esse vel nemo culpa, maiores repellat iure, deleniti commodi aliquam 
                        molestiae quasi, aperiam nostrum recusandae! Nobis et non perspiciatis 
                        eveniet unde debitis doloremque consequuntur earum odit?
                    </p>
                </div>
            </div>
        @endfor
    </div>
@endsection