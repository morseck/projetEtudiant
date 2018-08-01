<!-- _____________________________    FORMULAIRE ETUDIANT   ________________________________________-->
		   
                <div class="card card-nav-tabs">
                    <div class="card-header text-center" data-background-color="green" >
                        <h4 class="title"> <i class="material-icons">person_add</i> </h4>
                        <p class="category">{{trans('file.ajoutModifier')}}</p>
                    </div>

                    <div class="card-content">
                        <div class="tab-content">
                            <div class="card-content">
                            @if(isset($etudiant))
                                {!! Form::model($etudiant, ['route' => ['updateEtudiant',$etudiant->id],'methode' => 'put']) !!}
                             @else

                                {!! Form::open(['action' => 'EtudiantController@add', 'method' => 'POST']) !!}
                             @endif
                                {{ csrf_field() }}
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">{{trans('file.nom')}}  <i class="color">*</i></label>
                                            <input type="text" class="form-control" name="nom" value="@if(!isset($etudiant)) {{ old('nom') }} @else {{$etudiant->nom}} @endif" >
                                        </div>
                                        @if ($errors->has('nom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nom') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">{{trans('file.prenom')}}  <i class="color">*</i></label>
                                            <input type="text" class="form-control" name="prenom" value="@if(!isset($etudiant)) {{ old('prenom') }} @else {{$etudiant->prenom}} @endif" >
                                        </div>
                                        @if ($errors->has('prenom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prenom') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            <div class="clearfix text-center">

                            <button type="submit" class="btn btn-success text-center">
                                @if(!isset($etudiant)) 

                                    {{trans('file.enregistrer')}}
                                
                                @else
                                    
                                    {{trans('file.miseajour')}}
                                
                                @endif
                            </button>
                                
                            </div>
                        {!! Form::close() !!}
                        <br><br>
                        <p>{{trans('file.champObligatoire1')}} (<i class="color"> * </i>) {{trans('file.champObligatoire2')}}.</p>
                    </div>
                        </div>
                    </div>
                </div>
		<!-- _____________________________    FIN FORMULAIRE ETUDIANT  _______________________________________-->