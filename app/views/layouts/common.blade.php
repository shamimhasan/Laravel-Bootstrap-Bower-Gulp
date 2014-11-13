<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $PAGETITLE }}</title>

        <!-- Bootstrap -->
        <link href="{{ URL::to('/') }}/assets/css/main.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="{{ URL::to('/') }}/assets/js/html5shiv.min.js"></script>
          <script src="{{ URL::to('/') }}/assets/js/respond.min.js"></script>
        <![endif]-->
        @yield('styles')
        @yield('scripts')
    </head>
    <body>
        @yield('content')

        <script src="{{ URL::to('/') }}/assets/js/jquery.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/vendor.min.js"></script>
    </body>
</html>