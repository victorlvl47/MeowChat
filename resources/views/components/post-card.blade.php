@props(['post'])

<!-- A post -->
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{asset('images/cat1.jpg')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">TODO: username here</div>
            <x-post-tags :tagsCsv="$post->tags"/>
            {{-- <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> Boston,
                MA
            </div> --}}
        </div>
    </div>
</x-card>