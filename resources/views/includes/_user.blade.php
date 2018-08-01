<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: blue;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Infos admin</h5>
      </div>
      <div class="modal-body">
        <div class="card card-profile">
          <div class="card-avatar">
              <a href="#">
                  <img class="img" src="{{asset('img/userDefault.png')}}">
              </a>
          </div>
          <div class="content">
              <h6 class="category text-gray">Admin</h6>
              <h4 class="card-title">{{ucfirst(strtolower(auth()->user()->name))}}</h4>
              <h4 class="card-title">{{strtolower(auth()->user()->email)}}</h4>
              <p class="card-content">
              </p>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer<i class=""></i></button>
      </div>
    </div>
  </div>
</div>