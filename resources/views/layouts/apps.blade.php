<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <title>@yield('title')</title>

    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div class="wrapper">
        {{-- nav sidebar --}}
        @include('partial.sidebar')
        <div class="main">
            {{-- nav --}}
            @include('partial.nav')
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3">@yield('judul')</h1>

                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
