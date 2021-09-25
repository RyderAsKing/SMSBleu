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

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $logs = $user->log()->latest()->paginate(5);
        return view('dashboard.admin.users.edit', ['user' => $user, 'logs' => $logs]);
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required|email|unique:users,email']);
        $user = User::findOrFail($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('dashboard.admin.users.edit', $id)->with(['success' => 'Edited successfully']);
    }

    public function credits(Request $request, $id)
    {
        $this->validate($request, ['action' => 'required|integer', 'amount' => 'required|integer']);
        $user = User::findOrFail($request->id);
        $current_bal = $user->balance;
        $updated_bal = "";
        if ($request->action == 0) {
            $updated_bal = $current_bal + $request->amount;
        }
        if ($request->action == 1) {
            $updated_bal = $current_bal - $request->amount;
        }
        $user->balance = $updated_bal;
        $user->save();

        return redirect()->route('dashboard.admin.users.edit', $id)->with(['success' => 'Edited successfully']);
    }
}
