<!DOCTYPE html><!--[if IE 9 ]> 
   <html lang="vi" class="ie9 loading-site no-js">
      <![endif]--><!--[if IE 8 ]> 
      <html lang="vi" class="ie8 loading-site no-js">
         <![endif]--><!--[if (gte IE 9)|!(IE)]><!-->
         <html lang="vi" class="loading-site no-js">
            <!--<![endif]-->
            <head>
               <meta charset="UTF-8" />
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
               <title>@yield('title')</title>
               <meta name="description" content="">
               <meta name="keywords" content="@yield('title')"/>
               <meta name="robots" content="noodp,index,follow" />
               <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
               <meta name="csrf-token" content="{{ csrf_token() }}" />
               <meta name="description" content="@yield('description')" />
               <link rel="canonical" href="{{url()->current()}}" />
               <meta property="og:locale" content="vi_VN" />
               <meta property="og:type" content="article" />
               <meta property="og:title" content="@yield('title')" />
               <meta property="og:description" content="@yield('description')" />
               <meta property="og:url" content="{{url()->current()}}" />
               <meta property="og:site_name" content="ahometh.vn" />
               <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
               <meta property="og:image" content="@yield('image')" />
               <meta property="og:image:secure_url" content="@yield('image')" />
               <meta property="og:image:width" content="598" />
               <meta property="og:image:height" content="333" />
               <meta property="og:image:alt" content="ahome-noi-that" />
               <meta property="og:image:type" content="image/jpeg" />
               <meta name="twitter:card" content="summary_large_image" />
               <meta name="twitter:title" content="@yield('title')" />
               <meta name="twitter:description" content="@yield('description')" />
               <meta name="twitter:image" content="@yield('image')" />
               <!-- Fav Icon -->
               <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
               <link rel="preconnect" href="https://fonts.googleapis.com">
               <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
               <link href="https://fonts.googleapis.com/css2?family=Gotu&family=Mulish:wght@300;400&display=swap" rel="stylesheet">
               <style type="text/css">
                  img.wp-smiley,
                  img.emoji {
                  display: inline !important;
                  border: none !important;
                  box-shadow: none !important;
                  height: 1em !important;
                  width: 1em !important;
                  margin: 0 .07em !important;
                  vertical-align: -0.1em !important;
                  background: none !important;
                  padding: 0 !important;
                  }
               </style>
               <link rel="stylesheet" id="wp-block-library-css" href="{{asset('frontend/css/style.min.css')}}" type="text/css" media="all"/>
               <link rel="stylesheet" id="wc-block-style-css" href="{{asset('frontend/css/style.css')}}" type="text/css" media="all"/>
               <link rel="stylesheet" id="contact-form-7-css" href="{{asset('frontend/css/styles.css')}}" type="text/css" media="all"/>
               <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
               <style id="woocommerce-inline-inline-css" type="text/css">
                  .woocommerce form .form-row .required { visibility: visible; }
               </style>
               <link rel="stylesheet" id="flatsome-icons-css" href="{{asset('frontend/css/fl-icons.css')}}" type="text/css" media="all"/>
               <link rel="stylesheet" id="bfa-font-awesome-css" href="//cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css?ver=4.7.0" type="text/css" media="all"/>
               <link rel="stylesheet" id="flatsome-main-css" href="{{asset('frontend/css/flatsome.css')}}" type="text/css" media="all"/>
               <link rel="stylesheet" id="flatsome-shop-css" href="{{asset('frontend/css/flatsome-shop.css')}}" type="text/css" media="all"/>
               <link rel="stylesheet" id="flatsome-style-css" href="{{asset('frontend/css/style.css')}}" type="text/css" media="all"/>
               <script type="text/javascript" src="{{asset('frontend/js/jquery.js')}}"></script>
               <script type="text/javascript" src="{{asset('frontend/js/jquery-migrate.min.js')}}"></script>
               <link rel="https://api.w.org/" href="http://duocquangninh.vn/wp-json/"/>
               <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://duocquangninh.vn/xmlrpc.php?rsd"/>
               <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://duocquangninh.vn/wp-includes/wlwmanifest.xml"/>
               <meta name="generator" content="WordPress 5.4.12"/>
               <meta name="generator" content="WooCommerce 4.0.4"/>
               <link rel="canonical" href="http://duocquangninh.vn/"/>
               <link rel="shortlink" href="http://duocquangninh.vn/"/>
               <link rel="alternate" type="application/json+oembed" href="http://duocquangninh.vn/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fduocquangninh.vn%2F"/>
               <link rel="alternate" type="text/xml+oembed" href="http://duocquangninh.vn/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fduocquangninh.vn%2F&amp;format=xml"/>
               <style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style>
                 {{-- <script type="text/javascript">
                  WebFontConfig = {
                    google: { families: [ "Open+Sans:regular,regular:cyrillic,greek-ext,latin-ext","Open+Sans:regular,regular","Open+Sans:regular,regular:vietnamese","Helvetica,Arial,sans-serif", ] }
                  };
                  (function() {
                    var wf = document.createElement('script');
                    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                    wf.type = 'text/javascript';
                    wf.async = 'true';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(wf, s);
                  })(); 
               </script> --}}
               <style>.product-gallery img.lazy-load, .product-small img.lazy-load, .product-small img[data-lazy-srcset]:not(.lazyloaded){ padding-top: 100%;}</style>
               <noscript>
                  <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
               </noscript>
              
               <style id="custom-css" type="text/css">:root {--primary-color: #000000;}/* Site Width */.full-width .ubermenu-nav, .container, .row{max-width: 1170px}.row.row-collapse{max-width: 1140px}.row.row-small{max-width: 1162.5px}.row.row-large{max-width: 1200px}.header-main{height: 81px}#logo img{max-height: 81px}#logo{width:203px;}#logo img{padding:10px 0;}.header-top{min-height: 36px}.transparent .header-main{height: 265px}.transparent #logo img{max-height: 265px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 295px;}.transparent .header-wrapper{background-color: rgba(0,0,0,0.75)!important;}.transparent .top-divider{display: none;}.header.show-on-scroll,.stuck .header-main{height:70px!important}.stuck #logo img{max-height: 70px!important}.header-bg-color, .header-wrapper {background-color: #FFFFFF}.header-bottom {background-color: #f1f1f1}.header-main .nav > li > a{line-height: 16px }@media (max-width: 549px) {.header-main{height: 81px}#logo img{max-height: 81px}}.main-menu-overlay{background-color: #1e73be}.nav-dropdown-has-arrow li.has-dropdown:before{border-bottom-color: #383838;}.nav .nav-dropdown{border-color: #383838 }.nav-dropdown{border-radius:3px}.nav-dropdown{font-size:91%}.nav-dropdown-has-arrow li.has-dropdown:after{border-bottom-color: #161616;}.nav .nav-dropdown{background-color: #161616}.header-top{background-color:#1C3254!important;}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #000000;}/* Color !important */[data-text-color="primary"]{color: #000000!important;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #000000;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #000000}.nav-tabs > li.active > a{border-top-color: #000000}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #000000 }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #000000 }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #000000;}/* Background Color */[data-icon-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.icon-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button{ background-color:#DD3333; }/* Color */.secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary{color: #DD3333}/* Color !important */[data-text-color="secondary"]{color: #DD3333!important;}/* Border */.secondary.is-outline:hover{border-color:#DD3333}.success.is-underline:hover,.success.is-outline:hover,.success{background-color: #1C3254}.success-color, .success.is-link, .success.is-outline{color: #1C3254;}.success-border{border-color: #1C3254!important;}body{font-size: 100%;}@media screen and (max-width: 549px){body{font-size: 100%;}}body{font-family: 'Mulish', sans-serif;
}body{font-weight: 0}body{color: #1C3254}.nav > li > a {font-family: 'Mulish', sans-serif;
;}.nav > li > a {font-weight: 0;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: 'Mulish', sans-serif;
}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 0;}h1,h2,h3,h4,h5,h6,.heading-font{color: #4ca996;}button,.button{text-transform: none;}h3.widget-title,span.widget-title{text-transform: none;}.alt-font{font-family: 'Mulish', sans-serif;
}.header:not(.transparent) .header-nav.nav > li > a {color: #ffffff;}.header:not(.transparent) .header-nav.nav > li > a:hover,.header:not(.transparent) .header-nav.nav > li.active > a,.header:not(.transparent) .header-nav.nav > li.current > a,.header:not(.transparent) .header-nav.nav > li > a.active,.header:not(.transparent) .header-nav.nav > li > a.current{color: #ffffff;}.header-nav.nav-line-bottom > li > a:before,.header-nav.nav-line-grow > li > a:before,.header-nav.nav-line > li > a:before,.header-nav.nav-box > li > a:hover,.header-nav.nav-box > li.active > a,.header-nav.nav-pills > li > a:hover,.header-nav.nav-pills > li.active > a{color:#FFF!important;background-color: #ffffff;}a{color: #1C3254;}a:hover{color: #EF0000;}.tagcloud a:hover{border-color: #EF0000;background-color: #EF0000;}.shop-page-title.featured-title .title-overlay{background-color: rgba(221,51,51,0.3);}@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 300px!important;width: 300px!important;}}.header-main .social-icons,.header-main .cart-icon strong,.header-main .menu-title,.header-main .header-button > .button.is-outline,.header-main .nav > li > a > i:not(.icon-angle-down){color: #ffffff!important;}.header-main .header-button > .button.is-outline,.header-main .cart-icon strong:after,.header-main .cart-icon strong{border-color: #ffffff!important;}.header-main .header-button > .button:not(.is-outline){background-color: #ffffff!important;}.header-main .current-dropdown .cart-icon strong,.header-main .header-button > .button:hover,.header-main .header-button > .button:hover i,.header-main .header-button > .button:hover span{color:#FFF!important;}.header-main .menu-title:hover,.header-main .social-icons a:hover,.header-main .header-button > .button.is-outline:hover,.header-main .nav > li > a:hover > i:not(.icon-angle-down){color: #ffffff!important;}.header-main .current-dropdown .cart-icon strong,.header-main .header-button > .button:hover{background-color: #ffffff!important;}.header-main .current-dropdown .cart-icon strong:after,.header-main .current-dropdown .cart-icon strong,.header-main .header-button > .button:hover{border-color: #ffffff!important;}.footer-1{background-color: #190000}.footer-2{background-color:#4ca996}.absolute-footer, html{background-color: #ffffff}.page-title-small + main .product-container > .row{padding-top:0;}/* Custom CSS */.footer-address span, .footer-address p{display:inline-block;}.footer-address span {margin-right:10px;}.footer-address .iconaddress i{font-size:18px;}.footer-address .iconphone i{font-size:24px;}.flickity-slider .gallery-col .box-text{display:none;}@media screen and (min-width: 850px){.row-large>.flickity-viewport>.flickity-slider>.col, .row-large>.col {padding-bottom: 0px !important;}}.text-left {text-align: left;border: 1px solid #ECEBEB;}.nav-uppercase>li>a {letter-spacing: .02em;text-transform: uppercase;font-weight: bold !important;}.btn {-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0px;font-family: Arial;color: #ffffff !important;font-size: 18px;background: #3498db;padding: 6px 20px 6px 20px;text-decoration: none;border-radius: 40px;}.btn:hover {background: #3cb0fd;background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);background-image: -o-linear-gradient(top, #3cb0fd, #3498db);background-image: linear-gradient(to bottom, #3cb0fd, #3498db);text-decoration: none;}div#button-wrap-inner {padding: 10px 10px 10px 0px;}span.amount {white-space: nowrap;color: #dc0808;font-weight: bold;font-size: 16px ;}.box-text h1, .box-text h2, .box-text h3, .box-text h4, .box-text h5, .box-text h6, .box-text a:not(.button) {line-height: 22px;margin-top: .1em;margin-bottom: .1em;font-size: 14px;}#section_505244779 {padding-top: 10px;padding-bottom: 10px;}.section {padding: 3px 0; }.slider-wrapper+.row:not(.row-collapse), .banner-grid-wrapper+.row:not(.row-collapse), .banner+.row:not(.row-collapse), .section+.row:not(.row-collapse) {margin-top: 10px;}.pricing-table .price {color: #fb3c02;padding: 0.6em 15% 0;font-weight: 300;font-size: 25px;}.pricing-table .items>div {padding: 7.5px 0;border-bottom: 1px solid #ececec;color: #00539a;}div.wishlist-icon{display:none;}.section_du_an.portfolio-box.box-text .portfolio-box-category{display:none;height:0px !important;visibility: hidden;}.portfolio-box-category .show-on-hover{display:none;visibility: hidden;}.portfolio-element-wrapper .nav-line-bottom > li.active > a:before, .nav-line-bottom > li:hover > a:before{background-color: #ffffff;}.portfolio-element-wrapper .nav-box > li > a{color: #000000;}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style>
               <style type="text/css" id="wp-custom-css">
                  /*
                  Bạn có thể thêm CSS ở đây.
                  Nhấp chuột vào biểu tượng trợ giúp phía trên để tìm hiểu thêm.
                  */
                  .box-text h1, .box-text h2, .box-text h3, .box-text h4, .box-text h5, .box-text h6, .box-text a:not(.button) {
                  line-height: 22px;
                  margin-top: .1em;
                  margin-bottom: .1em;
                  font-size: 14px;
                  overflow-y: hidden;
                  height: 40px;
                  }
                  .nav>li>a {
                  font-size: 14px;
                  }
                  .nav>li>a:hover, .nav>li.active>a, .nav>li.current>a, .nav>li>a.active, .nav>li>a.current, .nav-dropdown li.active>a, .nav-column li.active>a, .nav-dropdown>li>a:hover, .nav-column li>a:hover {
                  color: rgba(253, 253, 253, 0.85);
                  }
                  .nav>li>a, .nav-dropdown>li>a, .nav-column>li>a {
                  color: rgba(255, 255, 255, 0.85);
                  transition: all .2s;
                  }
                  .mb-half {
                  margin-bottom: 15px;
                  font-size: 16px;
                  }
                  .nav>li>a>i+span {
                  font-family: inherit !important;
                  }
                  body {
                  font-family: inherit !important;
                  }
                  h1, h2, h3, h4, h5, h6 {
                  font-family: inherit !important;
                  }
                  h3.widget-title {
                  font-size: 18px;
                  font-weight: normal;
                  color: #ffdd02;
                  }
                  .header-main .nav > li > a {
                  line-height: 30px;
                  font-size: 16px!important;
                  }
                  body {
                  font-size: 14px;
                  }
                  .widgets-boxed .widget h3 {
                  background-color: #0a2453;
                  margin-left: -21px;
                  margin-top: -16px;
                  padding: 10px 20px 10px;
                  width: calc(100% + 42px);
                  color: #FFF;
                  }
                  label {
                  color: #d82a01;
                  font-size: 18px !important;
                  font-weight: normal !important;
                  }
                  .one-half,
                  .one-third {
                  position: relative;
                  margin-right: 4%;
                  float: left;
                  margin-bottom: 20px;
                  }
                  .one-half { width: 48%; }
                  .one-third { width: 30.66%; }
                  .last {
                  margin-right: 0 !important;
                  clear: right;
                  }
                  @media only screen and (max-width: 767px) {
                  .one-half, .one-third {
                  width: 100%;
                  margin-right: 0;
                  }
                  }
                  .has-icon-bg .icon .icon-inner {
                  color: #446084;
                  position: absolute;
                  height: 100%;
                  width: 100%;
                  top: 0;
                  border: 5px solid #edab21;
                  border-radius: 100%;
                  transition: all .3s;
                  background: #edab21;
                  margin: 0px;
                  }
                  .mb-half:last-child, .mb:last-child {
                  margin-bottom: 0;
                  border: solid 1px rgba(152, 152, 152, 0.42);
                  padding: 10px;
                  box-shadow: 1px 1px 10px rgba(0,0,0,0.15);
                  }
                  .is-divider {
                  height: 3px;
                  display: block;
                  background-color: rgba(0,0,0,0.1);
                  margin: 1em 0 1em;
                  width: 100%;
                  max-width: 30px;
                  display: none;
                  }
                  h3.widget-title {
                  font-size: 18px;
                  }
                  .button, button, input[type='submit'], input[type='reset'], input[type='button'] {
                  font-weight: normal;
                  }
                  .nav-uppercase>li>a {
                  letter-spacing: .02em;
                  text-transform: none;
                  font-weight: normal !important;
                  }		
               </style>
               <script src="{{asset('frontend/js/script.min.js')}}"></script><script>run('c1a325aa07602ac9-8f3b89dc5ee482c7518621bf-7b3e0f219b35b9ba9f79bbac9685e5a69ade06119981cbd388bd19b6e8', 'js_session1', false);</script>
            </head>
            <body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-74 theme-flatsome woocommerce-no-js full-width header-shadow lightbox nav-dropdown-has-arrow">
               <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
               <div id="wrapper">
               @include('layouts.header.index')
                  @yield('content')
                  <!-- #main -->
               @include('layouts.footer.index')
                  <!-- .footer-wrapper -->
               </div>
               <!-- #wrapper -->
               <!-- Mobile Sidebar -->
               <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
                  <div class="sidebar-menu no-scrollbar ">
                     <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
                        <li class="header-search-form search-form html relative has-icon">
                           
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-74 current_page_item menu-item-341"><a href="{{route('home')}}" class="nav-top-link">TRANG CHỦ</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-343"><a href="{{route('aboutUs')}}" class="nav-top-link">GIỚI THIỆU</a></li>
                        <li class="menu-item menu-item-type-post_type_archive menu-item-object-product menu-item-1703"><a href="{{route('allProduct')}}" class="nav-top-link">SẢN PHẨM</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1926"><a href="{{route('listService')}}" class="nav-top-link">DỊCH VỤ</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-535"><a href="{{route('allListBlog')}}" class="nav-top-link">TIN TỨC</a></li>
                   
                        
                     </ul>
                  </div>
                  <!-- inner -->
               </div>
               <!-- #mobile-menu -->
              
           
               <div class="fb-customerchat" attribution="wordpress" page_id="855816821271567" logged_in_greeting="Xin chào ! Tôi có thể giúp gì cho bạn ?" logged_out_greeting="Xin chào ! Tôi có thể giúp gì cho bạn ?"></div>
               <div id="login-form-popup" class="lightbox-content mfp-hide">
                  <div class="woocommerce-notices-wrapper"></div>
                  <div class="account-container lightbox-inner">
                     <div class="account-login-inner">
                        <h3 class="uppercase">Đăng nhập</h3>
                        <form class="woocommerce-form woocommerce-form-login login" method="post">
                           <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                              <label for="username">Tên tài khoản hoặc địa chỉ email <span class="required">*</span></label>
                              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value=""/>				
                           </p>
                           <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                              <label for="password">Mật khẩu <span class="required">*</span></label>
                              <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password"/>
                           </p>
                           <p class="form-row">
                              <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="3c27c66f9f"/><input type="hidden" name="_wp_http_referer" value="/"/>					<button type="submit" class="woocommerce-Button button" name="login" value="Đăng nhập">Đăng nhập</button>
                              <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                              <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"/> <span>Ghi nhớ mật khẩu</span>
                              </label>
                           </p>
                           <p class="woocommerce-LostPassword lost_password">
                              <a href="http://duocquangninh.vn/lost-password/">Quên mật khẩu?</a>
                           </p>
                        </form>
                     </div>
                     <!-- .login-inner -->
                  </div>
                  <!-- .account-login-container -->
               </div>
               <script type="text/javascript">
                  var c = document.body.className;
                  c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                  document.body.className = c;
               </script>
               <script type="text/javascript">
                  /* <![CDATA[ */
                  var wpcf7 = {"apiSettings":{"root":"http:\/\/duocquangninh.vn\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
                  /* ]]> */
               </script>
               <script type="text/javascript" src="{{asset('frontend/js/scripts.js')}}"></script>
               <script type="text/javascript" src="{{asset('frontend/js/jquery.blockUI.min.js')}}"></script>
               <script type="text/javascript">
                  /* <![CDATA[ */
                  var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Xem gi\u1ecf h\u00e0ng","cart_url":"http:\/\/duocquangninh.vn","is_cart":"","cart_redirect_after_add":"no"};
                  /* ]]> */
               </script>
               <script type="text/javascript" src="{{asset('frontend/js/add-to-cart.min.js')}}"></script>
               <script type="text/javascript" src="{{asset('frontend/js/js.cookie.min.js')}}"></script>
               <script type="text/javascript">
                  /* <![CDATA[ */
                  var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
                  /* ]]> */
               </script>
               <script type="text/javascript" src="{{asset('frontend/js/woocommerce.min.js')}}"></script>
               <script type="text/javascript">
                  /* <![CDATA[ */
                  var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_6436cba7e3748989fffdf126c1fb8b44","fragment_name":"wc_fragments_6436cba7e3748989fffdf126c1fb8b44","request_timeout":"5000"};
                  /* ]]> */
               </script>
               <script type="text/javascript" src="{{asset('frontend/js//cart-fragments.min.js')}}"></script>
               <script type="text/javascript" src="{{asset('frontend/js/flatsome-live-search.js')}}"></script>
               <script type="text/javascript" src="{{asset('frontend/js//hoverIntent.min.js')}}"></script>
               <script type="text/javascript">
                  /* <![CDATA[ */
                  var flatsomeVars = {"ajaxurl":"http:\/\/duocquangninh.vn\/wp-admin\/admin-ajax.php","rtl":"","sticky_height":"70","user":{"can_edit_pages":false}};
                  /* ]]> */
               </script>
               <script type="text/javascript" src="{{asset('frontend/js//flatsome.js')}}"></script>
               <script type="text/javascript" src="{{asset('frontend/js/flatsome-lazy-load.js')}}"></script>
               <script type="text/javascript" src="{{asset('frontend/js/woocommerce.js')}}"></script>
               <script type="text/javascript" src="{{asset('frontend/js/wp-embed.min.js')}}"></script>
               <script type="text/javascript">
                  /* <![CDATA[ */
                  var _zxcvbnSettings = {"src":"http:\/\/duocquangninh.vn\/wp-includes\/js\/zxcvbn.min.js"};
                  /* ]]> */
               </script>
               <script type="text/javascript" src="{{asset('frontend/js/zxcvbn-async.min.js')}}"></script>
               <script type="text/javascript">
                  /* <![CDATA[ */
                  var pwsL10n = {"unknown":"M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh","short":"R\u1ea5t y\u1ebfu","bad":"Y\u1ebfu","good":"Trung b\u00ecnh","strong":"M\u1ea1nh","mismatch":"M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"};
                  /* ]]> */
               </script>
               {{-- <script type="text/javascript" src="./js/password-strength-meter.min.js"></script> --}}
               <script type="text/javascript">
                  /* <![CDATA[ */
                  var wc_password_strength_meter_params = {"min_password_strength":"3","stop_checkout":"","i18n_password_error":"Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.","i18n_password_hint":"G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."};
                  /* ]]> */
               </script>
                   
               {{-- <script type="text/javascript" src="./js/password-strength-meter-new.min.js"></script> --}}
            </body>
         </html>