<!DOCTYPE html>
<html lang="en">
@include('template.ecommerce.include.header')
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


        @include('template.ecommerce.include.navigation')






        @yield('content')




        @include('template.ecommerce.include.footer')
  </body>
</html>