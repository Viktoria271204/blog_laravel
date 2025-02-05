<!DOCTYPE HTML>
<html>
<x-head />

<body>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <x-header />

        <!-- Menu -->
        @auth
            <x-menu_auth />
        @else
            <x-menu />
        @endauth

        <!-- Main -->
        <div id="main">
            @if (session('success'))
                {{ session('success') }}
            @endif

            <!-- Post -->
            <x-post />

            <!-- Pagination -->
            <x-pagination />

        </div>

        <!-- Sidebar -->
        <x-sidebar />

    </div>

    <!-- Scripts -->
    <x-script />

</body>

</html>