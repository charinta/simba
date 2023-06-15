<div class="container">
    <nav class="navbar position top-0 z-index-3 my-3 {{ (Request::is('static-sign-up') ? 'w-100 shadow-none navbar-transparent mt-4' : 'blur blur-rounded shadow py-2 start-0 end-0 mx4') }}">
      <div class="container-fluid d-flex align-items-center justify-content-between {{ (Request::is('static-sign-up') ? 'container' : 'container-fluid') }}">
        <a style="color:DodgerBlue;" class="navbar-brand font-weight-bolder ms-lg-0 ms-3 {{ (Request::is('static-sign-up') ? 'text-white' : '') }}" href="{{ url('dashboard-mhs') }}">
          SIMBA
        </a>
        <div class="d-flex">
          @guest
          <a class="btn btn-outline-primary text-primary me-3" href="{{ route('login') }}">Login</a>
          @else
          <div class="dropdown">
            <a class="btn btn-outline-primary text-primary me-3 dropdown-toggle" href="#" role="button" id="navbarDropdown"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-user-circle"></i> {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                  @csrf
                  <a class="btn btn-primary dropdown-item" href="{{ url('/logout') }} ">
          <i class="fa fa-sign-out"></i> Logout
      </a>
    </li>
            </ul>
          </div>
          @endguest
        </div>
      </div>
    </nav>
  </div>