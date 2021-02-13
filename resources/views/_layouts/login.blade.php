<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{url ('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Bootstrap Icon CSS -->
    <link href="{{url ('assets/bootstrap/css/bootstrap-icons.css')}}" rel="stylesheet">

    <!-- Website CSS -->
    <link href="{{url ('assets/css/login.css')}}" rel="stylesheet">

    <title>Karsa - login</title>
  </head>
  <body class="main">

    @yield('banner')

    <div class="container">
        @yield('content')
    </div>

    @yield('footer')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{url ('assets/bootstrap/js/bootstrap.min.js')}}"></script>


  </body>
</html>
