<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|max:32', 'email' => 'required|email|unique:users,email|max:100', 'password' => 'required|min:8']);

        if (!User::create(['name' => $request->get('name'), 'email' => $request->get('email'), 'password' => Hash::make($request->get('password')), 'type' => 0, 'balance' => 0, 'sent' => 0, 'language' => 'fr'])) {
            return back()->with('error', 'An error has occurred while creating the account');
        }
        Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')], $request->get('remember_me'));
        return redirect()->route('dashboard');
    }
}
