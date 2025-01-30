<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Clone Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0/dist/css/tabler.min.css">
</head>

<body class=" layout-fluid">
    <div class="page">
        <!-- Sidebar -->
        @include('backoffice.layouts.sidebar')
        <div class="page-wrapper">
            @yield('content')
            @include('backoffice.layouts.footer')
        </div>
    </div>
    <!-- Libs JS -->
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0/dist/js/tabler.min.js"></script>
</body>

</html>
