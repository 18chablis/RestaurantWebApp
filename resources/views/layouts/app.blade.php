<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant</title>
    <link rel="stylesheet" href="/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    {{-- <style>
        table, td, th{
            border-collapse: collapse;
        }
    </style> --}}
</head>
<body class="clearfix">
    @include('inc.navbar')
    @include('inc.message')
    @yield('content')
    @include('inc.footer')
    <script type="text/javascript">

    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
