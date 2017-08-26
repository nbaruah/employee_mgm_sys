<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <!-- Latest compiled and minified Bootstarp -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        @yield('head')
    </head>
    <body style="background-color: #e6f5ff;">
        @include('includes.header')
        <div class="container-fluid" style="margin-top:60px">
            @yield('content')
        </div>
        @include('includes.footer')
            
        <!-- Latest compiled and minified JQuery -->
        <script src="{{ URL::asset('js/jquery.js') }}"></script>
        <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css') }}">
    </body>
</html>