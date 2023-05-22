@extends('layout')

@section('content')

@include('partials._search')
<h2>
    {{$post['title']}}
</h2>
<p>
    {{$post['caption']}}
</p>
@endsection