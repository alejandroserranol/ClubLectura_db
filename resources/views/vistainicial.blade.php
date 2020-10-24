<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
        <body>
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="jumbotron display-1 text-center">
                    IT WORKS!
                    </div>
                    <div class="alert alert-primary" role="alert">
                    This is a primary alert—check it out!
                    </div>
                </div>
            </div>
        </body>
</html>