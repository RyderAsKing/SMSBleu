<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index()
    {
        $users = User::all();
        return view('dashboard.admin.users.index', ['users' => $users]);
    }

    public function destroy($id)
    {
        User::findOrFail($id);
        User::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Deleted the user successfully');
    }

    public fucntion edit($id) {
        $user = "";
    }
}
