<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{

    public function index()
    {
        $user = User::where('id', Auth::id())
                 ->first();
        
        return view('home')->with(['user' => $user]);

    }
}
