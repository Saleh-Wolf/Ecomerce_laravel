@extends('layout')

@section('content')

<h1 class="mb-4">All Posts</h1>

@foreach($posts as $post)

<div class="card mb-3">
<div class="card-body">

<h4>
<a href="/post/{{ $post->id }}" class="text-decoration-none">
{{ $post->title }}
</a>
</h4>

<p class="text-muted">

Category:
<a href="/category/{{ $post->category->id }}">
{{ $post->category->name }}
</a>

</p>

</div>
</div>

@endforeach

{{ $posts->links('pagination::bootstrap-5') }}

@endsection