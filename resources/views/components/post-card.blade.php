@props(['post'])

<!-- A post -->
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$post->image_path ? asset('storage/' . $post->image_path) : asset('images/cat1.jpg')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">By: {{$post->user->username}}</div>
            <x-post-tags :tagsCsv="$post->tags"/>
            {{-- <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> Boston,
                MA
            </div> --}}
        </div>
    </div>
</x-card>