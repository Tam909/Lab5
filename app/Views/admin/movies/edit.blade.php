@extends('admin.master')

@section('title', 'Edit Movie')

@section('content')

<div class="container w-50">
    @isset($message)
    <div class="alert alert-success">
        {{$message}}
    </div>
    @endisset
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" id="" class="form-control" value="{{ $movie->title }}">
            @isset($errors['title'])
            <span class="text-danger">{{ $errors['title'] }}</span>
            @endisset
        </div>
        <div class="mb-3">
            <label for="" class="form-label">ẢnhẢnh</label>
            <input type="file" name="poster" id="" class="form-control">
            @if ($movie->poster)
            <img src="{{ APP_URL . $movie->poster }}" alt="poster" width="100">
            @endif
            @isset($errors['poster'])
            <span class="text-danger">{{ $errors['poster'] }}</span>
            @endisset
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Genre</label>
            <select name="genre_id" id="" class="form-control">
                @foreach ($genres as $cate)
                <option value="{{ $cate->id }}" {{ $cate->id == $movie->genre_id ? 'selected' : '' }}>
                    {{ $cate->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Intro</label>
            <textarea name="intro" class="form-control" rows="5">{{ $movie->intro }}</textarea>
            @isset($errors['intro'])
            <span class="text-danger">{{ $errors['intro'] }}</span>
            @endisset
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Release Date</label>
            <input type="date" name="release_date" id="" class="form-control" value="{{ $movie->release_date }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-secondary">Cập nhậtnhật</button>
            <a href="{{ APP_URL . 'admin/movies' }}" class="btn btn-outline-warning">Danh sáchsách</a>
        </div>
    </form>
</div>
@endsection