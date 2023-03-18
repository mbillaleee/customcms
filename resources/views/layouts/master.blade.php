@include('partials._header', ['title' => $title ?? ''])
<!-- create edit update delete success message -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<body>

    @include('partials._navigation')

    <!-- Workspace -->
    <main class="workspace @hasSection('sidebar') workspace_with-sidebar @endif {{ $workspaceClasses ?? '' }}">

        @yield('workspace')
        @yield('content')

        @if(!isset($footer) or $footer)
            @include('partials._footer')
        @endif

    </main>

    @hasSection('sidebar')

        <!-- Sidebar -->
        <aside class="sidebar">

            <!-- Toggler - Mobile -->
            <button class="sidebar-toggler la la-ellipsis-v" data-toggle="sidebar"></button>

            @yield('sidebar')

        </aside>

    @endif

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="{{ asset('build/js/vendor.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.js"></script>

    @yield('scripts')
    @stack('js');

    <script src="{{ asset('build/js/script.js') }}"></script>



</body>

</html>
