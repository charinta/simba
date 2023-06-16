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
                    <form action="{{ route('mahasiswa.update', ['id' => $mahasiswa->id]) }}" method="POST"
                        role="form text-left" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
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
                                    <table align="center" cellpadding="9" style="border-collapse: collapse; width: 100%;">
                                        <tr>
                                            <td rowspan="9">
                                                <img src="../assets/img/bruce-mars.jpg" alt="..."
                                                    class="w-100 border-radius-lg shadow-sm" style="max-width: 300px;"
                                                    align="center">
                                            </td>
                                            <td>Nama Lengkap</td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="Nama Lengkap"
                                                    id="user-name" name="name" value="{{ $mahasiswa->name }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>NIM</td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="NIM" id="user-nim"
                                                    name="nim" value="{{ $mahasiswa->nim }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <input class="form-control" type="email" placeholder="Email"
                                                    id="user-email" name="email" value="{{ $mahasiswa->email }}">
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
                                                    id="user-birthdate" name="tanggal_lahir"
                                                    value="{{ $mahasiswa->tanggal_lahir }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td>
                                                <select class="form-select" id="user-religion" name="agama">
                                                    <option value="">Pilih Agama</option>
                                                    <option value="Islam"
                                                        {{ $mahasiswa->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                    <option value="Kristen"
                                                        {{ $mahasiswa->agama == 'Kristen' ? 'selected' : '' }}>Kristen
                                                    </option>
                                                    <option value="Katolik"
                                                        {{ $mahasiswa->agama == 'Katolik' ? 'selected' : '' }}>Katolik
                                                    </option>
                                                    <option value="Hindu"
                                                        {{ $mahasiswa->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                    <option value="Buddha"
                                                        {{ $mahasiswa->agama == 'Buddha' ? 'selected' : '' }}>Buddha
                                                    </option>
                                                    <option value="Konghucu"
                                                        {{ $mahasiswa->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angkatan</td>
                                            <td>
                                                <select class="form-select" id="user-generation" name="angkatan">
                                                    <option value="">Pilih Angkatan</option>
                                                    <option value="2023"
                                                        {{ $mahasiswa->angkatan == '2023' ? 'selected' : '' }}>2023
                                                    </option>
                                                    <option value="2022"
                                                        {{ $mahasiswa->angkatan == '2022' ? 'selected' : '' }}>2022
                                                    </option>
                                                    <option value="2021"
                                                        {{ $mahasiswa->angkatan == '2021' ? 'selected' : '' }}>2021
                                                    </option>
                                                    <option value="2020"
                                                        {{ $mahasiswa->angkatan == '2020' ? 'selected' : '' }}>2020
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status Keaktifan</td>
                                            <td>
                                                <select class="form-select" id="user-activity" name="status_keaktifan">
                                                    <option value="">Pilih Status Keaktifan</option>
                                                    <option value="Aktif"
                                                        {{ $mahasiswa->status_keaktifan == 'Aktif' ? 'selected' : '' }}>
                                                        Aktif</option>
                                                    <option value="Cuti"
                                                        {{ $mahasiswa->status_keaktifan == 'Cuti' ? 'selected' : '' }}>Cuti
                                                    </option>
                                                    <option value="DO Administrasi"
                                                        {{ $mahasiswa->status_keaktifan == 'DO Administrasi' ? 'selected' : '' }}>
                                                        DO Administrasi</option>
                                                    <option value="Tanpa Keterangan"
                                                        {{ $mahasiswa->status_keaktifan == 'Tanpa Keterangan' ? 'selected' : '' }}>
                                                        Tanpa Keterangan</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>
                                                <input class="form-control" type="password" placeholder="Password"
                                                    id="user-password" name="password">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit"
                                class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ __('Simpan Perubahan') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
