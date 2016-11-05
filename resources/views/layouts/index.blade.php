<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Journal</title>
    <!-- Main CSS-->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- FullCalendar CSS-->
    <link href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.css') }}" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    @yield('content')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Moment -->
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<!-- Fullcalendar -->
<script src="{{ asset('bower_components/fullcalendar/dist/fullcalendar.js') }}"></script>
<!-- Lang -->
<script src="{{ asset('bower_components/fullcalendar/dist/locale/ru.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>
</body>
</html>