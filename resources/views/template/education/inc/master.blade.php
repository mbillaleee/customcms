
    @include('template.education.inc.header', ['title' => $title ?? ''])
    
    <body>
        <!-- [if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif] -->
        
        <!--Header Area Start-->
        @include('template.education.inc.navigation')
        <!--End of Header Area-->
       

        @yield('content')
        
        @include('template.education.inc.footer')
		
    </body>

<!-- Mirrored from htmldemo.net/techedu/techedu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2022 11:31:55 GMT -->
</html>