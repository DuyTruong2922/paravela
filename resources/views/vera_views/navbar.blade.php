@include('includes.modal-dang-ky')
<nav class="navbar navbar-expand-lg bg-tranparent text-white py-1">
    <div class="container-fluid">
            <a class="navbar-brand p-0" href="{{route('index')}}">
              <img src="{{asset('imgs/vera-nav.png')}}" alt="logo" class="px-0 py-0 w-md-50 h-md-50">
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
              <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('gioi-thieu')}}">GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tien-ich')}}">TIỆN ÍCH</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('mat-bang')}}">MẶT BẰNG</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('can-ho-mau')}}">CĂN HỘ MẪU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('thu-vien')}}">THƯ VIỆN</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('tin-tuc')}}">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('lien-he')}}">LIÊN HỆ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link round nav-btn"   data-bs-toggle="modal" data-bs-target="#exampleModal">Đăng ký nhận thông tin</a>
                    </li>
                    <li class="nav-item" >
                        <a href="https://www.facebook.com/datxanhmienbac.official"
                        style="text-decoration: none;">
                        <i class="nav-link fa-brands fa-facebook-f pb-2 " style="color: white"></i>
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a href="https://www.youtube.com/channel/UC-Llu_r2x37MqmGpsVXz5Pw/featured" style="text-decoration: none;">
                            <i class="nav-link fa-brands fa-youtube " style="color: white"></i></a>
                    </li>
              </ul>
            </div>
    </div>
</nav>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

>
