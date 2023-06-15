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
                                            {{ $mahasiswa->nama }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>NIM</td>
                                        <td>
                                            {{ $mahasiswa->nim }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                            {{ $mahasiswa->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>
                                            {{ $mahasiswa->tanggal_lahir }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td>
                                            {{ $mahasiswa->agama }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Angkatan</td>
                                        <td>
                                            {{ $mahasiswa->angkatan }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status Keaktifan</td>
                                        <td>
                                            {{ $mahasiswa->status }}
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Password</td>
                                        <td>
                                            {{ $mahasiswa->password }}
                                        </td>
                                    </tr> --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
