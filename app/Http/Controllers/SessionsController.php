<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
{
    $attributes = request()->validate([
        'email' => 'required|email',
        'password' => 'required' 
    ]);

<<<<<<< HEAD
    if (Auth::attempt($attributes)) {
        session()->regenerate();
=======
        if(Auth::attempt($attributes))
        {
            session()->regenerate();
            return redirect('dashboard-admin')->with(['success'=>'You are logged in.']);
        }
        else{
>>>>>>> 12644096137bdb4ce69ae7a793f2381c0ac5ac63

        $user = Auth::user();

        if ($user->role === 'admin') {
            $this->authorizeRoles('dashboard-admin');
            return redirect('dashboard-admin')->with(['success' => 'You are logged in as admin.']);
        } elseif ($user->role === 'mahasiswa') {
            $this->authorizeRoles('dashboard-mhs');
            return redirect('dashboard-mhs')->with(['success' => 'You are logged in as mahasiswa.']);
        }
    }

    return back()->withErrors(['email' => 'Email or password invalid.']);
}


    
    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
    public function authorizeRoles($role)
{
    if (Gate::denies('access-' . $role)) {
        abort(403, 'Unauthorized action.');
    }
}

    
}
