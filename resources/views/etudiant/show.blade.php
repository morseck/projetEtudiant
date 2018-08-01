@extends('layout.layout_principal')

@section('content')

@include('../includes/_file_ariane')
<div class="row">
	
	<div class="col-md-5 col-md-offset-1">
	    <div class="card card-profile">
	        <div class="card-avatar">
	            <a href="{{url('etudiants/show/'.$etudiant->id)}}">
	                <img class="img" src="{{asset('img/default.jpg')}}">
	            </a>
	        </div>
	        <div class="content">
	            <h6 class="category text-gray">{{trans('file.etudiant')}}</h6>
	            <h4 class="card-title"><strong>{{ucfirst(trans('prenom'))}} : </strong>{{ucfirst(strtolower($etudiant->prenom))}}</h4>
	            <h4 class="card-title"><strong>{{ucfirst(trans('nom'))}} : </strong>{{strtoupper($etudiant->nom)}}</h4>
	         
	            <a href="/etudiants/delete/{{$etudiant->id}}" onclick="return confirm('{{ucfirst($avertissement)}}')" class="btn btn-primary btn-round btn  btn-xs" rel="tooltip" title="" data-original-title="{{trans('file.supprimer').' '.ucfirst(strtolower($etudiant->prenom)).' '.strtoupper($etudiant->nom)}}">
		            <i class="material-icons">delete</i>
	            </a>
	        </div>
	    </div>
	</div>

	<!-- ___    FORMULAIRE AJOUT OU MODIFIER UN FORMULAIRE   ___-->
	<div class="col-md-5 col-md-12">
	    @include('etudiant._form')

	</div> 
	<!-- ___    FIN FORMULAIRE AJOUT OU MODIFIER UN ETUDIANT  ___-->
</div>
@endsection