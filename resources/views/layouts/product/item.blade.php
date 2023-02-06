
@php
$img = json_decode($pro->images);
@endphp
<div class="product-category col">
      <div class="col-inner">
         <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'slug'=>$pro->slug])}}">
            <div class="box box-category has-hover box-normal ">
               <div class="box-image custom-item">
                  <div class="">
                     <img src="{{$img[0]}}" alt="Dược phẩm" width="300" height="300"/>                                                      
                  </div>
               </div>
               <!-- box-image -->
               <div class="box-text text-center">
                  <div class="box-text-inner">
                     <h5 class="style-h5 ">
                       {{languageName($pro->name)}}                     
                     </h5>
                     <h6 class="style-h6" >
                    Xem thêm
                  </h6>
                  </div>
                  <!-- .box-text-inner -->
               </div>
               <!-- .box-text -->
            </div>
            <!-- .box -->
         </a>
      </div>

   <!-- .col-inner -->
</div>
