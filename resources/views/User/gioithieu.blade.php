<!DOCTYPE html>
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
<form action="{{ route('da-dang') }}" method="POST" class="form index">

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
                        <li class="tm-nav-item"><a href="{{ route('trang-chu') }}" class="tm-nav-link">

                                Trang chủ
                            </a></li>

                        @if(Auth::check())
                        <li class="tm-nav-item"><a href="{{route('dang-bai')}}" class="tm-nav-link">

                                Đăng Bài
                            </a></li>
                        <li class="tm-nav-item"><a href="{{route('ho-so')}}" class="tm-nav-link">

                                Hồ Sơ
                            </a></li>
                        <li class="tm-nav-item"><a href="{{route('dang-xuat')}}" class="tm-nav-link">

                                Đăng Xuất
                            </a></li>

                        @else
                        <li class="tm-nav-item"><a href="{{ route('xl-dang-nhap') }}" class="tm-nav-link">

                                Đăng Nhập
                            </a></li>
                        <li class="tm-nav-item"><a href="{{route('xl-dang-ky')}}" class="tm-nav-link">

                                Đăng Ký
                            </a></li>
                        @endif

                    </ul>
                </nav>
                <div class="tm-mb-65">
                    <a href="https://facebook.com" class="tm-social-link">
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
                <div>
                    Việc tìm kiểm sản phẩm trên các trang thương mại điện tử của Trung Quốc gây ra nhiều có khăn cho
                    người Việt Nam do bất đồng ngôn ngữ. Do đó, các trang thương mại điện tử này hỗ trợ tìm kiếm sản
                    phẩm bằng hình ảnh để giúp người dùng tìm kiếm sản phẩm mình cần dễ dàng và nhanh chóng hơn. Dưới
                    đây, Thương Đô xin giới thiệu cách tìm kiếm đồ trên TimDo.Vn bằng hình ảnh trên các trang TMĐT và giới
                    thiệu App mua hàng Quảng Châu chuyên dụng dành cho người Việt để các bạn tham khảo.
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
</form>

</html>