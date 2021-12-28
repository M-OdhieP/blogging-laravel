@extends('layouts/main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By: 
            <a href="/posts?author={{ $post->author->username }}" style="text-decoration: none">
            {{ $post->author->name }}</a> Kategori:  
            <a href="/posts?category={{ $post->category->slug }}" style="text-decoration: none">
            {{ $post->category->nama }}</a></p>
@if ($post->image)
<div style="max-height: 350px; overflow:hidden">
<img src="{{ asset('storage/'. $post->image)  }}" class="card-img-top" alt="{{ $post->image }}">    
</div>
@else
<img src="https:source.unsplash.com/1200x400?{{ $post->category->nama }}" class="card-img-top" alt="{{ $post->category->nama }}">
@endif                    
            
          
            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>
            <a href="/posts" class="d-block" style="text-decoration: none">Back to Posts</a>
        </div>
    </div>
</div>









@endsection