
<x-layout>
@include('partials._search')
<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
{{-- <div class="bg-gray-50 border border-gray-200 p-10 rounded"> --}}
<x-card class="!p-10">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{$post->image_path ? asset('storage/' . $post->image_path) : asset('images/cat1.jpg')}}"
            alt=""
        />

        <h3 class="text-2xl mb-2">{{$post->title}}</h3>
        <div class="text-xl font-bold mb-4">By: {{$post->user->username}}</div>
        <x-post-tags :tagsCsv="$post->tags" />
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

                <button
                    style="background-color: #eab308; width:100%;" 
                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                >
                    <i class="fa-solid fa-share"></i> Share
                </button>

                <button
                    style="width:100%;" 
                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                >
                    <i class="fa-solid fa-copy"></i> Copy Link
                </button>
            </div>
        </div>
    </div>

    {{-- <x-card class="!mt-4 p-2 flex space-x-6">
        <a href="/posts/{{$post->id}}/edit">
            <i class="fa-solid fa-pencil"></i> Edit
        </a>

        <form method="POST" action="/posts/{{$post->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500">
                <i class="fa-solid fa-trash"></i> Delete
            </button>
        </form>
    </x-card> --}}

</x-card>
{{-- </div> --}}
</div>
</x-layout>