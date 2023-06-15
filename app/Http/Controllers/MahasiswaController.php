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
    
    //fungsi untuk create data pada tabel
    public function create(){
        return view('create');
        }

    //fungsi untuk simpan data
    public function store(Request $request){
    $validatedData = $request->validate([
        'name' => 'required',
        'nim' => 'required',
        // Tambahkan validasi untuk field lain sesuai kebutuhan
    ]);

    Mahasiswa::create($validatedData);

    return redirect()->route('index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function showProfile($id)
    {
        $mahasiswa = Mahasiswa::find($id); // Ganti 1 dengan ID mahasiswa yang ingin ditampilkan
        return view('profile', compact('mahasiswa'));
    }

    public function showProfile2()
    {
    $mahasiswa = Mahasiswa::find(1); // Ubah sesuai dengan id mahasiswa yang ingin ditampilkan
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
        'name' => 'required',
        'nim' => 'required',
        // tambahkan validasi untuk field lainnya
    ]);

    // Lakukan update data mahasiswa
    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->name = $request->input('name');
    $mahasiswa->nim = $request->input('nim');
    // lakukan update untuk field lainnya

    // Simpan perubahan
    $mahasiswa->save();

    // Redirect ke halaman details dengan pesan sukses
    return redirect()->route('mahasiswa.details', ['id' => $mahasiswa->id])
                    ->with('success', 'Data mahasiswa berhasil diperbarui');
    }
}