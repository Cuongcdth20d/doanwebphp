<!DOCTYPE html>
<html lang="en">
<style>
table,
th,
td {
    border: 2px solid black;
    border-collapse: collapse;
}

th,
td {
    background-color: white;
}
.container
{
    height: 50px;
    width: 100px;
    margin: 30px ;
}
</style>

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
<form action="{{route('tin-tuc')}}" method="POST" class="form index">

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

        <div>
            <h2 style="text-align:center"> <b>Tin Đã Đăng  </b></h2>
            <hr class="tm-hr-primary  tm-mb-55">
            <div  class="container" style="margin: center;">
            <a href="{{route('xl-dang-tin')}}">Đăng Tin</a>
            </div>
            <table style="width:100%">
                <tr>
                    <th style="text-align: center">ID</th>
                    <th style="text-align: center">Tiêu Đề</th>
                    <th style="text-align: center">Nội Dung</th>
                </tr>
                @foreach($Post as $ListPost)
                @csrf
                <tr>
                    <th style="text-align: center">{{$ListPost->id}}</th>
                    <th style="text-align: center">{{$ListPost->tieude}}</th>
                    <th style="text-align: center"> <a href="/chi-tiet-ban-tin/{{($ListPost->id)}}"> Xem Chi Tiết</a></th>
                    <th style="text-align: center"> <a href="/xoa-tin/{{$ListPost->id}}"> Xóa</a></th>
                    <th style="text-align: center"> <a href="/edit-tin/{{$ListPost->id}}"> Sửa</a></th>
                    
                </tr>
                @endforeach

              
            </table>     
             
        </div>

       

</div>
</main>

</div>
<script src="js/jquery.min.js"></script>
<script src="js/templatemo-script.js"></script>
</body>

</html>