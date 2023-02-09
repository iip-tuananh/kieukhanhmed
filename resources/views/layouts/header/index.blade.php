<header id="header" class="header has-sticky sticky-jump">
   <div class="header-wrapper">
      <div id="top-bar" class="header-top hide-for-sticky nav-dark">
         <div class="flex-row container">
            <div class="flex-col hide-for-medium flex-left">
               <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                  <li class="header-contact-wrapper">
                     <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
                        <li class="">
                           <a href="mailto:{{$setting->email}}" class="tooltip" title="{{$setting->email}}">
                           <i class="icon-envelop" style="font-size:12px;"></i>			       <span>
                           {{$setting->email}}			       </span>
                           </a>
                        </li>
                    @if($setting->phone1 != '')
                        <li class="">
                           <a href="tel:{{$setting->phone1}}" class="tooltip" title="{{$setting->phone1}}">
                           <i class="icon-phone" style="font-size:12px;"></i><span>{{$setting->phone1}}</span>
                           </a>
                        </li>
                     @endif
                     @if($setting->phone2 != '')
                     <li class="">
                        <a href="tel:{{$setting->phone2}}" class="tooltip" title="{{$setting->phone2}}">
                        <i class="icon-phone" style="font-size:12px;"></i><span>{{$setting->phone2}}</span>
                        </a>
                     </li>
                  @endif
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- flex-col left -->
            <div class="flex-col hide-for-medium flex-center">
               <ul class="nav nav-center nav-small  nav-divided">
               </ul>
            </div>
            <!-- center -->
            <div class="flex-col hide-for-medium flex-right">
               <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                  <li class="html custom html_topbar_right">Kết nối với chúng tôi</li>
                  <li class="html header-social-icons ml-0">
                     <div class="social-icons follow-icons "><a href="{{$setting->facebook}}" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon primary button circle facebook tooltip" title="Follow on Facebook"><i class="icon-facebook"></i></a></div>
                  </li>
     
               </ul>
            </div>
            <!-- .flex-col right -->
            <div class="flex-col show-for-medium flex-grow">
               <ul class="nav nav-center nav-small mobile-nav  nav-divided">
               </ul>
            </div>
         </div>
         <!-- .flex-row -->
      </div>
      <!-- #header-top -->
      <div id="masthead" class="header-main ">
         <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
            <!-- Logo -->
            <div id="logo" class="flex-col logo">
               <!-- Header logo -->
               <a href="{{route('home')}}" title="{{$setting->company}}" rel="home">
               <img width="203" height="81" src="{{$setting->logo}}" class="header_logo header-logo" alt="{{$setting->company}}"/><img width="203" height="81" src="{{$setting->logo}}" class="header-logo-dark" alt="{{$setting->company}}"/></a>
            </div>
            <!-- Mobile Left Elements -->
            <div class="flex-col show-for-medium flex-left">
               <ul class="mobile-nav nav nav-left ">
                  <li class="nav-icon has-icon">
                     <div class="header-button">		<a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="dark" class="icon button circle is-outline is-small" aria-controls="main-menu" aria-expanded="false">
                        <i class="icon-menu"></i>
                        </a>
                     </div>
                  </li>
                
               </ul>
            </div>
            <!-- Left Elements -->
            <div class="flex-col hide-for-medium flex-left
               flex-grow">
               <ul class="header-nav header-nav-main nav nav-left  nav-divided nav-size-large nav-uppercase">
               </ul>
            </div>
            <!-- Right Elements -->
            <div class="flex-col hide-for-medium flex-right">
               <ul class="header-nav header-nav-main nav nav-right  nav-divided nav-size-large nav-uppercase">
                  <li id="menu-item-341" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-74 current_page_item active  menu-item-341"><a href="{{route('home')}}" class="nav-top-link">TRANG CHỦ</a></li>
                  <li id="menu-item-343" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-343"><a href="{{route('aboutUs')}}" class="nav-top-link">GIỚI THIỆU</a></li>
                  <li id="menu-item-1703" class="menu-item menu-item-type-post_type_archive menu-item-object-product  menu-item-1703"><a href="{{route('allProduct')}}" class="nav-top-link">SẢN PHẨM</a>
                     <ul class="menu-ct">
                        @foreach ($categoryhome as $cate)
                           <li>
                              <a href="{{route('allListProCate',['cate'=>$cate->slug])}}">
                              {{languageName($cate->name)}}
                              </a>
                           </li>
                        @endforeach
                     </ul>
                  </li>
                  <li id="menu-item-1926" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-1926"><a href="{{route('listService')}}" class="nav-top-link">DỊCH VỤ</a></li>
                  @foreach ($blogCate as $blog)
                     <li id="menu-item-535" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-535"><a href="{{route('listCateBlog',['slug'=>$blog->slug])}}" class="nav-top-link" style="text-transform: uppercase">{{languageName($blog->name)}}</a></li>
                  @endforeach
              
                  <li class="html header-button-1">
                     <div class="header-button">
                        <a href="tel:{{$setting->phone1}}" class="button plain is-outline" style="border-radius:99px;">
                        <span>LIÊN HỆ</span>
                        </a>
                     </div>
                  </li>
                  <li class="header-divider"></li>
               </ul>
            </div>
            <!-- Mobile Right Elements -->
            <div class="flex-col show-for-medium flex-right">
               <ul class="mobile-nav nav nav-right ">
               </ul>
            </div>
         </div>
         <!-- .header-inner -->
         <!-- Header divider -->
         <div class="container">
            <div class="top-divider full-width"></div>
         </div>
      </div>
      <!-- .header-main -->
      <div class="header-bg-container fill">
         <div class="header-bg-image fill"></div>
         <div class="header-bg-color fill"></div>
      </div>
      <!-- .header-bg-container -->   
   </div>
   <!-- header-wrapper-->
</header>