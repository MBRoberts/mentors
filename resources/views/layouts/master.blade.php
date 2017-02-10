<!DOCTYPE html>

<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="description" content="A portal where Codeup students and Mentors can be managed and matched">
        <meta name="author" content="Ben Roberts">

        <title>@yield('title')</title>

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content="Codeup Mentorship Portal" />
        <meta property="og:image" content="" />
        <meta property="og:url" content="" />
        <meta property="og:type" content="web application" />
        <meta property="og:description" content="Portal to help match Codeup students with mentors"/>
        <meta name="twitter:title" content="Codeup Mentorship Portal" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="summary" />

        @yield('links')

    </head>
    <body>
    
        @yield('content')

        <!-- Jquery.js CDN -->
        <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
        
        <!-- Bootstrap.js CDN -->
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        @yield('scripts')

    </body>
</html>