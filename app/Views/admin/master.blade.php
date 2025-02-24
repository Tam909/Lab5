<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- Header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ APP_URL . 'admin' }}">Admin Panel</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ APP_URL . 'admin/movies' }}">Sản Phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ APP_URL . 'admin/genres' }}">Genres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ APP_URL . 'admin/users' }}">Users</a>
                            </li>
                        </ul>
                        <form class="d-flex" action="{{ APP_URL . 'admin/movies/search' }}" method="GET">
                            <input class="form-control me-2" type="search" name="keyword" placeholder="Search products..." aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <div class="ms-3">
                            <a href="{{ APP_URL . 'logout' }}" class="btn btn-outline-danger btn-sm">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="mt-4">
            @yield('content')
        </main>

        <!-- Footer -->
        
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMN2hd2QdxDII+RL7IWlnOYU8Gtb5yFksNFkrZzXf+TQfpD79zqM/wO7bXl9pYY9" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGawiHp3rKJUDGqz2L5A3e4CZp3yZLlEMFiFbINgTm7niuHfK8yN1pqlSLr" crossorigin="anonymous"></script>
</body>

</html>
