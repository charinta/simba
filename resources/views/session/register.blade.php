

@extends('layouts.user_type.guest')

@section('content')

<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                            <div class="card card-body">
                                <h1 class="text-center">Register</h1>
                  <!-- <form role="form" method="POST" action="/session"> kayaknya ini masalahnya bim -->
                  <div class="card-body">
              <form role="form text-left" method="POST" action="/registerUser">
                @csrf
                <label class="fs-6">Name</label>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Full Name" name="name" id="name" aria-label="Name" aria-describedby="name" value="{{ old('name') }}">
                  @error('name')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <label class="fs-6">Email</label>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="email@mhs.unsoed.ac.id" name="email" id="email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}">
                  @error('email')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <label class="fs-6">Password</label>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" name="password" id="password" aria-label="Password" aria-describedby="password-addon">
                  @error('password')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
          
                <div class="text-center">
                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign up</button>
                </div >
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="login" class="text-info text-gradient font-weight-bold">Sign in</a></p>
                  </p>
                </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
            </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
