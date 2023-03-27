@include('partials._header', ['title' => $title ?? ''])
<!-- create edit update delete success message -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 <!-- create edit update delete success message -->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
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
    <!-- create edit update delete success message -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    @yield('scripts')
    @stack('js');

    <script src="{{ asset('build/js/script.js') }}"></script>
    <script>
        CKEDITOR.replace('donation');
        CKEDITOR.replace('values');
        CKEDITOR.replace('mission');
        CKEDITOR.replace('vission');
        CKEDITOR.replace('sponsor_child');

        @if(Session::has('success'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                toastr.success("{{ session('success') }}");
        @endif
        @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
        @endif
        
            $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                form.submit();
                }
            });
        });
</script>


</body>

</html>
