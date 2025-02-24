<?php

namespace App\Controllers;

use App\Models\Movie;
use App\Models\Genre;

class HomeController
{
    public function index()
    {
        $genres = Genre::all();
        // var_dump($genres);
        return view('home');
    }

    // public function test()
    // {
    //     $data = [
    //         'title' => 'test',
    //         'description' => 'mo ta',
    //         'image' => 'anh.jpg',
    //         'content' => 'noi dung',
    //         'genre_id' => 1,
    //         'updated_at' => date('Y-m-d H:i:s')
    //     ];
    //     // movie::create($data);

    //     // movie::delete(1);

    //     // movie::update($data, 3);

    //     // dd(movie::find(3));

    //     // dd(
    //     //     movie::where('title', 'LIKE', '%Ducanh%')
    //     //         ->andwhere('category_id', '=', 2)
    //     //         ->get()
    //     // );

    //     // dd(
    //     //     Movie::select(['movies. *', 'name'])
    //     //         ->join('movies', 'genres', 'genre_id', 'id')
    //     //         ->get()
    //     // );
    // }
}
