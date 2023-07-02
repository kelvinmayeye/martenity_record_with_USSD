<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="">

    @include('partials.login.meta_tags')


    <title>{{ config('app.name', 'Maternity') }}</title>

    @include('partials.login.inc_top')
</head>

<body>
    @include('partials.login.header')
    @yield('content')
    @include('partials.login.footer')

</body>

</html>
