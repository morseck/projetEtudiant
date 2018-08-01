<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="{{asset('etudiant.petit.76x76.png')}}">
    <link rel="icon" type="image/png" href="{{asset('etudiant.petit.64x64.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Etudiant - login </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('dash/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('dash/assets/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('dash/assets/css/demo.css')}}" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
    <!-- Font Awesome -->

    <!-- sweet alert -->
    <link rel="stylesheet" type="text/css" href="{{asset('sweetalert2/dist/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sweetalert2/dist/animation.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url({{asset('img/bg4.jpg')}}); background-repeat: no-repeat;">
    <div id="app">

        @yield('content')
    
    </div>

    <!-- Scripts -->
   <!--   Core JS Files   -->
<script src="{{asset('dash/assets/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>

<script src="{{asset('dash/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dash/assets/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{asset('dash/assets/js/chartist.min.js')}}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{asset('dash/assets/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{asset('dash/assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('dash/assets/js/bootstrap-notify.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('dash/assets/js/material-dashboard.js?v=1.2.0')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('dash/assets/js/demo.js')}}"></script>

<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

<!-- sweet laert JS -->
<script src="{{asset('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('sweetalert2/dist/sweetalert2.min.js')}}"></script>

<!-- notification changement de langue-->
@if(session()->has('languechangee'))
<script type="text/javascript">
   swal({
     position: 'top',
    type: 'success',
    title:'{{trans("file.languechangee")}}',
    showConfirmButton: false,
    timer: 1500,
    animation: true,
    imageUrl: '{{asset("img/drapeau/".Lang::locale().".png")}}',
    imageWidth: 100,
    imageHeight: 60,
    customClass: 'animated fadeIn'
})
</script>
@endif
</body>
</html>
