<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Blog</title>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}"> <!-- https://fontawesome.com/ -->
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap')}}" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/templatemo-xtra-blog.css')}}" rel="stylesheet">
    <!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>
<style>
    p.right{
        text-align: right;

    }
</style>

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
            
            @foreach($Post as $ListPost)
            <div class="dropdown" style="margin-left: 90%;top: 0.1%;">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: white;color: #000;border-color: white;">ooo
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" href="#">Báo cáo vi phạm</a>

                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    
                                    <div class="modal-body">
                                        <div style="text-align:left;  width: 100%; ">

                    
                                                <h4 class="text-center styles_titleCustom__nikjG "> Báo cáo vi phạm</h4>
                                            
                                            <div class="styles_modal-body__HL36o undefined">
                                                <div class="sc-113y56x-0 bwEznN">
                                                    <div class="conditionLoansForm">
                                                        <div class="label"><h5>Bài viết này có vấn đề gì</h5>
                                                        </div>
                                                        <div class="sc-kisx03-0 jgmSXT">
                                                            <div class="oneRowWrapper">
                                                                <div class="inputGroupFullWidth">
                                                                    <div>
                                                                        <div class="Styles_wrapper__nsnmB">
                                                                            <div class="Styles_item__r_Uvw" role="button" tabindex="0">
                                                                                <div class="Styles_radioButton__cjnDp"><label class="Styles_labelButton__l8QLW" for="radio-1"><input type="radio" name="Lừa đảo" id="radio-1" class="Styles_radioButton__cjnDp" value="1">
                                                                                        Bạo lực</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="Styles_wrapper__nsnmB">
                                                                            <div class="Styles_item__r_Uvw" role="button" tabindex="0">
                                                                                <div class="Styles_radioButton__cjnDp"><label class="Styles_labelButton__l8QLW" for="radio-1"><input type="radio" name="Lừa đảo" id="radio-1" class="Styles_radioButton__cjnDp" value="1">
                                                                                        Spam</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="Styles_wrapper__nsnmB">
                                                                            <div class="Styles_item__r_Uvw" role="button" tabindex="0">
                                                                                <div class="Styles_radioButton__cjnDp"><label class="Styles_labelButton__l8QLW Styles_labelButtonChecked__yvohM" for="radio-2"><input type="radio" name="Trùng lặp" id="radio-2" class="Styles_radioButton__cjnDp" value="2"></label> Bán hàng trái
                                                                                    phép</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="Styles_wrapper__nsnmB">
                                                                            <div class="Styles_item__r_Uvw" role="button" tabindex="0">
                                                                                <div class="Styles_radioButton__cjnDp"><label class="Styles_labelButton__l8QLW" for="radio-6"><input type="radio" name="Xe đã bán" id="radio-6" class="Styles_radioButton__cjnDp" value="6">
                                                                                        Quấy rối</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="Styles_wrapper__nsnmB">
                                                                            <div class="Styles_item__r_Uvw" role="button" tabindex="0">
                                                                                <div class="Styles_radioButton__cjnDp"><label class="Styles_labelButton__l8QLW" for="radio-7"><input type="radio" name="Không liên lạc được" id="radio-7" class="Styles_radioButton__cjnDp" value="7">
                                                                                        Khủng bố</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="Styles_wrapper__nsnmB">
                                                                            <div class="Styles_item__r_Uvw" role="button" tabindex="0">
                                                                                <div class="Styles_radioButton__cjnDp"><label class="Styles_labelButton__l8QLW" for="radio-8"><input type="radio" name="Thông tin không đúng thực tế" id="radio-8" class="Styles_radioButton__cjnDp" value="8"></label> Ngôn từ gây thù
                                                                                    ghét</div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="Styles_wrapper__nsnmB">
                                                                            <div class="Styles_item__r_Uvw" role="button" tabindex="0">
                                                                                <div class="Styles_radioButton__cjnDp"><label class="Styles_labelButton__l8QLW" for="radio-9"><input type="radio" name="Xe hư hỏng sau khi mua" id="radio-14" class="Styles_radioButton__cjnDp" value="14"> Thông tin sai
                                                                                        sự thật</label> </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                    <div class="Styles_wrapper__nsnmB">
                                                                            <div class="Styles_item__r_Uvw" role="button" tabindex="0">
                                                                                <div class="Styles_labelItem__djo3m">Lý do khác<br>
                                                                                    <textarea name="noidung" id="cMessage" class="full-width" placeholder="" required style="width: 100%;"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Gửi Báo Cáo</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row tm-row tm-mb-45">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <img src="{{asset('anh/')}}/{{ $ListPost->image}}">
                  
                </div>
            </div>
            <a href="" class="p"> Báo Cáo</a>
            <form action="" method="Post">
           
                <div class="row tm-row tm-mb-40">
                    <div class="col-12">
                        <div class="mb-4">
                            <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">Mất :
                                <span>{{$ListPost->loai}}</span>
                            </h2>
                            <div>
                                <ul>
                                    <li> Nội Dung : <span>{{$ListPost->noidung}}</span> </li>
                                    <li> Ngày Mất : <span>{{$ListPost->ngaymat}}</span> </li>
                                    <li> Số Điện Thoại : <span>{{$ListPost->phone}}</span> </li>
                                    <li>Ngày Đăng : <span>{{$ListPost->created_at}}</span></li>
                                    @csrf
                                    <li> Bình Luận : </li>
                                    <span> <textarea name="binhluan" rows="4" cols="50"></textarea></span>
                                </ul>
                            </div>
                        </div>
                     <p hidden><input type="text" name="idbv" value="{{$ListPost->id}}"> </p>   
                        <button type="submit">Bình Luận </button>
                    </div>
                </div>
          
            @endforeach
          
                @foreach($binhluan as $Binhluan)
                <div>
                    <ul>
                        <li>
                        {{$Binhluan->username}} <br> <span> {{$Binhluan->binhluan}} </span>
                        </li>
                       <!-- <li><a href="">Xóa</a></li> -->
                    </ul>
                </div>
                <hr>
                @endforeach
                </form>




        </main>
    </div>
    <script src="{{asset('css/js/jquery.min.js')}}"></script>
    <script src="{{asset('css/js/templatemo-script.js')}}"></script>
</body>

</html>