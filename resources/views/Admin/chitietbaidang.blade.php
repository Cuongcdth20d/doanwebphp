<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Blog</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/templatemo-xtra-blog.css')}}" rel="stylesheet">
    <!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>

<body>
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
                <h1 class="text-center">Xtra Blog</h1>
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
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..."
                            aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            @foreach($Post as $List)
            <div class="row tm-row tm-mb-45">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <img src="{{asset('anh')}}/{{$List->image}}">
                </div>
            </div>
            <div class="row tm-row tm-mb-40">
                <div class="col-12">
                    <div class="mb-4">
                        <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">Loại : <span>{{$List->loai}}</span>
                        </h2>
                        <div>
                            <ul>
                                <li> Nội Dung : <span>{{$List->noidung}}</span> </li>
                                <li> Ngày Mất : <span>{{$List->ngaymat}}</span> </li>
                                <li> Số Điện Thoại : <span>{{$List->phone}}</span> </li>
                                @csrf
                                <li> Bình Luận : </li>
                                <span> <textarea name="" rows="4" cols="50"></textarea></span>
                            </ul>
                        </div>
                    </div>
                    <button type="submit">Bình Luận </button>
                </div>
            </div>
            @foreach($binhluan as $Binhluan)
            <div>
                <ul>
                    <li>
                        {{$Binhluan->username}} <br> <span> {{$Binhluan->binhluan}} </span>
                    </li>
                    <li><a href=" ">Xóa</a></li>
                </ul>
            </div>
            <hr>
            @endforeach
            @endforeach
            <div class="row tm-row tm-mb-120">
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
    <script src="{{asset('css/js/jquery.min.js')}}"></script>
    <script src="{{asset('css/js/templatemo-script.js')}}"></script>
</body>

</html>