<!DOCTYPE HTML>
<html>
<x-head />

<body class="single">
    
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <x-header />

        <!-- Menu -->
        <x-menu />

        <!-- Main -->
        <div id="main">
            
            <!-- Post -->
            <x-singlepost :post="$post" />
            <!-- Comments -->
            <x-singlecom />

        </div>

        <!-- Footer -->
        <x-footer />

    </div>

    <!-- Scripts -->
    <x-script />

</body>

</html>