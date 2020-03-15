<!DOCTYPE html>
<html>
<head>
    <!-- bootstrap -->
<link rel="stylesheet" href="{{ asset('assets/user/vendor/bootstrap/bootstrap.min.css') }}">

<!-- font awesome icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

<!-- lazy styling -->
<link rel="stylesheet" href="{{ asset('assets/user/css/lazy.css') }}">
    <title>@yield('judul')</title>
</head>
<body>
    @section('sidebar')
        
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>