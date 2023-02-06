@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div id="content" role="main" class="content-area">
      <div class="slider-wrapper relative " id="slider-197494817" style="background-color:rgb(0, 0, 0);">
         <div class="slider slider-nav-circle slider-nav-normal slider-nav-light slider-style-container slider-show-nav" data-flickity-options="{
            &#34;cellAlign&#34;: &#34;center&#34;,
            &#34;imagesLoaded&#34;: true,
            &#34;lazyLoad&#34;: 1,
            &#34;freeScroll&#34;: false,
            &#34;wrapAround&#34;: true,
            &#34;autoPlay&#34;: 4000,
            &#34;pauseAutoPlayOnHover&#34; : false,
            &#34;prevNextButtons&#34;: true,
            &#34;contain&#34; : true,
            &#34;adaptiveHeight&#34; : true,
            &#34;dragThreshold&#34; : 5,
            &#34;percentPosition&#34;: true,
            &#34;pageDots&#34;: true,
            &#34;rightToLeft&#34;: false,
            &#34;draggable&#34;: true,
            &#34;selectedAttraction&#34;: 0.1,
            &#34;parallax&#34; : 0,
            &#34;friction&#34;: 0.6        }">
            @foreach ($banners as $img)
               <div  style="background-image:url({{url($img->image)}});  object-fit: cover;background-repeat: no-repeat;background-size:contain;" class="banner has-hover home-banner" id="banner-1518171214" >
                  <div class="banner-inner fill home-banner">
                     <div class="banner-bg fill">
                        <div class="bg fill bg-fill "></div>
                     </div>
                     <!-- bg-layers -->
                     <div class="banner-layers container">
                        <div class="fill banner-link"></div>
                        <div id="text-box-117204958" class="text-box banner-layer x5 md-x5 lg-x5 y35 md-y35 lg-y35 res-text">
                           <div data-animate="flipInY">
                              <div class="text dark">
                                 <div class="text-inner text-center">
                                 </div>
                              </div>
                              <!-- text-box-inner -->
                           </div>
                           <style scope="scope">
                              #text-box-117204958 {
                              width: 83%;
                              }
                              #text-box-117204958 .text {
                              font-size: 100%;
                              }
                           </style>
                        </div>
                        <!-- text-box -->
                     </div>
                     <!-- .banner-layers -->
                  </div>
                  <!-- .banner-inner -->
                  <style scope="scope">
                     #banner-1518171214 {
                     padding-top: 30%;
                     }
                     .home-banner {
                        height: 700px;
                        background-size: cover;
                        object-fit: cover;
                     }
                    
                  </style>
               </div>
            @endforeach
            <!-- .banner -->
          
            <!-- .banner -->
         </div>
         <div class="loading-spin dark large centered"></div>
         <style scope="scope">
            #slider-197494817 .flickity-slider > *{ max-width: 1139px!important;}
         </style>
      </div>
      <!-- .ux-slider-wrapper -->
      <section class="section dark hide-for-medium" id="section_333663925">
         <div class="bg section-bg fill bg-fill  bg-loaded">
            <div class="section-bg-overlay absolute fill"></div>
            <div class="is-border" style="border-color:rgb(235, 235, 235);border-width:0px 0px 0px 0px;">
            </div>
         </div>
         <!-- .section-bg -->
         <div class="section-content relative">
            <div class="row row-large align-middle align-center" id="row-191841372">
               <div class="col medium-8 small-12 large-8" data-animate="fadeInLeft">
                  <div class="col-inner text-center dark" style="padding:10px 0px 0px 0px;">
                     <h2 style="line-height: 30px;
                        ">SÁNG TẠO SẢN PHẨM XANH – CHĂM SÓC SỨC KHỎE CON NGƯỜI</h2>
                  </div>
               </div>
               <div class="col medium-4 small-12 large-4" data-animate="fadeInRight">
                  <div class="col-inner text-center" style="background-color:rgba(255, 255, 255, 0);padding:10px 0px 0px 0px;">
                     <a href="{{route('aboutUs')}}" target="_self" class="button secondary">
                     <span>SỨ MỆNH CÔNG TY</span>
                     </a>
                  </div>
               </div>
               <style scope="scope">
               </style>
            </div>
         </div>
         <!-- .section-content -->
         <style scope="scope">
            #section_333663925 {
            padding-top: 0px;
            padding-bottom: 0px;
            min-height: 20px;
            background-color: #4ca996;
            }
            #section_333663925 .section-bg-overlay {
            background-color: rgba(0, 0, 0, 0);
            }
         </style>
      </section>
      <section class="section section_du_an" id="section_809640129">
         <div class="bg section-bg fill bg-fill  bg-loaded">
            <div class="section-bg-overlay absolute fill"></div>
         </div>
         <!-- .section-bg -->
         <div class="section-content relative">
            <div class="container section-title-container">
               <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:144%;"><i class="icon-menu"></i>SẢN PHẨM CHÍNH</span><b></b></h3>
            </div>
            <!-- .section-title -->
            <div class="row large-columns-4 medium-columns- small-columns-2 row-small has-shadow row-box-shadow-2 row-box-shadow-5-hover slider row-slider slider-nav-reveal slider-nav-push custom-slide" data-flickity-options="{&#34;imagesLoaded&#34;: true, &#34;groupCells&#34;: &#34;100%&#34;, &#34;dragThreshold&#34; : 5, &#34;cellAlign&#34;: &#34;left&#34;,&#34;wrapAround&#34;: true,&#34;prevNextButtons&#34;: true,&#34;percentPosition&#34;: true,&#34;pageDots&#34;: false, &#34;rightToLeft&#34;: false, &#34;autoPlay&#34; : 4000}">
               @foreach ($sanphams as $pro)
                  @include('layouts.product.item',['product'=>$pro])
               @endforeach
               <!-- .col -->
               <!-- .col -->
            </div>
         </div>
         <!-- .section-content -->
         <style scope="scope">
            #section_809640129 {
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #1C3254;
            }
            #section_809640129 .section-bg-overlay {
            background-color: rgb(244, 239, 239);
            }
         </style>
      </section>
      <section class="section" id="section_1167794065">
         <div class="bg section-bg fill bg-fill  bg-loaded">
         </div>
         <!-- .section-bg -->
         <div class="section-content relative">
            <div class="row" id="row-1700456300">
               <div class="col small-12 large-12">
                  <div class="col-inner text-center">
                     <div class="container section-title-container">
                        <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:150%;color:rgb(0, 48, 107);">Cam kết</span><b></b></h3>
                     </div>
                     <!-- .section-title -->
                  </div>
               </div>
               <div class="col medium-3 small-12 large-3">
                  <div class="col-inner">
                     <div class="icon-box featured-box icon-box-center text-center" style="margin:px px px px;">
                        <div class="icon-box-img has-icon-bg" style="width: 92px">
                           <div class="icon">
                              <div class="icon-inner" style="border-width:1px;">
                                 <img width="55" height="70" src="{{asset('frontend/imgs/icon1-white.png')}}" class="attachment-medium size-medium" alt=""/>					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <h5 class="uppercase">sản phẩm đa dạng</h5>
                           <p>Khách hàng mua sản phẩm từ công ty sẽ được thụ hưởng những chính sách bán hàng mới nhất và ưu đãi nhất.</p>
                        </div>
                     </div>
                     <!-- .icon-box -->
                  </div>
               </div>
               <div class="col medium-3 small-12 large-3">
                  <div class="col-inner">
                     <div class="icon-box featured-box icon-box-center text-center" style="margin:px px px px;">
                        <div class="icon-box-img has-icon-bg" style="width: 92px">
                           <div class="icon">
                              <div class="icon-inner" style="border-width:1px;">
                                 <img width="48" height="60" src="{{asset('frontend/imgs/icon2-white.png')}}" class="attachment-medium size-medium" alt=""/>					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset" style="text-align:center">
                           <h5 class="uppercase">TIÊU CHUẨN EU_GMP</h5>
                           <p>Nhà máy sản xuất thuốc từ dược liệu đạt tiêu chuẩn GMP-WHO </p>
                        </div>
                     </div>
                     <!-- .icon-box -->
                  </div>
               </div>
               <div class="col medium-3 small-12 large-3">
                  <div class="col-inner">
                     <div class="icon-box featured-box icon-box-center text-center" style="margin:px px px px;">
                        <div class="icon-box-img has-icon-bg" style="width: 92px">
                           <div class="icon">
                              <div class="icon-inner" style="border-width:1px;">
                                 <img width="70" height="63" src="{{asset('frontend/imgs/icon3-white.png')}}" class="attachment-medium size-medium" alt=""/>					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <h5 class="uppercase">CHỨNG NHẬN GLP VÀ GSP</h5>
                           <p>GLP (Thực hành tốt kiểm tra chất lượng thuốc) và GSP (Thực hành tốt bảo quản thuốc)</p>
                        </div>
                     </div>
                     <!-- .icon-box -->
                  </div>
               </div>
               <div class="col medium-3 small-12 large-3">
                  <div class="col-inner">
                     <div class="icon-box featured-box icon-box-center text-center" style="margin:px px px px;">
                        <div class="icon-box-img has-icon-bg" style="width: 92px">
                           <div class="icon">
                              <div class="icon-inner" style="border-width:1px;">
                                 <img width="50" height="64" src="{{asset('frontend/imgs/icon5-white.png')}}" class="attachment-medium size-medium" alt=""/>					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <h5 class="uppercase">THƯƠNG HIỆU UY TÍN</h5>
                           <p>Nhiều lần đạt giải thưởng “huy chương vàng vì sức khỏe cộng đồng” khẳng định giá trị sản phẩm chất lượng của công ty</p>
                        </div>
                     </div>
                     <!-- .icon-box -->
                  </div>
               </div>
            </div>
         </div>
         <!-- .section-content -->
         <style scope="scope">
            #section_1167794065 {
            padding-top: 30px;
            padding-bottom: 30px;
            }
         </style>
      </section>
      <section class="section" id="section_1606149949">
         <div class="bg section-bg fill bg-fill  bg-loaded">
         </div>
         <!-- .section-bg -->
         <div class="section-content relative">
            <div class="row" id="row-111332396">
               <div class="col medium-6 small-12 large-6">
                  <div class="col-inner">
                     <h2 style="color: #0a2453; font-size: 30px;">GIỚI THIỆU</h2>
                     {!!$aboutUs->description!!}
                  </div>
               </div>
               <div class="col medium-6 small-12 large-6">
                  <div class="col-inner">
                     <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1033600251">
                        <a class="image-lightbox lightbox-gallery" href="{{route('aboutUs')}}" title="">
                           <div class="img-inner dark">
                              <img width="800" height="514" src="{{$aboutUs->image}}" class="attachment-large size-large" alt="" srcset="{{$aboutUs->image}}" sizes="(max-width: 800px) 100vw, 800px"/>						
                           </div>
                        </a>
                        <style scope="scope">
                           #image_1033600251 {
                           width: 100%;
                           }
                        </style>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- .section-content -->
         <style scope="scope">
            #section_1606149949 {
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: rgb(233, 238, 242);
            }
         </style>
      </section>
      <div class="gap-element" style="display:block; height:auto; padding-top:10px" class="clearfix"></div>
      <section class="section" id="section_1683829052">
         <div class="bg section-bg fill bg-fill  bg-loaded">
            <div class="section-bg-overlay absolute fill"></div>
         </div>
         <!-- .section-bg -->
         <div class="section-content relative">
            <div class="row row-small" id="row-1512505255">
               <div class="col small-12 large-12">
                  <div class="col-inner">
                     <div class="container section-title-container">
                        <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:150%;color:rgb(0, 48, 107);">TIN TỨC SỰ KIỆN</span><b></b></h3>
                     </div>
                     <!-- .section-title -->
                     <div class="row large-columns-3 medium-columns-1 small-columns-1 slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options="{&#34;imagesLoaded&#34;: true, &#34;groupCells&#34;: &#34;100%&#34;, &#34;dragThreshold&#34; : 5, &#34;cellAlign&#34;: &#34;left&#34;,&#34;wrapAround&#34;: true,&#34;prevNextButtons&#34;: true,&#34;percentPosition&#34;: true,&#34;pageDots&#34;: true, &#34;rightToLeft&#34;: false, &#34;autoPlay&#34; : 4000}">
                     @foreach ($blog as $item)
                        <div class="col post-item">
                           <div class="col-inner">
                              <a href="{{route('detailBlog',['slug'=>$item->slug])}}" class="plain">
                                 <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                       <div class="image-cover" style="padding-top:56.25%;">
                                          <img width="533" height="400" src="{{$item->image}}" data-src="{{$item->image}}" sizes="(max-width: 533px) 100vw, 533px"/>  							  							  						
                                       </div>
                                    </div>
                                    <!-- .box-image -->
                                    <div class="box-text text-center">
                                       <div class="box-text-inner blog-post-inner">
                                          <h5 class="post-title is-large uppercase">{{languageName($item->title)}}</h5>
                                          
                                          <div class="is-divider"></div>
                                          <br>
                                          <p class="from_the_blog_excerpt limit-text-3">{{languageName($item->description)}}</p>
                                       </div>
                                       <!-- .box-text-inner -->
                                    </div>
                                    <!-- .box-text -->
                                 </div>
                                 <!-- .box -->
                              </a>
                              <!-- .link -->
                           </div>
                           <!-- .col-inner -->
                        </div>
                     @endforeach
                        <!-- .col -->
                      
                     </div>
                  </div>
               </div>
               <style scope="scope">
               </style>
            </div>
         </div>
         <!-- .section-content -->
         <style scope="scope">
            #section_1683829052 {
            padding-top: 0px;
            padding-bottom: 0px;
            background-color: rgb(233, 238, 242);
            }
            #section_1683829052 .section-bg-overlay {
            background-color: rgba(255,255,255,.5);
            }
         </style>
      </section>
      <section class="section" id="section_662257082">
         <div class="bg section-bg fill bg-fill  bg-loaded">
         </div>
         <!-- .section-bg -->
         <div class="section-content relative">
            <div class="row align-center" id="row-2070226963">
               <div class=" medium-10 small-12 large-10">
                  <div class="container section-title-container">
                     <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:150%;color:rgb(0, 48, 107);">Đối tác công ty</span><b></b></h3>
                  </div>
               </div>
               <style scope="scope">
               </style>
            </div>
            <div class="row row-collapse align-center" id="row-717999527">
               <div class="col small-12 large-12">
                  <div class="col-inner">
                     <div class="row large-columns-6 medium-columns-3 small-columns-2 row-xsmall slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options="{&#34;imagesLoaded&#34;: true, &#34;groupCells&#34;: &#34;100%&#34;, &#34;dragThreshold&#34; : 5, &#34;cellAlign&#34;: &#34;left&#34;,&#34;wrapAround&#34;: true,&#34;prevNextButtons&#34;: true,&#34;percentPosition&#34;: true,&#34;pageDots&#34;: false, &#34;rightToLeft&#34;: false, &#34;autoPlay&#34; : 3000}">
                     @foreach ($partner as $item)
                        <div class="gallery-col col">
                           <div class="col-inner">
                              <a class="image-lightbox lightbox-gallery" href="javascript:;" title="">
                                 <div class="box has-hover gallery-box box-default">
                                    <div class="box-image" style="padding-left: 20px">
                                       <img width="170" height="90" src="{{$item->image}}" class="attachment-medium size-medium" alt="" ids="1355,1356,1357,1358,1359,1360" style="default" type="slider" col_spacing="xsmall" columns="6" auto_slide="3000"/>                                                              
                                    </div>
                                    <!-- .image -->
                                    <div class="box-text text-left">
                                       <p></p>
                                    </div>
                                    <!-- .text -->
                                 </div>
                                 <!-- .box -->
                              </a>
                           </div>
                           <!-- .col-inner -->
                        </div>
                     @endforeach
                     </div>
                  </div>
               </div>
               <style scope="scope">
               </style>
            </div>
         </div>
         <!-- .section-content -->
         <style scope="scope">
            #section_662257082 {
            padding-top: 0px;
            padding-bottom: 0px;
            background-color: rgb(255, 255, 255);
            }
         </style>
      </section>
      <div class="gap-element" style="display:block; height:auto; padding-top:10px" class="clearfix"></div>
   </div>
</main>
@endsection