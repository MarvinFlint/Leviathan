<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- jQuery -->
        <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- Scripts -->
        <script src="/js/app.js"></script>
    </head>
    <body>
        <nav class="nav">
            <div class="logo-wrapper">
                <img src="/images/logo.png" alt="logo">
            </div>
            <div class="navigation-wrapper">
                <ul>
                    <a href="/"><li>Home</li></a>
                    <a href="/calculator"><li>Calculator</li></a>
                    <a href="/guide"><li>Guide</li></a>
                </ul>
            </div>
        </nav>

        @yield('header')
        @yield('content')
        
        <footer class="footer">
            <div class="footer-nav">
                <ul>
        
                </ul>
            </div>
        </footer>
    </body>
</html>
