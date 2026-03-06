@extends('layout')

@section('content')

<div class="card">
<div class="card-body">

<h2>{{ $post->title }}</h2>

<p class="text-muted">

Category:
<a href="/category/{{ $post->category->id }}">
{{ $post->category->name }}
</a>

</p>

<hr>

<p>{{ $post->content }}</p>

</div>
</div>

@endsection