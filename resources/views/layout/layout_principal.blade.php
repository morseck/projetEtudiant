<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('etudiant.petit.76x76.png')}}">
    <link rel="icon" type="image/png" href="{{asset('etudiant.petit.64x64.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{trans('file.etudiant')}} - {{$titre}}  </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('dash/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Css bootstrap filtre -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
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


<!-- 
    <link rel="stylesheet" href="{{asset('dash/assets/font/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dash/assets/font/icon.css')}}"> -->


<!-- css dans la vue table -->
<!-- css dans la vue table -->
    @yield('css_table')
     <!-- Couleur rouge dans Dashbord -->
     <style type="text/css">
         .color{
            color: red;
         }

         .help-block strong{
            color: red;
         }
     </style>

 <!-- /Couleur rouge dans Dashbord -->






 <!--DEBUT File d'ariane -->
 <style type="text/css">
    .breadcrumb{
        box-shadow: 1px 10px 20px 1px #ccc;
        margin-bottom: 40px;
        margin-top: 30px;
        border: 2px solid #DFDFDF;
    }
    .breadcrumb > li + li:before {
   color: #CCCCCC;
   content: "-> ";
   padding: 0 5px;
}
 </style>
<!-- FIN File d'ariane -->
</head>

<body>
    <div class="wrapper">
        <!-- modal user -->
        @include('../includes/_user')
        
        <!-- side bar -->
        @include('../includes/_sidebar')
        <!-- /side bar -->
        <div class="main-panel" style="background: #EEEEEE;">
           <!-- menu -->
           @include('../includes/_menu')
           <!-- /menu -->
            <div class="content">
                <div class="container-fluid">

                    @yield('content')
                </div>
            </div>
             <!-- footer -->
        @include('../includes/_footer')
    <!-- / footer -->
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('dash/assets/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>

<!-- javascript dans la vue table -->
@yield('js_table')

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






<script type="text/javascript">

    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

<!-- definition de message flash pour inscription etudiant -->
@if(session()->has('message'))
<script type="text/javascript">
    swal("{{session()->get('message')}}", "Etudiant(e) bien enregistre(e)","success")
</script>
@endif

<!-- definition de message flash pour ajout de tyoe infrastructure-->
@if(session()->has('message_type_infrastructure'))
<script type="text/javascript">
    swal("{{session()->get('message_type_infrastructure')}}", "Type Infrastructure bien enregistré","success")
</script>
@endif


<!-- message ajouter etudiant-->
@if(session()->has('messageenregistrementok'))
<script type="text/javascript">
   swal({
    title:'{{trans("file.etudiant")}}',
    html:'<h4>{{session()->get("messageenregistrementok")}}</h4>'+
         '<h6>{{trans("file.messageenregistrementok")}}</h6>',
    imageUrl: '{{asset("img/etudiant.gif")}}',
    imageWidth: 116,
    imageHeight: 168,
    animation: false,
    customClass: 'animated zoomIn'
})
</script>
@endif


<!-- message ajouter etudiant-->
@if(session()->has('messagemiseaok'))
<script type="text/javascript">
   swal({
    type: 'success',
    title:'{{trans("file.etudiant")}}',
    html:'<h4>{{session()->get("messagemiseaok")}}</h4>'+
         '<h6>{{trans("file.messagemiseaok")}}</h6>'
    })
</script>
@endif



<!-- notification changement de langue-->
@if(session()->has('languechangee'))
<script type="text/javascript">
   swal({
    position: 'top-end',
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


<!-- message etudiant supprimer-->
@if(session()->has('messagesupprimessionok'))
<script type="text/javascript">
   swal({
    type: 'success',
    title:'{{trans("file.etudiant")}}',
    html:'<h4>{{session()->get("messagesupprimessionok")}}</h4>'
    })
</script>
@endif


<!-- pour tuto alert suppreseeion -->
<!-- <script type="text/javascript">

    $(document).ready(function(){
       readProducts();

       $(document).on('click', '#delete_product',function(e) {
           
           var productId = $(this).data('id');
           SwalDelete(productId);
           e.preventDefault();

       });
    });



    function SwalDelete(productId) {
        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',

          onfirm:function() {
              return new Promis(function() {
                 $.ajax({
                    url:'etudiants/delete/'+productId,
                    type:'GET',
                    data:'delete='+productId,
                    dataType:'json'
                 })
                 .done(function(response) {
                     swal('Deleted!','Your file has been deleted.','success');
                     readProducts();
                 })
                 .fail(function() {
                     swalWithBootstrapButtons('Cancelled','Your imaginary file is safe :)','error');
                 });
              });
          },
          allowOutsideClick:false});
    }
    function readProducts() {
        $('#load-products').load('/');
    }
</script> -->

  



</html>
