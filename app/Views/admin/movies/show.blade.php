@extends('admin.master')

@section('title', 'Movie Details')

@section('content')
<div class="container w-50 mt-4">
    <h1>Movie Details</h1>
    <div class="card">
        <img src="{{ APP_URL . $movie->poster }}" class="card-img-top" alt="{{ $movie->title }}">
        <div class="card-body">
            <h3 class="card-title">{{ $movie->title }}</h3>
            <p class="card-text"><strong>Genre:</strong> {{ $genres->name ?? 'Unknown' }}</p>
            <p class="card-text"><strong>Intro:</strong> {{ $movie->intro }}</p>
            <p class="card-text"><strong>Release Date:</strong> {{ $movie->release_date }}</p>
        </div>
    </div>
    <div class="mt-3">
        <a href="{{ APP_URL . 'admin/movies' }}" class="btn btn-outline-secondary">Back to List</a>
    </div>
</div>
@endsection
