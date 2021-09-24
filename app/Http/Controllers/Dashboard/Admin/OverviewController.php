<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OverviewController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index()
    {
        $users = User::all();
        $users_registered = $users->count();
        $total_credits = 0;
        $logs = Log::latest()->paginate(4);
        foreach ($users as $user) {
            $total_credits = $total_credits + $user->balance;
        }
        return view('dashboard.admin.index', ['users_registered' => $users_registered, 'total_credits' => $total_credits, 'logs' => $logs]);
    }
}
