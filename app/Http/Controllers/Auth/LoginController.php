<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['email' => 'required|email|max:100', 'password' => 'required|min:8']);
        if (!Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            return back()->with('error', __('auth.failed'));
        }
        return redirect()->route('dashboard');
    }
}
