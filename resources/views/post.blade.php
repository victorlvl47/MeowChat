@extends('layout')

@section('content')
<h2>
    {{$post['title']}}
</h2>
<p>
    {{$post['caption']}}
</p>
@endsection