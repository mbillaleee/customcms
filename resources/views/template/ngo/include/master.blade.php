<!doctype html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
@include('template.ngo.include.head')

<body>

<!-- Header Start --> 
@include('template.ngo.include.header')
<!-- Header Close -->
<!-- Slider Start -->
@yield('content')

<!-- footer Start -->
@include('template.ngo.include.footer')

@stack('js')


  </body>
  </html>
   