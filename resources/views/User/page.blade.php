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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>
<form action="{{ route('trang-chu') }}" method="POST" class="form index">

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

                        <li class="tm-nav-item"><a href="{{ route('ban-tin') }} " class="tm-nav-link">

                                Tin Tức
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
                        <li class="tm-nav-item"><a href="{{route('gioi-thieu')}}" class="tm-nav-link">

                                Giới Thiệu
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
                <div class="row tm-row">
                    <div class="col-12">
                        <form action="" method="GET" class="form-inline tm-mb-80 tm-search-form">
                            <input class="form-control tm-search-input" name="loai" type="text"
                                placeholder="Search..." aria-label="Search"> 
                            <!--    <span>
                                                        <select  name="loai" value="">
                                                            <option value="Ví/Bóp">Ví/Bóp</option>
                                                            <option value="Giấy Tờ">Giấy Tờ</option>
                                                            <option value="Giấy Phép Lái Xe">Giấy Phép Lái Xe</option>
                                                            <option value="CCCD/CMND">CCCD/CMND</option>
                                                            <option value="Khác">Khác</option>
                                                        </select>
                                                    </span> -->
                            <button class="tm-search-button" type="submit">
                                <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @foreach($Post as $ListPost)
                <div class="row tm-row tm-mb-60">
                    <div class="col-12">
                        <hr class="tm-hr-primary  tm-mb-55">
                    </div>
                    <img src="anh/{{ $ListPost->image}}">
                    <div class="col-lg-6 tm-mb-60 tm-person-col">
                        <div class="media tm-person">

                            <div class="media-body">
                                <ul>
                                    <li>
                                        <h2 class="tm-color-primary tm-post-title mb-2"> {{$ListPost->loai}}</h2>
                                    </li>
                                    <li> <i class="fa fa-phone" style="font-size:20px">
                                            <span>{{$ListPost->phone}}</span> </i> </li>
                                </ul>
                            </div>

                            <div>
                                <a href="/chi-tiet/{{($ListPost->id)}}"> Chi Tiết</a>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
</form>
</div>


<div class="row tm-row tm-mt-100 tm-mb-75">
    <div class="tm-prev-next-wrapper">
        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
    </div>
    <div class="tm-paging-wrapper">
        <span class="d-inline-block mr-3">Page</span>
        <nav class="tm-paging-nav d-inline-block">
            <ul>
                <li class="tm-paging-item active">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<footer class="row tm-row">
    <hr class="col-12">
    <div class="col-md-6 col-12 tm-color-gray">
        Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
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