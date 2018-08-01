@extends('layouts.layout_principal')

<!-- css table filtre -->
@section('css_table')
    <link href='https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>

@endsection
<!-- Latest compiled and minified CSS bootstrap -->

@section('content')

    
    <div class="row">
    
        <!-- ___    FORMULAIRE AJOUT OU MODIFIER UN FORMULAIRE   ___-->
        <div class="col-lg-5 col-md-12">
            @include('etudiant._form')

        </div> 
        <!-- ___    FIN FORMULAIRE AJOUT OU MODIFIER UN ETUDIANT  ___-->



        <!-- ___   DEBUT TABLEAU ETUDIANTS   ___-->
        <div class="col-lg-7 col-md-12">
            @include('etudiant._table')

        </div> 
        <!-- ___   FIN TABLEAU ETUDIANT  ___-->




    </div>
@endsection


<!-- TABLES DE FILTRE DEBUT -->
@section('js_table')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
@endsection
<!-- TABLE DE FILTRE FIN -->