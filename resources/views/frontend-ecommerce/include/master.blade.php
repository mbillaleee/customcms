<!DOCTYPE html>
<html lang="en">
@include('frontend-ecommerce.include.header')
  <body> 
     <!-- wpf loader Two -->
     <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


        @include('frontend-ecommerce.include.navigation')






        @yield('content')




        @include('frontend-ecommerce.include.footer')
  </body>
</html>