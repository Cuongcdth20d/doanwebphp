x<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Blog</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>
<form action="{{ route('edit-ho-so') }}" method="POST" class="form index">

    <body>
        <header class="tm-header" id="tm-header">
            <div class="tm-header-wrapper">
                <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="tm-site-header">
                    <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
                    <h1 class="text-center">TimDO.Vn</h1>
                </div>
                <nav class="tm-nav" id="tm-nav">
                    <ul>
                        <li class="tm-nav-item active"><a href="{{ route('admin') }}" class="tm-nav-link">

                        ADMIN
                            </a></li>

                        <li class="tm-nav-item"><a href="{{route('tin-tuc')}}" class="tm-nav-link">

                                Quản lý Tin
                            </a></li>
                        <li class="tm-nav-item"><a href="{{ route('ql-bai') }}" class="tm-nav-link">

                                Quản lý bài viết
                            </a></li>
                        <li class="tm-nav-item"><a href="{{ route('ql-user') }}" class="tm-nav-link">
                                Quản lý người dùng
                            </a></li>
                        <li class="tm-nav-item"><a href="{{route('dang-xuat')}}" class="tm-nav-link">

                                Đăng Xuất
                            </a></li>
                    </ul>
                </nav>
                <div class="tm-mb-65">
                    <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                        <i class="fab fa-facebook tm-social-icon"></i>
                    </a>
                    <a href="https://twitter.com" class="tm-social-link">
                        <i class="fab fa-twitter tm-social-icon"></i>
                    </a>
                    <a href="https://instagram.com" class="tm-social-link">
                        <i class="fab fa-instagram tm-social-icon"></i>
                    </a>
                    <a href="https://linkedin.com" class="tm-social-link">
                        <i class="fab fa-linkedin tm-social-icon"></i>
                    </a>
                </div>
                <p class="tm-mb-80 pr-5 text-white">
                    Xtra Blog is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar.
                    Right side content will scroll up and down.
                </p>
            </div>
            
        </header>
        <div class="container-fluid">
            <main class="tm-main">
                <!-- Search form -->


</form>
</div>


<div class="container-fluid">
    <main class="tm-main">
        <!-- Search form -->

        <div class="row tm-row tm-mb-45">
            <div class="col-12">
                <img src="assets/images/admin.jpg" alt="">
            </div>
        </div>
        <div class="row tm-row tm-mb-120">
            <div class="col-12">
                <h2 class="tm-color-primary tm-post-title tm-mb-60">Hồ Sơ</h2>
            </div>
            <div class="col-lg-7 tm-contact-left">
                <form method="POST" action="" class="mb-5 ml-auto mr-0 tm-contact-form">
                    <div class="form-group row mb-4">
                        <label for="name" class="col-sm-3 col-form-label text-right tm-color-primary">{{Auth::user()->username}}</label>
                        <div class="col-sm-9">
                        <input type="text" name="username" class="form__input" placeholder="Tên Đăng Nhập" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="email" class="col-sm-3 col-form-label text-right tm-color-primary"> {{Auth::user()->Adress}}</label>
                        <div class="col-sm-9">
                        <input type="text" name="Adress" class="form__input" placeholder="Địa Chỉ" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="subject" class="col-sm-3 col-form-label text-right tm-color-primary"> {{Auth::user()->phone}}</label>
                        <div class="col-sm-9">
                        <input type="text" name="phone" class="form__input" placeholder="Số Điện Thoại" required>
                        </div>
                    </div>
                    <div class="form-group row mb-5">
                        <label for="message" class="col-sm-3 col-form-label text-right tm-color-primary">{{Auth::user()->email}}</label>
                        <div class="col-sm-9">
                        <input type="text" name="email" class="form__input" placeholder="email" required>
                        </div>
                    </div>
                    <div class="form-group row mb-5">
                        <label for="message" class="col-sm-3 col-form-label text-right tm-color-primary">{{Auth::user()->date}}</label>
                        <div class="col-sm-9">
                        <input type="date" id="date" name="date" value="">
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <div class="col-12">
                           <a href="{{route('admin')}}">Cập Nhật</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <footer class="row tm-row">
            <div class="col-md-6 col-12 tm-color-gray">
                Design: <a rel="nofollow" target="_parent" href="https://templatemo.com"
                    class="tm-external-link">TemplateMo</a>
            </div>
            <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                Copyright 2020 Xtra Blog Company Co. Ltd.
            </div>
        </footer>
    </main>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/templatemo-script.js"></script>
</body>

</html>