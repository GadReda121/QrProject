<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>
        @yield('title')
    </title>
    <!-- Link -->
    @include('partials.styles')
</head>

<body>
    <!-- Parent -->
    @yield('content')

    <!-- Script -->
    @include('partials/scripts')
</body>

</html>
