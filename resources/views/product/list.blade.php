@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div class="container">
   <br>
   <h3>{{$title}}</h3> 
</div>
<div class="shop-page-title category-page-title page-title ">
 
   <div class="page-title-inner flex-row  medium-flex-wrap container">
      
      <div class="flex-col flex-grow medium-text-center">
       
        
         <div class="category-filtering category-filter-row ">
            <a href="#" data-open="#shop-sidebar" data-pos="left" class="filter-button uppercase plain">
            <i class="icon-menu"></i>
            <strong>LOẠI SẢN PHẨM</strong>
            </a>
            <div class="inline-block">
            </div>
         </div>
      </div>
      <!-- .flex-left -->
    
      <!-- .flex-right -->
   </div>
   <!-- flex-row -->
</div>
<main id="main" class="">
   <div class="row category-page-row">
      <div class="col large-12">
         <div class="shop-container">
            <div class="woocommerce-notices-wrapper"></div>
            <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 has-shadow row-box-shadow-1 row-box-shadow-2-hover">
               @foreach ($list as $item)
                  @include('layouts.product.item',['pro' => $item])
               @endforeach
               <!-- col -->
            </div>
            {{$list->links()}}
            <!-- row -->
         </div>
         <!-- shop container -->
      </div>
      <!-- col-fit  -->
      <div id="shop-sidebar" class="mfp-hide">
         <div class="sidebar-inner">
            <aside id="woocommerce_product_categories-14" class="widget woocommerce widget_product_categories" 
            >
               <span class="widget-title shop-sidebar" style="background-color: #4ca996">LOẠI SẢN PHẨM</span>
               <div class="is-divider small"></div>
               <select name="select" class="select-option">
                  <option value="">Chọn danh mục </option>
                  @foreach ($categoryhome as $cate)
                     <option  value="{{route('allListProCate',['cate'=>$cate->slug])}}">
                        {{languageName($cate->name)}}
                     </option>
                  </a>
                  @endforeach
               </select>
               <script>
                  $(document).ready(function() {
                  $('.select-option').change(function() {
                     console.log(123);
                     var selectedOption = $(this).val();
                     if (selectedOption) {
                     window.location.href = selectedOption;
                  }
                  });
                  });
               </script>
            </aside>
         </div>
         <!-- .sidebar-inner -->
      </div>
      <!-- large-3 -->
   </div>
</main>
@endsection