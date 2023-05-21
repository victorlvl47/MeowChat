<h1>Posts</h1>

@unless(count($posts) == 0)
@foreach($posts as $post)
<h2>
    <a href="/posts/{{$post['id']}}">
        {{$post['title']}}
    </a>
</h2>
<p>
    {{$post['caption']}}
</p>
@endforeach

@else
    <p>No posts found</p>
@endunless