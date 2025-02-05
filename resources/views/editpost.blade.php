<!DOCTYPE HTML>
<html>

<x-head />

<body class="single">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <x-header />

        <!-- Menu -->
        <section id="menu">

            <!-- Links -->
            <x-menu_auth />

        </section>

        <!-- Main -->
        <div id="main">
            <!-- Post -->
            <x-edit :post="$post"/>
        </div>

        <!-- Footer -->
        <x-footer />

    </div>

    <!-- Scripts -->
    <x-script />

</body>

</html>