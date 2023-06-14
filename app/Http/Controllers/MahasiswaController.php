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
        return view('create-mahasiswa');
        }

    //fungsi untuk simpan data
    public function store(Request $request){
    $validatedData = $request->validate([
        'name' => 'required',
        'nim' => 'required',
        // Tambahkan validasi untuk field lain sesuai kebutuhan
    ]);

    Mahasiswa::create($validatedData);

    return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }
}