<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Search End ***** -->
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        <!-- ***** Search End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active">Trang Chủ</a></li>
                            <li><a href="browse.html">Bài Đăng</a></li>
                            <li><a href="details.html">Chi Tiết</a></li>
                            <li><a href="post.html">Đăng Bài</a></li>
                            <li><a href="profile.html">Hồ Sơ <img src="assets/images/profile-header.jpg" alt=""></a>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content">

                        <!-- ***** Banner Start ***** -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-profile ">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="file" name="image">
                                        </div>
                                        <div class="col-lg-4 align-self-center">
                                            <div class="main-info header-text">
                                                <div class="main-border-button">
                                                    <textarea name="noidung" cols="30" rows="10"> </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 align-self-center">
                                            <ul>
                                                <li>Loai <span>{{$ListPost->loai}}</span></li>
                                                <li>Noi Dung <span> {{$ListPost->noidung}}</span></li>
                                                <li>Phone <span>{{$ListPost->phone}}</span></li>
                                                <li>Ngay Mat <span>{{$ListPost->ngaymat}}</span></li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="clips">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="main-button">
                                                        <button type="submit">Post</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ***** Banner End ***** -->


                    </div>
                </div>
            </div>
        </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

                        <br>Design: <a href="https://templatemo.com" target="_blank"
                            title="free CSS templates">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>


</body>

</html>