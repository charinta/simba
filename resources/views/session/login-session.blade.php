@extends('layouts.user_type.auth')

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
                                        <h1 class="text-center">Login</h1>


                                        <form role="form" method="POST" action="/session">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label fs-6">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email" value="admin@softui.com" aria-label="Email"
                                                    aria-describedby="email-addon">
                                                @error('email')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label fs-6">Password</label>
                                                <input type="password" class="form-control" name="password" id="password"
                                                    placeholder="Password" value="secret" aria-label="Password"
                                                    aria-describedby="password-addon">
                                                @error('password')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-4 text-sm mx-auto">
                                                    Don't have an account?
                                                    <a href="/register"
                                                        class="text-info text-gradient font-weight-bold">Sign up</a>
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
