<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    //
    public function form()
    {
        return view('user-form');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // event(new Registered($user));
        $user->assignRole([3]);
        return redirect()->route('list-users');
    }

    public function users()
    {
        $users = User::whereHas('roles', function ($q) {
            $q->where('name', 'user')->orWhere('name', 'customer');
        })->get();
        return view('users')->with('users', $users); //$users;
    }
}
