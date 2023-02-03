<footer id="footer" class="footer-wrapper">
   <!-- FOOTER 1 -->
   <!-- FOOTER 2 -->
   <div class="footer-widgets footer footer-2 dark">
      <div class="row dark large-columns-2 mb-0">
         <div id="text-15" class="col pb-0 widget widget_text">
            <span class="widget-title">{{$setting->company}}</span>
            <div class="is-divider small"></div>
            <div class="textwidget">
               <p> </p>
               <p><strong>Trụ sở chính: </strong><br/>
               {{$setting->address1}}<br/>
               @if($setting->phone1 != '')
               <strong>Hotline </strong> :{{$setting->phone1}}<br/>
               @endif
               @if($setting->email != '')
                  <strong>Email:</strong>  <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                  @endif
               </p>
            </div>
         </div>
         <div id="text-19" class="col pb-0 widget widget_text">
            <div class="textwidget">
               <p class="ct-ifame">{!!$setting->iframe_map!!}</p>
            </div>
         </div>
      </div>
      <style>
       
      </style>
      <!-- end row -->
   </div>
   <!-- end footer 2 -->
  
   <!-- .absolute-footer -->
   <a href="#top" class="back-to-top button invert plain is-outline hide-for-medium icon circle fixed bottom z-1" id="top-link"><i class="icon-angle-up"></i></a>
</footer>