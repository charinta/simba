<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return redirect('dashboard');
    }

    public function dashboard_admin() {
        return view('dashboard-admin');
    }

    public function dashboard_mhs() {
        return view('dashboard-mhs');
    }
    
//     public function index()
// {
// $user = Auth::user();
// if ($user->hasRole('admin')) {
// return redirect()->route('dashboard-admin');
// } else {
// return redirect()->route('dashboard-mhs');
// }
// }   public function indexUser()
// {
// return view('dashboard_admin');
// }   public function indexAdmin()
// {
// return view('dashboard_mhs');
// }

}
