<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <!-- Include your CSS stylesheets -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <!-- Your navigation bar or header content -->
        <nav>
            <!-- Navigation content -->
        </nav>

        <!-- Main content area -->
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Include your JavaScript files -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/chat.js') }}"></script> <!-- Include your chat.js script -->

    <!-- Additional scripts or libraries -->
</body>

</html>
