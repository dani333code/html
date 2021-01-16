<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Mail\WithdrawalMail;
use App\Mail\WithdrawalRequest;
use App\Withdrawal;
use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class WithdrawalController extends Controller
{
    public function admin()
    {
        $withdrawals = auth()->user()->withdrawals->where('confirmed', 1)->sortBy('created_at');
        return view('examples.withdrawal')->with(['withdrawals' => $withdrawals]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withdrawals = DB::table('withdrawals')->where('confirmed', 0)->get();
    
        return view('examples.adminwith')->with(['withdrawals' => $withdrawals]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = DB::table('users')->where('id', Auth::id())->get();
        return view('examples.make_withdrawal')->with(['user' => $user]);
        

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_name = $request->user_name;
        $amount = $request->amount;
        Withdrawal::create($request->all());
        Mail::to(request('user_email'))
        ->send(new WithdrawalRequest($user_name, $amount));
        return redirect('/withdrawals');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function show(Deposit $deposit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function edit(Deposit $deposit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposit $deposit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deposit $deposit)
    {
        //
    }

    public function complete(Request $request, Withdrawal $withdrawal)
    {   
        $withdrawal->update(['confirmed' => 1]);
        $withdrawal_id = $request->withdrawal_id;

        $withdrawal_details = DB::table('withdrawals')->where('id', $withdrawal_id)->get();
        Mail::to(request('user_email'))
        ->send(new WithdrawalMail($withdrawal_details));
        return redirect()->back();
    }
}
