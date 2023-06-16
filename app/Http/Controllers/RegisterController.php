<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('session.register');
    }

    public function store()
    {
        // dd(request());
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50'],
            'password' => ['required', 'min:5', 'max:20'],
        ]);
        $user = new User();
        $user->name = $attributes['name'];
        $user->email = $attributes['email'];
        $user->password = bcrypt($attributes['password']);
        $user->save();

        $user->assignRole('user');
        // Auth::login($user); 

        session()->flash('success', 'Your account has been created.');
        return redirect()->route('login');

    }
}
