@extends('admin.master')

@section('title', )

@section('content')
<div class="container w-75">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">title </th>
                <th scope="col">ảnh </th>
                <th scope="col">Giới thiệu </th>
                <th scope="col">Ngày</th>
                <th scope="col">Tên</th>
                <th scope="col">Thể loại </th>\
                <th scope="col">Chi tiết </th>
                <th scope="col">
                    <a href="{{ APP_URL . 'admin/movies/create' }}" class="btn btn-primary">Genres New</a>
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <th scope="row">{{ $movie->id }}</th>
                <td>{{ $movie->title }}</td>
                <td>
                    <img src=" {{ APP_URL . $movie->poster }} " alt="" width="90">
                </td>
                <td>{{ $movie->intro }}</td>
                <td>{{ $movie->release_date }}</td>
                <!-- <td>{{ $movie->genre_name }}</td> -->
                <td>{{ $movie->name }}</td>
                <td>
                    
                    <a class="btn btn-success" href="{{ APP_URL . 'admin/movies/edit/' . $movie->id }}">Edit</a>
                    <form action="{{ APP_URL . 'admin/movies/delete/' . $movie->id }}" method="POST" class="d-inline">
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                    
                </td>
                <td>
                <a class="btn btn-info" href="{{ APP_URL . 'admin/movies/show/' . $movie->id }}">View </a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection