<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class ReferralController extends Controller
{
    public function index()
    {
        $users = User::where('referrer_id', Auth::id())
                 ->get();
        
        return view('referral')->with(['users' => $users]);

    }
    
}
