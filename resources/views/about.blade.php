@extends('layouts.main')

@section('container')
    

    <h1>Halaman About</h1>
    <h2>{{ $nama }}</h2>
    <h2><?= $email ?></h2>
    <img src="img/<?= $gambar ?>" alt="<?= $nama ?>" width="200" class="img-thumbnail">
    @endsection