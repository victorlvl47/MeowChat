<h1>Posts</h1>

@unless(count($posts) == 0)
@foreach($posts as $post)
<h2>
    {{$post['title']}}
</h2>
<p>
    {{$post['description']}}
</p>
@endforeach

@else
    <p>No posts found</p>
@endunless