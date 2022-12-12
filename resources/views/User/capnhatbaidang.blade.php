<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-cyborg-gaming.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css')}}" />
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
                        <a href="{{route('trang-chu')}}" class="logo">
                            <img src="{{asset('assets/images/logo.png')}}" alt="">
                            <label>TimDo.Vn</label>
                        </a>

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('trang-chu') }}" class="active">Trang Chủ</a></li>
                            <li><a href="{{ route('ho-so') }}">Hồ Sơ <img src="{{asset('assets/images/profile-header.jpg')}}"
                                        alt=""></a>
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
    <form action="{{ route('edit',['id'=>$Post->id ])}}" method="POST" class="form index" enctype="multipart/form-data">
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
                                        <img src="{{asset('anh/')}}/{{ $Post->image}}">
                                        <input type="file" name="image">
                                        </div>
                                        <div class="col-lg-4 align-self-center">
                                            <div class="main-info header-text">
                                                <div class="main-border-button">
                                                    <textarea name="noidung" cols="30" rows="10"> {{$Post->noidung}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 align-self-center">
                                            <ul>
                                                <li>{{$Post->username}}<span> <input id="username" name="username" value=""> </span>
                                                </li>
                                                <li>{{$Post->noimat}} <span>
                                                    <select id="noimat" name="noimat" value="">
                                                        <option value="Điện Biên">Điện Biên
                                                        <option value="Đồng Nai">Đồng Nai
                                                        <option value="Đồng Tháp">Đồng Tháp
                                                        <option value="Đồng Tháp">Đồng Tháp
                                                        <option value="Gia Lai">Gia Lai
                                                        <option value="Hà Giang">Hà Giang
                                                        <option value="Hà Nam">Hà Nam
                                                        <option value="Hà Tĩnh">Hà Tĩnh
                                                        <option value="Hải Dương">Hải Dương
                                                        <option value="Hậu Giang">Hậu Giang
                                                        <option value="Hòa Bình">Hòa Bình
                                                        <option value="Hưng Yên">Hưng Yên
                                                        <option value="Khánh Hòa">Khánh Hòa
                                                        <option value="Kiên Giang">Kiên Giang
                                                        <option value="Kon Tum">Kon Tum
                                                        <option value="Lai Châu">Lai Châu
                                                        <option value="Lâm Đồng">Lâm Đồng
                                                        <option value="Lạng Sơn">Lạng Sơn
                                                        <option value="Lào Cai">Lào Cai
                                                        <option value="Long An">Long An
                                                        <option value="Nam Định">Nam Định
                                                        <option value="Nghệ An">Nghệ An
                                                        <option value="Ninh Bình">Ninh Bình
                                                        <option value="Ninh Thuận">Ninh Thuận
                                                        <option value="Phú Thọ">Phú Thọ
                                                        <option value="Quảng Bình">Quảng Bình
                                                        <option value="Quảng Bình">Quảng Bình
                                                        <option value="Quảng Ngãi">Quảng Ngãi
                                                        <option value="Quảng Ninh">Quảng Ninh
                                                        <option value="Quảng Trị">Quảng Trị
                                                        <option value="Sóc Trăng">Sóc Trăng
                                                        <option value="Sơn La">Sơn La
                                                        <option value="Tây Ninh">Tây Ninh
                                                        <option value="Thái Bình">Thái Bình
                                                        <option value="Thái Nguyên">Thái Nguyên
                                                        <option value="Thanh Hóa">Thanh Hóa
                                                        <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                                        <option value="Tiền Giang">Tiền Giang
                                                        <option value="Trà Vinh">Trà Vinh
                                                        <option value="Tuyên Quang">Tuyên Quang
                                                        <option value="Vĩnh Long">Vĩnh Long
                                                        <option value="Vĩnh Phúc">Vĩnh Phúc
                                                        <option value="Yên Bái">Yên Bái
                                                        <option value="Phú Yên">Phú Yên
                                                        <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                                        <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                                        <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                                        <option value="Tp.Hà Nội">Tp.Hà Nội
                                                        <option value="TP  HCM">TP HCM
                                                            </select>
                                                    </span></li>
                                                <li>{{$Post->phone}} <span><input id="phone" name="phone" value=""></span></li>
                                                <li>{{$Post->loai}}
                                                    <span>
                                                        <select  name="loai" value="">
                                                            <option value="Ví/Bóp">Ví/Bóp</option>
                                                            <option value="Giấy Tờ">Giấy Tờ</option>
                                                            <option value="Giấy Phép Lái Xe">Giấy Phép Lái Xe</option>
                                                            <option value="CCCD/CMND">CCCD/CMND</option>
                                                            <option value="Khác">Khác</option>
                                                        </select>
                                                    </span>
                                                </li>
                                                <li>{{$Post->ngaymat}} <span><input type="date" name="ngaymat" value=""></span></li>
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
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{ asset('assets/js/tabs.js')}}"></script>
    <script src="{{ asset('assets/js/popup.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>


</body>

</html>