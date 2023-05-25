<x-layout>
    <x-card class="!p-10 !max-w-lg !mx-auto !mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit Your Cat Post!
        </h2>
        <p class="mb-4">Edit: {{$post->title}}</p>
    </header>
    
    <form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- <div class="mb-6">
            <label
                for="company"
                class="inline-block text-lg mb-2"
                >Company Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="company"
            />
        </div> --}}
    
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2"
                >Title of your Cat-tastic Post</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                placeholder="Example: Mr. Whiskers taking a nap"
                value="{{$post->title}}"
            />
    
    
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        {{-- <div class="mb-6">
            <label
                for="location"
                class="inline-block text-lg mb-2"
                >Job Location</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="location"
                placeholder="Example: Remote, Boston MA, etc"
            />
        </div> --}}
    
        {{-- <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Contact Email</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
            />
        </div> --}}
    
        {{-- <div class="mb-6">
            <label
                for="website"
                class="inline-block text-lg mb-2"
            >
                Website/Application URL
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="website"
            />
        </div> --}}
    
        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Paw-some Tags (Comma Separated)
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
                placeholder="Example: Sleepy,Cute,Funny,etc"
                value="{{$post->tags}}"
            />
    
            @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="post_image" class="inline-block text-lg mb-2">
                Your Purrfect Cat-tastic Pic Here!
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="post_image"
            />

            <p style="margin-top:15px;">Current image for this post</p>
            <img
                class="w-48 mr-6 mb-6"
                src="{{$post->image_path ? asset('storage/' . $post->image_path) : asset('images/cat1.jpg')}}"
                alt=""
            />
    
            @error('post_image')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label
                for="caption"
                class="inline-block text-lg mb-2"
            >
                Meow-tastic Post Caption
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="caption"
                rows="10"
                placeholder="Give Your Cat's Moment in the Spotlight a Pawsome Caption!"
            >{{$post->caption}}</textarea>
    
            @error('caption')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 bg-yellow-500 hover:bg-yellow-600"
            >
                Update Post 
            </button>
    
            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </x-card>
    </x-layout>