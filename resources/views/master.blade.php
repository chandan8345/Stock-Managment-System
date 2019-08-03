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
    
    @yield('mainsection')

    @include('component.js')

</body>

</html>