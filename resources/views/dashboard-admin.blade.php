@extends('layouts.user_type.auth')

@section('content')
    <!--====== TITLE ======-->
    <div class="section-title text-center pb-25">
        <h2 class="title">Selamat datang di SIMBA, {{ auth()->user()->name }}!</h2>
    </div>
    </br></br>
    <!--====== TITLE ENDS ======-->

    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-9">
            <div class="pricing-style mt-30">
                <div class="pricing-icon text-center">
                    <img src="assets/img/illustrations/rocket-white.png" alt="">
                </div>
                <div class="pricing-header text-center">
                    <h5 class="sub-title">Data Mahasiswa Tahun 2021</h5>
                </div>
                <div class="pricing-btn rounded-buttons text-center">
                    <a class="main-btn rounded-one" href="tables-admin">GET STARTED</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-9">
            <div class="pricing-style mt-30">
                <div class="pricing-icon text-center">
                    <img src="assets/img/illustrations/rocket-white.png" alt="">
                </div>
                <div class="pricing-header text-center">
                    <h5 class="sub-title">Data Mahasiswa Tahun 2022</h5>
                </div>
                <div class="pricing-btn rounded-buttons text-center">
                    <a class="main-btn rounded-one" href="tables-admin">GET STARTED</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-9">
            <div class="pricing-style mt-30">
                <div class="pricing-icon text-center">
                    <img src="assets/img/illustrations/rocket-white.png" alt="">
                </div>
                <div class="pricing-header text-center">
                    <h5 class="sub-title">Data Mahasiswa Tahun 2023</h5>
                </div>
                <div class="pricing-btn rounded-buttons text-center">
                    <a class="main-btn rounded-one" href="#">GET STARTED</a>
                </div>
            </div>
        </div>
    @endsection

    @push('dashboard-admin')
    @endpush
