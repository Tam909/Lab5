<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container w-5050">
        <h1>Login</h1>
        @isset($errors)
            <div class="alert alert-danger mb-3">
                {{ $errors['message']}}
            </div>
        @endisset
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">UserName</label>
                <input type="text" name="username" id=" " value="{{ $data['username'] ?? '' }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ APP_URL . 'register'}}" class="btn btn-primary">Register</a>
            </div>
        </form>
    </div>
</body>

</html>