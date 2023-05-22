@extends('layout')

@section('content')

@include('partials._search')
<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{asset('images/no-image.png')}}"
            alt=""
        />

        <h3 class="text-2xl mb-2">{{$post->title}}</h3>
        <div class="text-xl font-bold mb-4">TODO: username here</div>
        <ul class="flex" style="margin-bottom:25px;">
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Laravel</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">API</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Backend</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Vue</a>
            </li>
        </ul>
        {{-- <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> Daytona, FL
        </div> --}}
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl font-bold mb-4">
                Caption
            </h3>
            <div class="text-lg space-y-6">
                {{$post->caption}}

                <a
                    href="#"
                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-share"></i>
                    Share</a
                >

                <a
                    href="#"
                    target="_blank"
                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-copy"></i> Copy Link</a
                >
            </div>
        </div>
    </div>
</div>
</div>
@endsection