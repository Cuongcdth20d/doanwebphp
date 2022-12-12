<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{asset('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap')}}"
        rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-cyborg-gaming.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('https://unpkg.com/swiper@7/swiper-bundle.min.css')}}" />
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
                        <a href="{{ route('admin') }} " class="logo">
                            <img src="assets/images/logo.png" alt="">
                            <label>TimDo.Vn</label>
                        </a>

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('admin') }}" class="active">Trang Chủ</a></li>
                            
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
    <form action="{{route('edit-tin',['id'=>$Post->id ])}}" method="POST" class="form index" enctype="multipart/form-data">
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
                                        <img src="{{asset('anhad/')}}/{{ $Post->image}}">
                                            <input type="file" name="image">
                                        </div>
                                        
                                        <div class="col-lg-4 align-self-center">
                                            <ul>
                                                <li>{{$Post->tieude}}<span> <input  name="tieude" value=""></span>
                                                </li>  
                                              <textarea name="noidung" cols="30" rows="10">{{$Post->noidung}}</textarea>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="clips">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="main-button">
                                                            <button type="submit">Cập Nhật</button>
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
    </form>

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
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/tabs.js')}}"></script>
    <script src="{{asset('assets/js/popup.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>


</body>

</html>