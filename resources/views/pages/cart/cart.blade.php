<!DOCTYPE html>

    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GoodGames | Community and Store HTML Game Template</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="https://webgamebtl.herokuapp.com/public/assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://webgamebtl.herokuapp.com/public/assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="https://webgamebtl.herokuapp.com/public/assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="https://webgamebtl.herokuapp.com/public/assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="https://webgamebtl.herokuapp.com/public/assets/vendor/ionicons/css/ionicons.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="https://webgamebtl.herokuapp.com/public/assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="https://webgamebtl.herokuapp.com/public/assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="https://webgamebtl.herokuapp.com/public/assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="https://webgamebtl.herokuapp.com/public/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="https://webgamebtl.herokuapp.com/public/assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="https://webgamebtl.herokuapp.com/public/assets/css/goodgames.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="https://webgamebtl.herokuapp.com/public/assets/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="https://webgamebtl.herokuapp.com/public/assets/vendor/jquery/dist/jquery.min.js"></script>
    
    
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
                    <img src="https://webgamebtl.herokuapp.com/public/assets/images/logo.png')}}" alt="GoodGames" width="199">
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
                <img src="assets/images/logo.png" alt="" width="120">
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
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        
        
        
        
        
        <li><span>Giỏ Hàng</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
<div class="container">
    <div class="nk-store nk-store-cart">
        <div class="table-responsive">

            <!-- START: Products in Cart -->
            <table class="table nk-store-cart-products">
                <tbody>
                       <?php
							$content = Cart::content();
						?>
						@foreach($content as $v_content)
                        <tr>
                            <td class="nk-product-cart-thumb">
                                <a href="{{URL::to('/chi-tiet-san-pham/'.$v_content->Game_id)}}" class="nk-image-box-1 nk-post-image">
                                    <img src="{{('https://webgamebtl.herokuapp.com/public/uploadimage/'.$v_content->options->image)}}" alt="However, I have reason" width="115">
                                </a>
                            </td>
                            <td class="nk-product-cart-title">
                                <h5 class="h6">Sản Phẩm:</h5>
                                <div class="nk-gap-1"></div>

                                <h2 class="nk-post-title h4">
                                    <a href="{{URL::to('/chi-tiet-san-pham/'.$v_content->Game_id)}}">{{$v_content->name}}</a>
                                </h2>
                            </td>
                            <td class="nk-product-cart-price">
                                <h5 class="h6">Giá:</h5>
                                <div class="nk-gap-1"></div>

                                <strong>{{number_format($v_content->price).' '.'VNĐ'}}</strong>
                            </td>
                            <td class="nk-product-cart-quantity">
                                <h5 class="h6">Số Lượng:</h5>
                                <div class="nk-gap-1"></div>
                                <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                	{{ csrf_field() }}
                                <input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}" size="2" >
									<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
									<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                                </form>
                            </td>
                            <td class="nk-product-cart-total">
                                <h5 class="h6">Đơn Giá:</h5>
                                <div class="nk-gap-1"></div>

                                <?php
										$subtotal = $v_content->price * $v_content->qty;
										echo number_format($subtotal).' '.'VNĐ';
									?>
                            </td>
                            <td class="nk-product-cart-remove"><a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><span class="ion-android-close"></span></a></td>
                        </tr>
                    	@endforeach
                        
                    
                </tbody>
            </table>
            <!-- END: Products in Cart -->

        </div>
        <div class="nk-gap-1"></div>
        <!-- <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" href="#">Update Cart</a> -->

        <div class="clearfix"></div>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">

              

            </div>
            <div class="col-md-6">
                <!-- START: Cart Totals -->
                <h3 class="nk-title h4">Tổng Đơn Hàng</h3>
                <table class="nk-table nk-table-sm">
                    <tbody>
                        <tr class="nk-store-cart-totals-subtotal">
                            <td>
                                Giá Đơn Hàng
                            </td>
                            <td>
                               {{Cart::subtotal().' '.'VNĐ'}}
                            </td>
                        </tr>
                        <tr class="nk-store-cart-totals-shipping">
                            <td>
                                Tổng Tiền
                            </td>
                            <td>
                               {{Cart::subtotal().' '.'VNĐ'}}
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
                <!-- END: Cart Totals -->
            </div>
        </div>
       <?php
			$user_id = Session::get('user_id');
			$ship_id = Session::get('ship_id');
									
			
			if ($user_id==NULL) {
		?>
        <div class="nk-gap-2"></div>
        <a class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-right" href="{{URL::to('/login-checkout')}}">Mua Game</a>
        <div class="clearfix"></div>
        <?php
			}else if($user_id!=NULL && $ship_id == NULL){
		?>
		<div class="nk-gap-2"></div>
        <a class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-right" href="{{URL::to('/checkout')}}">Mua Game</a>
        <div class="clearfix"></div>
        <?php
			}else if($user_id!=NULL && $ship_id != NULL){
		?>
        <div class="nk-gap-2"></div>
        <a class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-right" href="{{URL::to('/payment')}}">Mua Game</a>
        <div class="clearfix"></div>
        <?php
            }
        ?>
    </div>
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
                                         <img src="https://webgamebtl.herokuapp.com/public/uploadimage/{{$newgame->Game_image}}" height="350" width="200" alt="" />
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
        
    </div>
</footer>
<!-- END: Footer -->

        
    </div>

    

    
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="https://webgamebtl.herokuapp.com/public/assets/images/bg-top.png" alt="">
    <img class="nk-page-background-bottom" src="https://webgamebtl.herokuapp.com/public/assets/images/bg-bottom.png" alt="">
<!-- END: Page Background -->
    

    
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Search</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
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
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/moment/min/moment.min.js"></script>
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="https://webgamebtl.herokuapp.com/public/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="https://webgamebtl.herokuapp.com/public/assets/plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="https://webgamebtl.herokuapp.com/public/assets/js/goodgames.min.js"></script>
<script src="https://webgamebtl.herokuapp.com/public/assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->



    
</body>
</html>
