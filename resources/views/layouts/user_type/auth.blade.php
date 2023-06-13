@extends('layouts.app')

@section('auth')


    @if(\Request::is('static-sign-up')) 
        @include('layouts.navbars.guest.nav')
        @yield('content')
    
    @elseif (\Request::is('static-sign-in')) 
        @include('layouts.navbars.guest.nav')
            @yield('content')
    
    @elseif (\Request::is('dashboard')) 
        @include('layouts.navbars.auth.nav-guest')
            @yield('content')
    
    @elseif (\Request::is('login')) 
        @include('layouts.navbars.auth.nav-guest-login')
            @yield('content')
    
    @elseif (\Request::is('register')) 
        @include('layouts.navbars.auth.nav-guest-login')
            @yield('content')
            
    @else
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg {{ (Request::is('rtl') ? 'overflow-hidden' : '') }}">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                </div>
            </main>
        @endif

        @include('components.fixed-plugin')


    

@endsection