<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <a href="" class="position-relative">
            <i class="bi bi-cart2" style="font-size: 20px; color:black;"></i>
            @if($cartItems>0)
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{$cartItems}}
              </span>
            @endif
        </a>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              المزيد
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">الطلبات</a></li>
              <li><a class="dropdown-item" href="#">الإعدادات</a></li>
              <li><a class="dropdown-item" href="{{url('/logout')}}">تسجيل الخروج</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>