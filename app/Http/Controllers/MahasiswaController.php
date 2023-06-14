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

    public function showProfile()
    {
        // Mengambil data mahasiswa dari tabel Mahasiswa
        $mahasiswa = Mahasiswa::find(1); // Ubah angka 1 dengan ID mahasiswa yang ingin ditampilkan
        
        // Menampilkan halaman "Show Profile" dengan data mahasiswa
        return view('show-profile', compact('mahasiswa'));
    }
}