<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['tel' => 'required|min:10', 'from' => 'required|string|min:4', 'message' => 'required|string|max:160']);

        $current_bal = Auth::user()->balance;
        $new_balance = "";

        if ($current_bal < env('SMS_PRICING')) {
            return redirect()->back()->with('error', __('text.error.no_credits'));
        } else {
            $url = 'https://cspoof.com/dashboard/api?' . http_build_query([
                'to' => $request->get('tel'),
                'from' => $request->get('from'),
                'message' => $request->get('message'),
                'email' => env('CSPOOF_API_EMAIL'),
                'api_secret' => env('CSPOOF_API_SECRET'),
            ]);

            die($url);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            $response = json_decode($response, true);
            if (curl_errno($ch)) {
                die('Error:' . curl_error($ch));
            }

            Auth::user()->log()->create(['user_id' => Auth::user()->id, 'from' => $request->from, 'to' => $request->tel, 'message' => $request->message]);

            $new_balance = $current_bal - env('SMS_PRICING');

            Auth::user()->balance = $new_balance;
            Auth::user()->save();
            return back()->with('success', $response['status_info']);
        }
    }
}
