<nav class="navbar navbar-transparent navbar-absolute" style="background: #DFDFDF; box-shadow: 0px 0px 40px 0px #9E9E9E;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> {{ucfirst($titre)}}</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="{{url('/language/en')}}" class="dropdown-toggle">
                        <i class="material-icons"><img width="30px" src="{{asset('img/drapeau/en.png')}}"></i>
                        <p class="hidden-lg hidden-md">English</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{url('/language/fr')}}" class="dropdown-toggle">
                        <i class="material-icons"><img width="30px" src="{{asset('img/drapeau/fr.png')}}"></i>
                        <p class="hidden-lg hidden-md">Français</p>
                    </a>
                </li>
                <li>
                    <a href="#exampleModal" data-toggle="modal" class="dropdown-toggle">
                        <i class="material-icons">person</i>
                        <p class="hidden-lg hidden-md">Profile</p>
                    </a>
                </li>
                @if(auth()->user())

                <li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">power_settings_new</i>
                        <p class="hidden-lg hidden-md">{{trans('file.deconnexion')}}</p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>


             <!--        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">power_settings_new</i>
                        <p class="hidden-lg hidden-md">Déconnexion</p>
                    </a> -->
                </li>
                @endif
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group  is-empty">
                    <input type="text" class="form-control" placeholder="{{trans('file.recherche')}}">
                    <span class="material-input"></span>
                </div>
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                </button>
            </form>
        </div>
    </div>
    </nav>