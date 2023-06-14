@extends('layouts.user_type.auth')

@section('content')
    <div class="container-fluid">
        <div class="page-header min-height-100 border-radius-xl mt-4" style="background-position-y: 50%;"></div>
        <div class="card card-body blur shadow-blur mx-auto mt-n6 col-12">
            <h3 class="mb-1 text-center">
                {{ __('Biodata Diri') }}
            </h3>
            <div class="container-fluid py-4">
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('mahasiswa.store') }}" method="POST" role="form text-left">
                        @csrf
                        @if ($errors->any())
                            <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                <span class="alert-text text-white">
                                    {{ $errors->first() }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="m-3 alert alert-success alert-dismissible fade show" id="alert-success"
                                role="alert">
                                <span class="alert-text text-white">
                                    {{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group table-responsive">
                                    <table align="center" cellpadding="8" style="border-collapse: collapse; width: 100%;">
                                        <tr>
                                            <td rowspan="8">
                                                <img src="../assets/img/bruce-mars.jpg" alt="..."
                                                    class="w-100 border-radius-lg shadow-sm" style="max-width: 300px;"
                                                    align="center">
                                            </td>
                                            <td>Nama Lengkap</td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="Nama Lengkap"
                                                    id="user-nama" name="nama">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>NIM</td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="NIM" id="user-nim"
                                                    name="nim">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <input class="form-control" type="email" placeholder="Email"
                                                    id="user-email" name="email">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Foto</td>
                                            <td>
                                                <input class="form-control" type="file" accept="image/*" id="user-photo"
                                                    name="photo" onchange="previewImage(event)">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>
                                                <input class="form-control" type="date" placeholder=""
                                                    id="user-birthdate" name="tanggal_lahir">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td>
                                                <select class="form-select" id="user-religion" name="agama">
                                                    <option value="">Pilih Agama</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angkatan</td>
                                            <td>
                                                <select class="form-select" id="user-generation" name="angkatan">
                                                    <option value="">Pilih Angkatan</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status Keaktifan</td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="Status Keaktifan"
                                                    id="user-activity" name="status_keaktifan" disabled>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit"
                                class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Simpan Data' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
