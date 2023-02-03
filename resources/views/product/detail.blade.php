@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link href="{{asset('frontend/css/product_detail.css')}}" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

@endsection
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<!-- Demo styles -->
<style>
  html,
  body {
    position: relative;
    height: 100%;
  }

  body {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
  }

  .swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  body {
    background: #000;
    color: #000;
  }

  .swiper {
    width: 100%;
    height: 300px;
    margin-left: auto;
    margin-right: auto;
  }

  .swiper-slide {
    background-size: cover;
    background-position: center;
  }

  .mySwiper2 {
    height: 80%;
    width: 100%;
  }

  .mySwiper {
    height: 20%;
    box-sizing: border-box;
    padding: 10px 0;
  }

  .mySwiper .swiper-slide {
    width: 25%;
    height: 100%;
    opacity: 0.4;
  }

  .mySwiper .swiper-slide-thumb-active {
    opacity: 1;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>
</head>

<body>
   <main id="main" class="">
      <div class="shop-container">
         <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
         </div>
         <!-- /.container -->
         <div id="product-1727" class="product type-product post-1727 status-publish first instock product_cat-thuc-pham-chuc-nang has-post-thumbnail shipping-taxable product-type-simple">
            <div class="product-container">
               <div class="product-main">
                  <div class="row content-row mb-0">
                     <div class="product-gallery col large-5">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                           <div class="swiper-wrapper">
                            
                              @php
                                  $imgs = json_decode($product->images);
                                
                              @endphp
                              @foreach ($imgs as $img)
                                 <div class="swiper-slide">
                                 <img src="{{$img}}" />
                                 </div>
                              @endforeach
                           </div>
                           <div class="swiper-button-next"></div>
                           <div class="swiper-button-prev"></div>
                         </div>
                         <div thumbsSlider="" class="swiper mySwiper">
                           <div class="swiper-wrapper">
                              @foreach ($imgs as $img)
                                 <div class="swiper-slide">
                                 <img src="{{$img}}" />
                                 </div>
                              @endforeach
                    
                           </div>
                         </div>
                     </div>
                     <div class="product-info summary col-fit col entry-summary product-summary text-left">
                        <div class="is-sticky-column">
                           <div class="is-sticky-column__inner">
                              <div class="product-stacked-info">
                                 <h1 class="product-title entry-title">
                                    {{languageName($product->name)}}
                                 </h1>
                                 <div class="is-divider small"></div>
                                 <div class="price-wrapper">
                                    <p class="price product-page-price ">
                                    </p>
                                 </div>
                                 <div class="product-short-description">
                                    {!!languageName($product->description)!!}
                                 </div>
                                 <div class="product_meta">
                                    <span class="posted_in">Danh mục: <a href="{{route('allListProCate',['cate'=>$product->cate->slug])}}" rel="tag">{{languageName($product->cate->name)}}</a></span>
                                 </div>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- .summary -->
               </div>
               <!-- .row -->
            </div>
            <!-- .product-main -->
            <div class="product-footer">
               <div class="container">
                  <div class="woocommerce-tabs container tabbed-content">
                     <ul class="product-tabs  nav small-nav-collapse tabs nav nav-uppercase nav-line nav-left">
                     </ul>
                     <div class="tab-panels">
                        <div class="panel entry-content active" id="tab-description">
                           {!!languageName($product->content)!!}
                        </div>
                     </div>
                     <!-- .tab-panels -->
                  </div>
                  <!-- .tabbed-content -->
                  @if(count($productlq)>1)
                  <div class="related related-products-wrapper product-section">
                     <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                        Sản phẩm tương tự    
                     </h3>
                     <div class="row large-columns-4 medium-columns- small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push custom-slide" data-flickity-options="{&#34;imagesLoaded&#34;: true, &#34;groupCells&#34;: &#34;100%&#34;, &#34;dragThreshold&#34; : 5, &#34;cellAlign&#34;: &#34;left&#34;,&#34;wrapAround&#34;: true,&#34;prevNextButtons&#34;: true,&#34;percentPosition&#34;: true,&#34;pageDots&#34;: false, &#34;rightToLeft&#34;: false, &#34;autoPlay&#34; : 4000}">
                        @foreach ($productlq as $item)
                           @if($item->id != $product->id)
                              @include('layouts.product.item',['pro'=>$item])
                           @endif
                        @endforeach
                        <!-- col -->
                     </div>
                  </div>
                  @endif
               </div>
               <!-- .container -->
            </div>
            <!-- .product-footer -->
         </div>
         <!-- .product-container -->
      </div>
   </main>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
</script>
</body>

</html>
@endsection