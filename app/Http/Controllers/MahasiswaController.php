<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //fungsi untuk melihat tabel
    public function index(){
            $mahasiswa   = Mahasiswa::all();
            return view('tables')->with('mahasiswa', $mahasiswa);
        }

         public function indexAdmin(){
            $mahasiswa   = Mahasiswa::all();
            return view('tables-admin')->with('mahasiswa', $mahasiswa);
        }
    
    //fungsi untuk create data pada tabel
    public function create(){
        return view('create');
        }

    //fungsi untuk simpan data
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required|min:10',
        'nim' => 'required',
        'email' => 'required', // Tambahkan validasi untuk kolom 'email'
        'tanggal_lahir' => 'required',
        'angkatan' => 'required',
    ]);

    Mahasiswa::create($validatedData);

    return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
}

    public function showProfile($id)
    {
        $mahasiswa = Mahasiswa::find($id); // Ganti 1 dengan ID mahasiswa yang ingin ditampilkan
        return view('profile', compact('mahasiswa'));
    }

    public function showProfile2($id)
    {
    $mahasiswa = Mahasiswa::find($id); // Ubah sesuai dengan id mahasiswa yang ingin ditampilkan
    return view('details', compact('mahasiswa'));
    }

    public function edit($id)
    {
    $mahasiswa = Mahasiswa::findOrFail($id);
    return view('edit', compact('mahasiswa'));
    }

    public function update($id, Request $request)
    {
    // Validasi input form
    $validatedData = $request->validate([
        'nama' => 'required|min:10',
        'nim' => 'required',
        'email' => 'required', // Tambahkan validasi untuk kolom 'email'
        'tanggal_lahir' => 'required',
        'angkatan' => 'required',
        // 'status' => 'required',
        // tambahkan validasi untuk field lainnya
    ]);

    // Lakukan update data mahasiswa
    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->name = $request->input('nama');
    $mahasiswa->nim = $request->input('nim');
    $mahasiswa->email = $request->input('email');
    $mahasiswa->tanggal_lahir=$request->input('tanggal_lahir');
    $mahasiswa->angkatan=$request->input('angkatan');
    // $mahasiswa->status=$request->input('status');
    // lakukan update untuk field lainnya

    // Simpan perubahan
    $mahasiswa->save();

    // Redirect ke halaman details dengan pesan sukses
    return redirect()->route('mahasiswa.details', ['id' => $mahasiswa->id])
                    ->with('success', 'Data mahasiswa berhasil diperbarui');
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.indexadmin')->with('success', 'Data Berhasil Dihapus');
    }
}