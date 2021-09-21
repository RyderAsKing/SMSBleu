<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OverviewController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $pricing = env('SMS_PRICING');
        $logs = Auth::user()->log()->paginate(10);
        return view('dashboard.index', ['user' => $user, 'pricing' => $pricing, 'logs' => $logs]);
    }
}
