<!DOCTYPE html>

    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GoodGames | Community and Store HTML Game Template</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="{{asset('public/assets/images/favicon.png')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- FontAwesome -->
    <script defer src="{{asset('public/assets/vendor/fontawesome-free/js/all.js')}}"></script>
    <script defer src="{{asset('public/assets/vendor/fontawesome-free/js/v4-shims.js')}}"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/ionicons/css/ionicons.min.css')}}">

    <!-- Flickity -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/flickity/dist/flickity.min.css')}}">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/vendor/photoswipe/dist/photoswipe.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/vendor/photoswipe/dist/default-skin/default-skin.css')}}">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css')}}">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/vendor/summernote/dist/summernote-bs4.css')}}">

    <!-- GoodGames -->
    <link rel="stylesheet" href="{{asset('public/assets/css/goodgames.css')}}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('public/assets/css/custom.css')}}">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="{{asset('public/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    
    
</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>
    
        



<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class="nk-header nk-header-opaque">

    
    
<!-- START: Top Contacts -->
<div class="nk-contacts-top">
    <div class="container">
        <div class="nk-contacts-left">
            
        </div>
        <div class="nk-contacts-right">
            <ul class="nk-contacts-icons">
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalSearch">
                        <span class="fa fa-search"></span>
                    </a>
                </li>
                <?php
                                    
                    $user_id = Session::get('user_id');
                    if ($user_id!=NULL) {
                ?>
                <li>
                    <a href="{{URL::to('/logout-checkout')}}" >
                        <span class="fa fa-sign-out" aria-hidden="true"></span>
                    </a>
                </li>
                <?php
                    }
                ?>
            </ul>

        </div>
    </div>
</div>
<!-- END: Top Contacts -->

    

    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                
                <a href="{{URL::to('/')}}" class="nk-nav-logo">
                    <img src="{{asset('public/assets/images/logo.png')}}" alt="GoodGames" width="199">
                </a>
                
                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
        
        <li>
            <a href="{{URL::to('/admin')}}">
                Admin
                
            </a>
        </li>
       <!--  <li>
            <a href="gallery.html">
                Thư Viện Ảnh
                
            </a>
        </li> -->
        







        <?php
            $user_id = Session::get('user_id');
            $ship_id = Session::get('ship_id');
                                    
            
            if ($user_id==NULL) {
        ?>
        <li>
            <a href="{{URL::to('/login-checkout')}}">
                Đăng Nhập
                
            </a>
        </li>
        <?php
            }
        ?>
         

        <li class=" nk-drop-item">
            <a href="{{URL::to('/')}}">
                Cửa Hàng
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="{{URL::to('/')}}">
                Cửa Hàng
                
            </a>
        </li>
        
        <li>
            <a href="{{URL::to('/all-game-user')}}">
                Tất Cả Sản Phẩm
                
            </a>
        </li>
        <?php
            $user_id = Session::get('user_id');
            $ship_id = Session::get('ship_id');
                                    
            
            if ($user_id==NULL) {
        ?>
        <li>
            <a href="{{URL::to('/login-checkout')}}">
                Thủ Tục Thanh Toán
                
            </a>
        </li>
       
        <?php
            }else if($user_id!=NULL && $ship_id == NULL){
        ?>
       <li>
            <a href="{{URL::to('/checkout')}}">
                Thủ Tục Thanh Toán
                
            </a>
        </li>
        <?php
            }else if($user_id!=NULL && $ship_id != NULL){
        ?>
        <li>
            <a href="{{URL::to('/payment')}}">
                Thủ Tục Thanh Toán
                
            </a>
        </li>
        <?php
            }
        ?>
        <li>
            <a href="{{URL::to('/show-cart')}}">
                Giỏ Hàng
                
            </a>
        </li>
                    </ul>
        </li>

        
        <?php
            $user_id = Session::get('user_id');
            $ship_id = Session::get('ship_id');
                                    
            
            if ($user_id!=NULL) {
        ?>

        <li class=" nk-drop-item">
            <a href="{{URL::to('/')}}">
                <?php
                    $user_name = Session::get('name');
                        if ($user_name) {
                            echo $user_name;
                        }
                ?>
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="{{URL::to('/manager-order-user')}}">
                Lịch Sử Mua Hàng                
            </a>
        </li>
        
        <li>
            <a href="{{URL::to('/logout-checkout')}}">
                Đăng Xuất
                
            </a>
        </li>
        
                    </ul>
        </li>
        <?php
            }
        ?>
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    
                        <li class="single-icon d-lg-none">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>

    
    
        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="{{asset('public/assets/images/logo.png')}}" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

    

    <div class="nk-main">
        
            <div class="nk-gap-2"></div>
        

        
<div class="container">

    <!-- START: Image Slider -->
    <div class="nk-image-slider" data-autoplay="8000">
        
        
        <div class="nk-image-slider-item">
            <img src="{{asset('public/assets/images/slide-1.jpg')}}" alt="" class="nk-image-slider-img" data-thumb="{{asset('public/assets/images/slide-1-thumb.jpg')}}">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">As we Passed, I remarked</h3>
                    <p class="text-white">As we passed, I remarked a beautiful church-spire rising above some old elms in the park; and before them, in the midst of a lawn, chimneys covered with ivy, and the windows shining in the sun.</p>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
                
            </div>
            
        </div>
        
        
        
    </div>
    <!-- END: Image Slider -->

    <!-- START: Categories -->
    
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        @foreach($NPH_game as $key => $NPH)
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{{asset('public/assets/images/icon-mouse.png')}}" alt="">
                </div>
                <div class="nk-feature-cont">
                   
                        <li><a href="{{URL::to('/nen-tang/'.$NPH->communication_id)}}"> <span class="pull-right"></span>{{$NPH->communication_name}}</a></li>
                    
                    <h4 class="nk-feature-title text-main-1"><a href="{{URL::to('/nen-tang/'.$NPH->communication_id)}}">Xem Tất Cả</a></h4>
                </div>
            </div>
        </div>
        @endforeach    
    </div>
    
    <!-- END: Categories -->

   

    <!-- START: Top 10 Best Sellers -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Ngẫu Nhiên</h3>
    <div class="nk-gap"></div>
    <div class="nk-carousel nk-carousel-x4" data-autoplay="5000" data-dots="false" data-cell-align="left" data-arrows="true">
        <div class="nk-carousel-inner">
            
             @foreach($random_game as $key => $random)
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="{{URL::to('/chi-tiet-san-pham/'.$random->Game_id)}}">
                        <img src="{{asset('public/uploadimage/'.$random->Game_image)}}" height="350" width="200" alt="" />
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="{{URL::to('/chi-tiet-san-pham/'.$random->Game_id)}}">{{$random->Game_name}}</a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">{{number_format($random->Game_price).' '.'VNĐ'}}</div>
                    </div>
                </div>
            </div></div>
            @endforeach    
            
            
        </div>
    </div>
    <!-- END: Top 10 Best Sellers -->

    <!-- START: Featured Games -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Mới Nhất</h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">
        
        @foreach($new_game as $key => $newgame)
        <div class="col-lg-6">
            <div class="nk-product-cat-2">
                <a class="nk-product-image" href="{{URL::to('/chi-tiet-san-pham/'.$newgame->Game_id)}}">
                    <img src="{{asset('public/uploadimage/'.$newgame->Game_image)}}" height="350" width="200" alt="" />
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="{{URL::to('/chi-tiet-san-pham/'.$newgame->Game_id)}}">{{$newgame->Game_name}}</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    {{$newgame->Game_content}}
                    <div class="nk-gap-2"></div>
                    <div class="nk-product-price">{{number_format($newgame->Game_price).' '.'VNĐ'}}</div>
                    <div class="nk-gap-1"></div>
                   
                </div>
            </div>
        </div>
         @endforeach    
    </div>
    <!-- END: Featured Games -->

    <!-- START: Most Popular -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Rẻ Nhất</h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">
        
         @foreach($price_game as $key => $pricegame)
        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="{{URL::to('/chi-tiet-san-pham/'.$pricegame->Game_id)}}">
                    <img src="{{asset('public/uploadimage/'.$pricegame->Game_image)}}" height="350" width="200" alt="" />
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="{{URL::to('/chi-tiet-san-pham/'.$pricegame->Game_id)}}">{{$pricegame->Game_name}}</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">{{number_format($pricegame->Game_price).' '.'VNĐ'}}</div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    <!-- END: Most Popular -->
</div>

<div class="nk-gap-2"></div>


        
            <!-- START: Footer -->
<footer class="nk-footer">

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Mới Thêm</h4>
                    <div class="nk-widget-content">
                        <div class="row vertical-gap sm-gap">
                              @foreach($new_game as $key => $newgame)
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="{{URL::to('/chi-tiet-san-pham/'.$newgame->Game_id)}}" class="nk-post-image">
                                         <img src="{{asset('public/uploadimage/'.$newgame->Game_image)}}" height="350" width="200" alt="" />
                                    </a>
                                    <div class="nk-post-title"><a href="{{URL::to('/chi-tiet-san-pham/'.$newgame->Game_id)}}">{{$newgame->Game_name}}</a></div>
                                    
                                </div>
                            </div>
                             @endforeach
                            
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>

    <div class="nk-copyright">
        <div class="container">
            
        </div>
    </div>
</footer>
<!-- END: Footer -->

        
    </div>

    
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="{{asset('public/assets/images/bg-top.png')}}" alt="">
    <img class="nk-page-background-bottom" src="{{asset('public/assets/images/bg-bottom.png')}}" alt="">
<!-- END: Page Background -->

    

    
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Tìm Kiếm</h4>

                <div class="nk-gap-1"></div>
                <form action="{{URL::to('/search-game')}}" class="nk-form nk-form-style-1" method="POST">
                    {{csrf_field()}}
                    <input type="text"  name="keywords_submit" class="form-control" placeholder="Nhập Từ Khóa" autofocus>
                    <input type="submit" style="margin-top: 0 ; color: #000" name="search_game" class="btn btn-primary btn-sm" value="Tìm Kiếm">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->
    

    
        <!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Đăng Nhập</span></h4>

                <div class="nk-gap-1"></div>
                <form action="{{URL::to('/login-user')}}" class="nk-form text-white" method="POST">
                    {{ csrf_field() }}
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            Nhập Email Và Mật Khẩu Đăng Nhập:

                            <div class="nk-gap"></div>
                            <input type="email" value="" name="email_account" class=" form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="password_account" class="required form-control" placeholder="Password">
                        </div>
                        
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a href="" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Đăng Nhập</a>
                        </div>
                        <div class="col-md-6">
                            
                            <div class="mnt-5">
                                <small><a href="#">Không Có Tài Khoản ? Đăng Ký</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->

    

    
<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="{{asset('public/assets/vendor/object-fit-images/dist/ofi.min.js')}}"></script>

<!-- GSAP -->
<script src="{{asset('public/assets/vendor/gsap/src/minified/TweenMax.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js')}}"></script>

<!-- Popper -->
<script src="{{asset('public/assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('public/assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Sticky Kit -->
<script src="{{asset('public/assets/vendor/sticky-kit/dist/sticky-kit.min.js')}}"></script>

<!-- Jarallax -->
<script src="{{asset('public/assets/vendor/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/jarallax/dist/jarallax-video.min.js')}}"></script>

<!-- imagesLoaded -->
<script src="{{asset('public/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>

<!-- Flickity -->
<script src="{{asset('public/assets/vendor/flickity/dist/flickity.pkgd.min.js')}}"></script>

<!-- Photoswipe -->
<script src="{{asset('public/assets/vendor/photoswipe/dist/photoswipe.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js')}}"></script>

<!-- Jquery Validation -->
<script src="{{asset('public/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>

<!-- Jquery Countdown + Moment -->
<script src="{{asset('public/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/moment/min/moment.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js')}}"></script>

<!-- Hammer.js -->
<script src="{{asset('public/assets/vendor/hammerjs/hammer.min.js')}}"></script>

<!-- NanoSroller -->
<script src="{{asset('public/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js')}}"></script>

<!-- SoundManager2 -->
<script src="{{asset('public/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js')}}"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="{{asset('public/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js')}}"></script>

<!-- Summernote -->
<script src="{{asset('public/assets/vendor/summernote/dist/summernote-bs4.min.js')}}"></script>

<!-- nK Share -->
<script src="{{asset('public/assets/plugins/nk-share/nk-share.js')}}"></script>

<!-- GoodGames -->
<script src="{{asset('public/assets/js/goodgames.min.js')}}"></script>
<script src="{{asset('public/assets/js/goodgames-init.js')}}"></script>
<!-- END: Scripts -->



    
</body>
</html>
