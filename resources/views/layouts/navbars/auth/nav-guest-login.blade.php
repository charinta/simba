<div class="container">
  <nav class="navbar position top-0 z-index-3 my-3 {{ (Request::is('static-sign-up') ? 'w-100 shadow-none navbar-transparent mt-4' : 'blur blur-rounded shadow py-2 start-0 end-0 mx4') }}">
    <div class="container-fluid d-flex align-items-center justify-content-between {{ (Request::is('static-sign-up') ? 'container' : 'container-fluid') }}">
      <a style="color:DodgerBlue;" class="navbar-brand font-weight-bolder ms-lg-0 ms-3 {{ (Request::is('static-sign-up') ? 'text-white' : '') }}" href="{{ url('dashboard') }}">
        SIMBA
      </a>
      <div class="d-flex">
        <a class="btn btn-outline-primary text-primary me-3" href="{{ url('dashboard') }}">Home</a>
      </div>
    </div>
  </nav>
</div>