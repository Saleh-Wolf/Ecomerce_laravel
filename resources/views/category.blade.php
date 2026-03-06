@extends('layout')

@section('content')

<h2 class="mb-4">Category: {{ $category->name }}</h2>

@foreach($category->posts as $post)

<div class="card mb-3">
<div class="card-body">

<h4>
<a href="/post/{{ $post->id }}" class="text-decoration-none">
{{ $post->title }}
</a>
</h4>

</div>
</div>

@endforeach

@endsection