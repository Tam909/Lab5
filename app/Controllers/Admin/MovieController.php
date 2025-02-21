<?php

namespace App\Controllers\Admin;




use App\Models\Genre;
use App\Models\Movie;

class MovieController
{
    public function index()
    {
        $movies = Movie::select(['movies.*', 'name'])
            ->join('movies', 'genres', 'genre_id', 'id')
            ->get();
        // dd($movies);
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('admin.movies.add', compact('genres'));
    }

    public function store()
    {
        // dd($_FILES);

        $data = $_POST;

        //Validate
        if (trim($data['title']) == '') {
            $errors['title'] = "Ban chua nhap tieu de";
        }
        if (trim($data['intro']) == '') {
            $errors['intro'] = "Ban chua nhap mo ta";
        } else if (strlen($data['intro']) < 8) {
            $errors['intro'] = "Yeu cau mo ta phai it nhat 8 ki tu";
        }

        //Xử lí ảnh
        $poster = ""; //truong hjop k nhap anh
        $file = $_FILES['poster'];
        // ĐỊnh dạng ảnh
        $imgs = ['jpg', 'jpeg', 'png', 'gif'];
        // Lấy ra phần mở rộng của ảnh
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);

        if ($file['size'] == 0) {
            $errors['poster'] = "ban can nhap anh";
        } else if (!in_array($ext, $imgs)) {
            $errors['poster'] = "File k dung dinh dang";
        }

        //truơngf hợp cps lỗi validate
        if (isset($errors)) { {
                $genres = Genre::all();
                return view('admin.movies.add', compact('genres', 'errors', 'data'));
            }
        }

        if ($file['size'] > 0) {
            $poster = "posters/" . $file['name'];
            move_uploaded_file($file['tmp_name'], $poster);
        }
        //thêm poster vào mảng data
        $data['poster'] = $poster;

        //insert
        Movie::create($data);

        //Chuyen huong danh sach
        return redirect('admin/movies');
    }
    //Xoas
    public function destroy($id)
    {
        Movie::delete($id);
        //Chuyen sang danh sach
        return redirect('admin/movies');
    }


    //Edit
    public function edit($id){
        $movie = Movie::find($id);
        $genres = Genre::all();
        return view('admin.movies.edit', compact('movie', 'genres'));
    }


    //Update
    public function update($id){
        //Lấy bài viết cũ
        $movie = Movie::find($id);
        //Lấy dữ liệu mới
        $data    = $_POST;

        $file = $_FILES['poster'];

        if($file['size'] > 0){
            $poster = "posters/" . $file['name'];
            move_uploaded_file($file['tmp_name'], $poster);
            $data['poster'] = $poster;
        }
        
        //Xoas anh
        if ($file['size'] > 0) {
            if (file_exists($movie->poster) && $poster != $movie->poster){
                unlink($movie->poster);
            }
        }
        Movie::update($data, $id);

        $message = "Cập nhật thành công";
        $movie = Movie::find($id);
        $genres = Genre::all();
        return view('admin.movies.edit', compact('movie', 'genres', 'message'));
    }




    public function show(string $id)
    {
        $movie = Movie::find($id);
        if (!$movie) {
            return redirect('admin/movies')->with('error', 'Không tìm được');
        }
        return view('admin.movies.show', compact('movie'));
    }
}
