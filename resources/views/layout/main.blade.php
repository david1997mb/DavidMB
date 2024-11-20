<!doctype html>
<html lang="en">
    <head>
        <title>
            @yield('tittle')
        </title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="{{asset('css/bootstrap.min.css')}}"
            rel="stylesheet"
        />
        <link
            href="{{asset('icons-1.11.3/font/bootstrap-icons.min.css')}}"
            rel="stylesheet"
        />
        
    </head>

    <body>
        <header>
            @yield('nav')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @yield('foot')
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script src="{{asset('js/index.js')}}"></script>
        <script
            src="{{asset('js/bootstrap.min.js')}}"
        ></script>
    </body>
</html>
