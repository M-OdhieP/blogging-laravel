
@extends('layouts.main')

@section('container')
<h1 class="text-center">{{ $title }}</h1> 

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
@if (request('category'))            
<input type="hidden" name="category" value="{{ request('category') }}">
@endif
@if (request('author'))            
<input type="hidden" name="author" value="{{ request('author') }}">
@endif
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit"">Search</button>
              </div>
        </form>
    </div>
</div>

@if ($posts->count())


<div class="card mb-3">
@if ($posts[0]->image)
<div style="max-height: 350px; overflow:hidden">
<img src="{{ asset('storage/'. $posts[0]->image)  }}" class="card-img-top" alt="{{ $posts[0]->image }}">    
</div>    
@else
<img src="https:source.unsplash.com/1200x400?{{ $posts[0]->category->nama }}" class="card-img-top" alt="{{ $posts[0]->category->nama }}">
@endif    
  
    <div class="card-body text-center">
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">         
      <h3 class="card-title">{{ $posts[0]->title }}</h3></a>    
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More....</a>      


<p><small class="text-muted"> by: 
<a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>
Kategori:  
<a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->nama }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>

      
    </div>    


<div class="container">
    <div class="row">
@foreach ($posts->skip(1) as $post)        
        <div class="col-md-4 mb-3">
            <div class="card">
                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                <div class="position-absolute text-white px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                {{ $post->category->nama }}
                </div></a>
@if ($post->image)
<img src="{{ asset('storage/'. $post->image)  }}" class="card-img-top" alt="{{ $post->image }}">    
@else
<img src="https:source.unsplash.com/500x400?{{ $post->category->nama }}" class="card-img-top" alt="{{ $post->category->nama }}">
@endif                
              
      
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">    
                        {{ $post["title"] }}                         
                  </h5>
                  <p><small class="text-muted"> by: 
                    <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                        {{ $post->author->name }}</a>
                    {{ $post->created_at->diffForHumans() }}</small></p>

                  <p class="card-text">{{ $post["excerpt"] }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
@endforeach        
    </div>
</div>
@else
<p class="text-center fs-4">No Post Found.</p>
@endif
<div class="d-flex justify-content-center">
{{ $posts->links() }}</div>
    @endsection
