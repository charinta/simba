@extends('layouts.app')

@section('auth')

    @if (\Request::is('dashboard')) 
        @include('layouts.navbars.auth.nav-guest')
            @yield('content')
    
    @elseif (\Request::is('login')) 
        @include('layouts.navbars.auth.nav-guest-login')
            @yield('content')
    
    @elseif (\Request::is('register')) 
        @include('layouts.navbars.auth.nav-guest-login')
            @yield('content')
            
    @elseif (\Request::is('dashboard-admin')) 
        @include('layouts.navbars.auth.nav-admin')
             @yield('content')

    @elseif (\Request::is('dashboard-mhs')) 
        @include('layouts.navbars.auth.nav-mhs')
             @yield('content')
                 
                
    @endif

        @include('components.fixed-plugin')


    

@endsection