<div class="container">
<<<<<<< HEAD
  <nav class="navbar position top-0 z-index-3 my-3 {{ (Request::is('static-sign-up') ? 'w-100 shadow-none navbar-transparent mt-4' : 'blur blur-rounded shadow py-2 start-0 end-0 mx4') }}">
    <div class="container-fluid d-flex align-items-center justify-content-between {{ (Request::is('static-sign-up') ? 'container' : 'container-fluid') }}">
      <a style="color:DodgerBlue;" class="navbar-brand font-weight-bolder ms-lg-0 ms-3 {{ (Request::is('static-sign-up') ? 'text-white' : '') }}" href="{{ url('dashboard') }}">
        SIMBA
      </a>
      <div class="d-flex">
        <a class="btn btn-outline-primary text-primary me-3" href="{{ url('/login') }}">Login</a>
        <a class="btn btn-primary" href="{{ url('register') }}">Register</a>
      </div>
    </div>
  </nav>
</div>
=======
    <nav
        class="navbar position top-0 z-index-3 my-3 {{ Request::is('static-sign-up') ? 'w-100 shadow-none navbar-transparent mt-4' : 'blur blur-rounded shadow py-2 start-0 end-0 mx4' }}">
        <div
            class="container-fluid d-flex align-items-center justify-content-between {{ Request::is('static-sign-up') ? 'container' : 'container-fluid' }}">
            <a style="color:DodgerBlue;"
                class="navbar-brand font-weight-bolder ms-lg-0 ms-3 {{ Request::is('static-sign-up') ? 'text-white' : '' }}"
                href="{{ url('dashboard') }}">
                SIMBA
            </a>
            <div class="d-flex">
                <a class="btn btn-outline-primary text-primary me-3" href="{{ url('static-sign-in') }}">Login</a>
                <a class="btn btn-primary" href="{{ url('static-sign-up') }}">Register</a>
            </div>
        </div>
    </nav>
</div>
>>>>>>> 12644096137bdb4ce69ae7a793f2381c0ac5ac63
