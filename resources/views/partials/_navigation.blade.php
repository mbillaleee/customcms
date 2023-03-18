<!-- Top Bar -->
<header class="top-bar">

    <!-- Menu Toggler -->
    <button class="menu-toggler la la-bars" data-toggle="menu"></button>

    <!-- Brand -->
    <span class="brand">Yeti</span>

    <!-- Search -->
    <form class="hidden md:block ltr:ml-10 rtl:mr-10">
        <label class="form-control-addon-within rounded-full">
            <input class="form-control border-none" placeholder="Search">
            <button
                class="text-gray-300 dark:text-gray-700 text-xl leading-none la la-search ltr:mr-4 rtl:ml-4"></button>
        </label>
    </form>

    <!-- Right -->
    <div class="flex items-center ltr:ml-auto rtl:mr-auto">

        <!-- Dark Mode -->
        <label class="switch switch_outlined" data-toggle="tooltip" data-tippy-content="Toggle Dark Mode">
            <input id="darkModeToggler" type="checkbox">
            <span></span>
        </label>

        <!-- Fullscreen -->
        <button id="fullScreenToggler"
            class="hidden lg:inline-block ltr:ml-3 rtl:mr-3 px-2 text-2xl leading-none la la-expand-arrows-alt"
            data-toggle="tooltip" data-tippy-content="Fullscreen"></button>

        <!-- Apps -->
        <div class="dropdown self-stretch">
            <button
                class="flex items-center h-full ltr:ml-4 rtl:mr-4 lg:ltr:ml-1 lg:rtl:mr-1 px-2 text-2xl leading-none la la-box"
                data-toggle="custom-dropdown-menu" data-tippy-arrow="true" data-tippy-placement="bottom">
            </button>
            <div class="custom-dropdown-menu p-5 text-center">
                <div class="flex justify-around">
                    <a href="#no-link" class="p-5 text-normal hover:text-primary">
                        <span class="block la la-cog text-5xl leading-none"></span>
                        <span>Settings</span>
                    </a>
                    <a href="#no-link" class="p-5 text-normal hover:text-primary">
                        <span class="block la la-users text-5xl leading-none"></span>
                        <span>Users</span>
                    </a>
                </div>
                <div class="flex justify-around">
                    <a href="#no-link" class="p-5 text-normal hover:text-primary">
                        <span class="block la la-book text-5xl leading-none"></span>
                        <span>Docs</span>
                    </a>
                    <a href="#no-link" class="p-5 text-normal hover:text-primary">
                        <span class="block la la-dollar text-5xl leading-none"></span>
                        <span>Shop</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Notifications -->
        <div class="dropdown self-stretch">
            <button class="relative flex items-center h-full ltr:ml-1 rtl:mr-1 px-2 text-2xl leading-none la la-bell"
                data-toggle="custom-dropdown-menu" data-tippy-arrow="true" data-tippy-placement="bottom-end">
                <span
                    class="absolute top-0 right-0 rounded-full border border-primary -mt-1 -mr-1 px-2 leading-tight text-xs font-body text-primary">3</span>
            </button>
            <div class="custom-dropdown-menu">
                <div class="flex items-center px-5 py-2">
                    <h5 class="mb-0 uppercase">Notifications</h5>
                    <button class="btn btn_outlined btn_warning uppercase ltr:ml-auto rtl:mr-auto">Clear All</button>
                </div>
                <hr>
                <div class="p-5 hover:bg-primary hover:bg-opacity-5">
                    <a href="#no-link">
                        <h6 class="uppercase">Heading One</h6>
                    </a>
                    <p>Lorem ipsum dolor, sit amet consectetur.</p>
                    <small>Today</small>
                </div>
                <hr>
                <div class="p-5 hover:bg-primary hover:bg-opacity-5">
                    <a href="#no-link">
                        <h6 class="uppercase">Heading Two</h6>
                    </a>
                    <p>Mollitia sequi dolor architecto aut deserunt.</p>
                    <small>Yesterday</small>
                </div>
                <hr>
                <div class="p-5 hover:bg-primary hover:bg-opacity-5">
                    <a href="#no-link">
                        <h6 class="uppercase">Heading Three</h6>
                    </a>
                    <p>Nobis reprehenderit sed quos deserunt</p>
                    <small>Last Week</small>
                </div>
            </div>
        </div>

        <!-- User Menu -->
        <div class="dropdown">
            <button class="flex items-center ltr:ml-4 rtl:mr-4" data-toggle="custom-dropdown-menu"
                data-tippy-arrow="true" data-tippy-placement="bottom-end">
                <span class="avatar">JD</span>
            </button>
            <div class="custom-dropdown-menu w-64">
                <div class="p-5">
                    <h5 class="uppercase">John Doe</h5>
                    <p>Editor</p>
                </div>
                <hr>
                <div class="p-5">
                    <a href="#no-link" class="flex items-center text-normal hover:text-primary">
                        <span class="la la-user-circle text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                        View Profile
                    </a>
                    <a href="#no-link" class="flex items-center text-normal hover:text-primary mt-5">
                        <span class="la la-key text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                        Change Password
                    </a>
                </div>
                <hr>
                <div class="p-5">
                    <a href="{{url('/')}}" class="flex items-center text-normal hover:text-primary">
                        <span class="la la-power-off text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                        <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <span :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </span>
                </form>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Menu Bar -->
<aside class="menu-bar menu-sticky">
    <div class="menu-items">
        <div class="menu-header hidden">
            <a href="{{ url('/') }}" class="flex items-center mx-8 mt-8">
                <span class="avatar w-16 h-16">JD</span>
                <div class="ltr:ml-4 rtl:mr-4 ltr:text-left rtl:text-right">
                    <h5>John Doe</h5>
                    <p class="mt-2">Editor</p>
                </div>
            </a>
            <hr class="mx-8 my-4">
        </div>
        <a href="{{ url('/') }}" class="link" data-toggle="tooltip-menu" data-tippy-content="Dashboard">
            <span class="icon la la-laptop"></span>
            <span class="title">Dashboard</span>
        </a>
        <a href="#no-link" class="link" data-target="[data-menu=ui]" data-toggle="tooltip-menu" data-tippy-content="UI">
            <span class="icon la la-cube"></span>
            <span class="title">UI</span>
        </a>
        <a href="#no-link" class="link" data-target="[data-menu=pages]" data-toggle="tooltip-menu"
            data-tippy-content="Pages">
            <span class="icon la la-file-alt"></span>
            <span class="title">Pages</span>
        </a>
        <a href="#no-link" class="link" data-target="[data-menu=applications]" data-toggle="tooltip-menu"
            data-tippy-content="Applications">
            <span class="icon la la-store"></span>
            <span class="title">Applications</span>
        </a>
        <a href="#no-link" class="link" data-target="[data-menu=menu]" data-toggle="tooltip-menu"
            data-tippy-content="Menu">
            <span class="icon la la-sitemap"></span>
            <span class="title">Menu</span>
        </a>
        <a href="{{ url('/blank') }}" class="link" data-toggle="tooltip-menu" data-tippy-content="Blank Page">
            <span class="icon la la-file"></span>
            <span class="title">Blank Page</span>
        </a>
        <a href="https://yeti.yetithemes.net/docs/laravel" target="_blank" class="link" data-toggle="tooltip-menu"
            data-tippy-content="Docs">
            <span class="icon la la-book-open"></span>
            <span class="title">Docs</span>
        </a>
    </div>

    <!-- Dashboard -->
    <!--
    <div class="menu-detail" data-menu="dashboard">
        <div class="menu-detail-wrapper">
            <a href="index.html">
                <span class="la la-cube"></span>
                Default
            </a>
            <a href="index.html">
                <span class="la la-file-alt"></span>
                Content
            </a>
            <a href="index.html">
                <span class="la la-shopping-bag"></span>
                Ecommerce
            </a>
        </div>
    </div>
    -->

    <!-- UI -->
    <div class="menu-detail" data-menu="ui">
        <div class="menu-detail-wrapper">
            <h6 class="uppercase">Form</h6>
            <a href="{{ url('/ui/form/components') }}">
                <span class="la la-cubes"></span>
                Components
            </a>
            <a href="{{ url('/ui/form/input-groups') }}">
                <span class="la la-stop"></span>
                Input Groups
            </a>
            <a href="{{ url('/ui/form/layout') }}">
                <span class="la la-th-large"></span>
                Layout
            </a>
            <a href="{{ url('/ui/form/validations') }}">
                <span class="la la-check-circle"></span>
                Validations
            </a>
            <a href="{{ url('/ui/form/wizards') }}">
                <span class="la la-hand-pointer"></span>
                Wizards
            </a>
            <hr>
            <h6 class="uppercase">Components</h6>
            <a href="{{ url('/ui/components/alerts') }}">
                <span class="la la-bell"></span>
                Alerts
            </a>
            <a href="{{ url('/ui/components/avatars') }}">
                <span class="la la-user-circle"></span>
                Avatars
            </a>
            <a href="{{ url('/ui/components/badges') }}">
                <span class="la la-certificate"></span>
                Badges
            </a>
            <a href="{{ url('/ui/components/buttons') }}">
                <span class="la la-play"></span>
                Buttons
            </a>
            <a href="{{ url('/ui/components/cards') }}">
                <span class="la la-layer-group"></span>
                Cards
            </a>
            <a href="{{ url('/ui/components/collapse') }}">
                <span class="la la-arrow-circle-right"></span>
                Collapse
            </a>
            <a href="{{ url('/ui/components/colors') }}">
                <span class="la la-palette"></span>
                Colors
            </a>
            <a href="{{ url('/ui/components/dropdowns') }}">
                <span class="la la-arrow-circle-down"></span>
                Dropdowns
            </a>
            <a href="{{ url('/ui/components/modal') }}">
                <span class="la la-times-circle"></span>
                Modal
            </a>
            <a href="{{ url('/ui/components/popovers-tooltips') }}">
                <span class="la la-thumbtack"></span>
                Popovers & Tooltips
            </a>
            <a href="{{ url('/ui/components/tabs') }}">
                <span class="la la-columns"></span>
                Tabs
            </a>
            <a href="{{ url('/ui/components/tables') }}">
                <span class="la la-table"></span>
                Tables
            </a>
            <a href="{{ url('/ui/components/toasts') }}">
                <span class="la la-bell"></span>
                Toasts
            </a>
            <hr>
            <h6 class="uppercase">Extras</h6>
            <a href="{{ url('/ui/extras/carousel') }}">
                <span class="la la-images"></span>
                Carousel
            </a>
            <a href="{{ url('/ui/extras/charts') }}">
                <span class="la la-chart-area"></span>
                Charts
            </a>
            <a href="{{ url('/ui/extras/editors') }}">
                <span class="la la-keyboard"></span>
                Editors
            </a>
            <a href="{{ url('/ui/extras/sortable') }}">
                <span class="la la-sort"></span>
                Sortable
            </a>
        </div>
    </div>

    <!-- Pages -->
    <div class="menu-detail" data-menu="pages">
        <div class="menu-detail-wrapper">
            <hr>

            <h6 class="uppercase">Admin</h6>
            <a href="{{ route('category.index') }}">
                <span class="la la-list"></span>
                Category List
            </a>
            <a href="{{ route('subcategory.index') }}">
                <span class="la la-list"></span>
                Sub Category List
            </a>
            <a href="{{ route('tag.index') }}">
                <span class="la la-list"></span>
                Tag List
            </a>
            <a href="{{ route('blog.index') }}">
                <span class="la la-list"></span>
                Blog List
            </a>
            <a href="{{ route('page.index') }}">
                <span class="la la-list"></span>
                Page List
            </a>
            <a href="{{ route('slider.index') }}">
                <span class="la la-list"></span>
                Slider List
            </a>
            <a href="{{ route('photogallery.index') }}">
                <span class="la la-list"></span>
                Photo Gallery List
            </a>
            <a href="{{ route('videogallery.index') }}">
                <span class="la la-list"></span>
                Vider Gallery List
            </a>
            <a href="{{ route('product.index') }}">
                <span class="la la-list"></span>
                Product List
            </a>
            <a href="{{ route('event.index') }}">
                <span class="la la-list"></span>
                Event List
            </a>
            <a href="{{ route('notice.index') }}">
                <span class="la la-list"></span>
                Notice List
            </a>
            <a href="{{ route('portfolio.index') }}">
                <span class="la la-list"></span>
                Portfolio List
            </a>
            <a href="{{ route('widgets.index') }}">
                <span class="la la-list"></span>
                Widget List
            </a>
            <a href="{{ route('newsletter.index') }}">
                <span class="la la-list"></span>
                Newsletter List
            </a>
            <a href="{{ route('content.index') }}">
                <span class="la la-list"></span>
                Content List
            </a>
            <a href="{{ route('menu.index') }}">
                <span class="la la-list"></span>
                Menu List
            </a>
            <a href="{{ route('volunteer.index') }}">
                <span class="la la-list"></span>
                Volunteer List
            </a>
            <a href="{{ route('message.index') }}">
                <span class="la la-list"></span>
                Message List
            </a>
            <a href="{{ route('template1.index') }}">
                <span class="la la-list"></span>
                Template List
            </a>
            
            <hr>
           
        </div>
    </div>

    <!-- Applications -->
    <div class="menu-detail" data-menu="applications">
        <div class="menu-detail-wrapper">
            <a href="{{ url('applications/media-library') }}">
                <span class="la la-image"></span>
                Media Library
            </a>
            <a href="{{ url('applications/point-of-sale') }}">
                <span class="la la-shopping-bag"></span>
                Point Of Sale
            </a>
            <a href="{{ url('applications/to-do') }}">
                <span class="la la-check-circle"></span>
                To Do
            </a>
            <a href="{{ url('applications/chat') }}">
                <span class="la la-comment"></span>
                Chat
            </a>
        </div>
    </div>

    <!-- Menu -->
    <div class="menu-detail" data-menu="menu">
        <div class="menu-detail-wrapper">
            <a href="#no-link">
                <span class="la la-cube"></span>
                Default
            </a>
            <a href="#no-link">
                <span class="la la-file-alt"></span>
                Content
            </a>
            <a href="#no-link">
                <span class="la la-shopping-bag"></span>
                Ecommerce
            </a>
            <hr>
            <a href="#no-link">
                <span class="la la-layer-group"></span>
                Main Level
            </a>
            <a href="#no-link">
                <span class="la la-arrow-circle-right"></span>
                Grand Parent
            </a>
            <button class="collapse-header active" data-toggle="collapse" data-target="#menuGrandParentOpen">
                <span class="collapse-indicator la la-arrow-circle-down"></span>
                Grand Parent Open
            </button>
            <div id="menuGrandParentOpen" class="collapse open">
                <a href="#no-link">
                    <span class="la la-layer-group"></span>
                    Sub Level
                </a>
                <a href="#no-link">
                    <span class="la la-arrow-circle-right"></span>
                    Parent
                </a>
                <button class="collapse-header active" data-toggle="collapse" data-target="#menuParentOpen">
                    <span class="collapse-indicator la la-arrow-circle-down"></span>
                    Parent Open
                </button>
                <div id="menuParentOpen" class="collapse open">
                    <a href="#no-link">
                        <span class="la la-layer-group"></span>
                        Sub Level
                    </a>
                </div>
            </div>
            <hr>
            <h6 class="uppercase">Menu Types</h6>
            <a href="#no-link" data-toggle="menu-type" data-value="default">
                <span class="la la-hand-point-right"></span>
                Default
            </a>
            <a href="#no-link" data-toggle="menu-type" data-value="hidden">
                <span class="la la-hand-point-left"></span>
                Hidden
            </a>
            <a href="#no-link" data-toggle="menu-type" data-value="icon-only">
                <span class="la la-th-large"></span>
                Icons Only
            </a>
            <a href="#no-link" data-toggle="menu-type" data-value="wide">
                <span class="la la-arrows-alt-h"></span>
                Wide
            </a>
        </div>
    </div>
</aside>

@include('partials._customizer')