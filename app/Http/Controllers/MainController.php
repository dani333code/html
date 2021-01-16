<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class MainController extends Controller
{
    public function index()
    {
        $plans = Plan::all();

        return view('main_pages.home')
             ->with(['plans' => $plans]);
    }
}
