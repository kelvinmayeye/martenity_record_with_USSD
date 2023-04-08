<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Maternity</title>
    @include('layout.inc_top')
</head>

<body>

    @include('layout.topnav')

    <div class="container-fluid">
        <div class="row">
            @include('layout.sidenav')

                @yield('content')

            </main>
        </div>
    </div>

    <script src="{{ asset('assets/dashboard.js') }}"></script>
</body>

</html>
