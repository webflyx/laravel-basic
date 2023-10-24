<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page.title', config('app.name'))</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">

    @once
        @stack('plugins')
    @endonce
    
</head>

<body>

    <div class="d-flex flex-column justify-content-between min-vh-100">

        @include('includes.alert')

        @include('includes.header')

        <main class="flex-grow-1 py-3">
            
            @yield('content')

        </main>

        @include('includes.footer')

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>

</body>

</html>
