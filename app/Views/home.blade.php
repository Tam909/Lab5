@extends('layout')

@section('title', 'Trang chủ')

@section('content')
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời Trang Nam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .banner img {
            max-height: 500px;
            object-fit: cover;
        }
        .nav-link {
            font-size: 1rem;
            text-transform: uppercase;
            padding: 10px 15px;
        }
        .nav-link:hover {
            color: #ff4500 !important;
        }
        .product-card {
            text-align: center;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: 0.3s;
            background: #fff;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .product-card:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .product-price {
            color: red;
            font-weight: bold;
        }
        .old-price {
            text-decoration: line-through;
            color: gray;
        }
    </style>
</head>
<body>
    <header class="top-bar bg-dark text-light text-center py-1">
        <p class="mb-0">Hotline: 0868.444.644</p>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">4MEN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">HÀNG MỚI VỀ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">BỘ SƯU TẬP</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">QUẦN NAM</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">PHỤ KIỆN</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">LIÊN HỆ</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="#">OUTLET SALE</a></li>
                    <button class="btn btn-danger"><a href="{{ APP_URL . 'login' }}" class="text-white">Admin</a></button>
                </ul>
            </div>
        </div>
    </nav>
    <section class="banner">
        <img src="https://intphcm.com/data/upload/banner-thoi-trang-dep.jpg" class="img-fluid w-100" alt="Thời trang nam 4MEN">
    </section>

    <!-- Danh sách sản phẩm -->
    <div class="container mt-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
            <div class="product-card">
                    <img src="https://pos.nvncdn.com/2865a9-85186/ps/20240813_19QNMniin3.jpeg" alt="Quần Tây">
                    <h5>Quần Tây Trơn Vải Rayon</h5>
                    <p class="product-price">495.000 đ</p>
                </div>
            </div>
            <div class="col-md-4">
            <div class="product-card">
                    <img src="https://pos.nvncdn.com/2865a9-85186/ps/20240829_BFP5ll4nNo.jpeg" alt="Quần Kaki">
                    <h5>Quần Kaki Trơn Signature</h5>
                    <p class="product-price">475.000 đ</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://4menshop.com/cache/image/300x400/images/thumbs/2024/05/quan-kaki-tui-nho-kieu-form-slimfit-qk026_small-18488.jpg" alt="Quần Tây">
                    <h5>Quần Tây Trơn Vải Rayon</h5>
                    <p class="product-price">495.000 đ</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://pos.nvncdn.com/2865a9-85186/ps/20240829_BFP5ll4nNo.jpeg" alt="Quần Kaki">
                    <h5>Quần Kaki Trơn Signature</h5>
                    <p class="product-price">475.000 đ</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://down-vn.img.susercontent.com/file/d84352d21a5c34515fde18c6fe565910" alt="Áo Polo">
                    <h5>Áo Polo Bo Sọc Form Regular</h5>
                    <p class="product-price">249.000 đ <span class="old-price">345.000 đ</span></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://pos.nvncdn.com/2865a9-85186/ps/20240813_19QNMniin3.jpeg" alt="Quần Tây">
                    <h5>Quần Tây Trơn Vải Rayon</h5>
                    <p class="product-price">495.000 đ</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
            <div class="product-card">
                    <img src="https://pos.nvncdn.com/2865a9-85186/ps/20240813_19QNMniin3.jpeg" alt="Quần Tây">
                    <h5>Quần Tây Trơn Vải Rayon</h5>
                    <p class="product-price">495.000 đ</p>
                </div>
            </div>
            <div class="col-md-4">
            <div class="product-card">
                    <img src="https://pos.nvncdn.com/2865a9-85186/ps/20240829_BFP5ll4nNo.jpeg" alt="Quần Kaki">
                    <h5>Quần Kaki Trơn Signature</h5>
                    <p class="product-price">475.000 đ</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://4menshop.com/cache/image/300x400/images/thumbs/2024/05/quan-kaki-tui-nho-kieu-form-slimfit-qk026_small-18488.jpg" alt="Quần Tây">
                    <h5>Quần Tây Trơn Vải Rayon</h5>
                    <p class="product-price">495.000 đ</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white mt-5">
    <div class="container py-4">
        <div class="row">
            <!-- Cột Logo + Liên hệ -->
            <div class="col-md-3">
                <h5 class="text-uppercase fw-bold">4MEN</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Giới thiệu</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Liên hệ</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Tuyển dụng</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Tin tức</a></li>
                </ul>
                <p><i class="fas fa-envelope"></i> Email: info@4menshop.com</p>
                <p><i class="fas fa-phone"></i> Hotline: 0868.444.644</p>
                <div class="d-flex">
                    <input type="email" class="form-control me-2" placeholder="Email của bạn">
                    <button class="btn btn-danger">ĐĂNG KÝ</button>
                </div>
            </div>

            <!-- Cột Hỗ trợ khách hàng -->
            <div class="col-md-3">
                <h5 class="text-uppercase fw-bold">Hỗ trợ khách hàng</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Hướng dẫn đặt hàng</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Hướng dẫn chọn size</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Câu hỏi thường gặp</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Chính sách khách VIP</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Thanh toán - Giao hàng</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Chính sách đổi hàng</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Chính sách bảo mật</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Chính sách cookie</a></li>
                </ul>
            </div>

            <!-- Cột Hệ thống cửa hàng -->
            <div class="col-md-3">
                <h5 class="text-uppercase fw-bold">Hệ thống cửa hàng</h5>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.676726696201!2d106.67214527566408!3d10.759917159552763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f26f5f23d2f%3A0xa93d099c14b3a51a!2zNFFNRU4gU2hvcA!5e0!3m2!1sen!2s!4v1644761288927!5m2!1sen!2s"
                    width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
                <a href="#" class="text-white text-decoration-none">Tìm địa chỉ CỬA HÀNG gần bạn »</a>
            </div>

            <!-- Cột Kết nối -->
            <div class="col-md-3">
                <h5 class="text-uppercase fw-bold">Kết nối với 4MEN</h5>
                <div>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
