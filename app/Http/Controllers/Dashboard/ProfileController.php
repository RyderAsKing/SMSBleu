<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        return view("dashboard.profile", ['user' => auth()->user()]);
    }

    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'string|max:32|nullable', 'email' => 'string|email|unique:users,email|max:100|nullable', 'password' => 'string|min:8|nullable', 'language' => 'string|nullable']);
        $user = User::findOrFail(auth()->user()->id);
        if (!empty($request->name)) {
            $user->name = $request->name;
        }
        if (!empty($request->email)) {
            $user->email = $request->email;
        }
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        if (!empty($request->language) && $request->language != "null") {
            $user->language = $request->language;
        }
        $user->save();
        return redirect()->route('dashboard.profile')->with(['success' => 'Edited successfully']);
    }
}
