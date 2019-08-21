<!DOCTYPE html>
<html>

@include('component.header')

<body class="theme-blue">
    <!-- Page Loader -->
    @include('component.loader')
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    @include('component.searchbar')
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    @include('component.navbar')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @include('component.leftsidebar')
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        @include('component.rightsidebar')
        <!-- #END# Right Sidebar -->
    </section>
    <section class="content">
        <div class="container-fluid">
                <div class="body">
                <ol class="breadcrumb breadcrumb align-right">
                                <li><a href="javascript:void(0);"><i class="material-icons">home</i> @yield('path1')</a></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> @yield('path2')</a></li>
                            </ol>
                </div>
        </div>
        @yield('mainsection')
</section>
    @include('component.js')


</body>

</html>