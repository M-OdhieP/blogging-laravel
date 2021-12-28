
@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Kategories</h1>



<div class="container">
    <div class="row">
@foreach ($categories as $category)        
        <div class="col-md-4"><a href="/posts?category={{ $category -> slug }}" style="text-decoration: none">
            <div class="card bg-dark text-white">
                <img src="https:source.unsplash.com/500x400?{{ $category->nama }}" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title flex-fill p-4 fs-3 text-center"  style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->nama }}</h5>
                </div>
              </div>
            </a>
        </div>
@endforeach        
    </div>
</div>







{{-- 
<ul>
    <li>
        <h2{{ $category->nama }}</a></h2>
    </li>
</ul> --}}





    @endsection
