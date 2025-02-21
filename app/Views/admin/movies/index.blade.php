@extends('admin.master')

@section('title', 'Quan ly Movie')

@section('content')
<div class="container w-75">
    <h1>Quan ly Movies</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Poster</th>
                <th scope="col">Intro</th>
                <th scope="col">Date</th>
                <th scope="col">Genres Name</th>
                <th scope="col">Actions</th>\
                <th scope="col">View Details</th>
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