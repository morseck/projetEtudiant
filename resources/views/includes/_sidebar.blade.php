<div class="sidebar" data-color="purple"  data-image="{{asset('images/sidebar-1.jpg')}}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{url('/')}}">
                <img src="{{asset('img/etudiant.02_transparent.png')}}" style="width: 100%;">
            </a>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{url('/')}}">
                    <i class="material-icons">home</i>
                    <p>{{trans('file.accueil')}}</p>
                </a>
            </li>
            <li>
                <a href="#exampleModal" data-toggle="modal">
                    <i class="material-icons">person</i>
                    <p>{{trans('file.profil')}}</p>
                </a>
            </li>
        </ul>
    </div>
</div>