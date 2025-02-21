<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function login()
    {
        return view('auth.login');
    }

    //Xủ lsi đăng nhập
    public function postLogin()
    {
        $data = $_POST;
        if (trim($data['username'] == "")) {
            $errors['message'] = "Ban chua dang nhap username";
        }
        if (trim($data['username'] == "")) {
            $errors['message'] = "Ban chua dang nhap password";
        }

        if (isset($errors)) {
            return view('auth.login', compact('data', 'errors'));
        }

        $user = User::where('username', '=', $data['username'])->first();

        if (!$user) {
            $errors['message'] = "Username hoac Password k chinh xac";
        } else{
            //Ktra mật khẩu của user
            if (password_verify($data['password'], $user->password)){
                $_SESSION['user'] = $user;
                redirect('admin/movies');
            }else{
                $errors['message'] = "Username hoac Password chua chinh xac";
            }
        }

        if (isset($errors)) {
            return view('auth.login', compact('data', 'errors'));
        }
    }
    public function register()
    {
        return view('auth.register');
    }

    public function store()
    {
        $data = $_POST;
        //MÃ hóa mật khẩu
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        User::create($data);

        return redirect('login');
    }

    public function logout(){
        if (isset($_SESSION['user'])){
            unset($_SESSION['user']);       
        }
        return redirect('login');
    }

}
