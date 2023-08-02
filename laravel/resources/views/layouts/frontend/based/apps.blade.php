<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Talk Scholarship</title>

        @include('layouts.frontend.sections.css')
    </head>
    
    <body id="top">

        <main>

            @include('layouts.frontend.sections.navbar')
            
            @yield('content')


        </main>

        @include('layouts.frontend.sections.js')

    </body>
</html>