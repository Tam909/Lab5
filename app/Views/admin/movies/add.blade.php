@extends('admin.master')

@section('title', 'Thêm movies')

@section('content')
<div class="container w-50">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" id="" class="form-control">
            @isset($errors['title'])
                <span class="text-danger">{{ $errors['title'] }}</span>
            @endisset
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Poster</label>
            <input type="file" name="poster" id="" class="form-control" >
            @isset($errors['poster'])
                <span class="text-danger">{{ $errors['poster'] }}</span>
            @endisset
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Genre</label>
            <select name="genre_id" id="" class="form-control">
                @foreach ($genres as $cate)
                <option value="{{ $cate->id }}">
                    {{ $cate->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Intro</label>
            <textarea name="intro" class="form-control" rows="5"></textarea>
            @isset($errors['intro'])
                <span class="text-danger">{{ $errors['intro'] }}</span>
            @endisset
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Ngày công chiếu</label>
            <input type="date" name="release_date" id="" class="form-control">
            <!-- @isset($errors['release_date'])
                <span class="text-danger">{{ $errors['release_date'] }}</span>
            @endisset -->
        </div>
        <!-- <div class="mb-3">
            <label for="" class="form-label">content</label>
            <textarea name="content" class="form-control" rows="10"></textarea>
        </div> -->
        <div class="mb-3">
            <button type="submit" class="btn btn-secondary">Genres New</button>
            <a href="{{ APP_URL . 'admin/movies' }}" class="btn btn-outline-warning">List Movie</a>
        </div>
    </form>
</div>
@endsection