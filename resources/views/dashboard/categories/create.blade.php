@extends('dashboard.layouts.maindashboard')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Category</h1>
    </div>

    <div class="col-lg-8">



    <form method="post" action="/dashboard/categories" class="mb-5">
        @csrf

        <div class="mb-3">
          <label for="nama" class="form-label">Nama </label>
          <input type="text" class="form-control
@error('nama') is-invalid @enderror" 
          " id="nama" name="nama" required autofocus value="{{ old('nama') }}">
@error('nama') <div class="invalid-feedback">
{{ $message }}    
</div> 
@enderror            
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control
@error('slug') is-invalid @enderror" 
          " id="slug" name="slug" required value="{{ old('slug') }}">
@error('slug') <div class="invalid-feedback">
{{ $message }}    
</div> 
@enderror            
        </div>           

        <button type="submit" class="btn btn-primary">Create Category</button>
      </form>
    </div>



    
<script>
    const nama=document.querySelector('#nama');
    const slug=document.querySelector('#slug');

nama.addEventListener('change', function(){
    fetch('/dashboard/categories/checkSlug?nama=' +nama.value)
    .then(response => response.json())
    .then(data => slug.value=data.slug)
});

</script>

@endsection