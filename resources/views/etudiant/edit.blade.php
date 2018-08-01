@extends('layout.layout_principal')

@section('content')

@include('../includes/_file_ariane')
<div class="row">

	<!-- ___    FORMULAIRE AJOUT OU MODIFIER UN FORMULAIRE   ___-->
	<div class="col-md-5 col-md-offset-3 col-md-12">
	    @include('etudiant._form')

	</div> 
	<!-- ___    FIN FORMULAIRE AJOUT OU MODIFIER UN ETUDIANT  ___-->
</div>
@endsection