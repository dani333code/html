<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Mail\ConfirmMail;
use App\Mail\DepositRequest;
use App\Notifications\ReferrerBonus;
use Illuminate\Support\Facades\Notification;
use App\Deposit;
use App\Plan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    public function admin()
    {
        $deposits = auth()->user()->deposits->where('confirmed', 1)->sortBy('created_at');
        return view('examples.deposit')->with(['deposits' => $deposits]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deposits = DB::table('deposits')->where('confirmed', 0)->get();
    
        return view('examples.admindepo')->with(['deposits' => $deposits]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plans = Plan::all();
        return view('examples.make_deposit')->with(['plans' => $plans]);
        

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
        $this->validate($request, [
            'amount' => 'required',
            'plan_name'=>'required',
         ]);
        $user_name = $request->user_name;
        $amount = $request->amount;
        $plan = $request->plan_name;

        Deposit::create($request->all());
        
        Mail::to(request('user_email'))
        ->send(new DepositRequest($user_name, $amount, $plan));

        return redirect('/deposits');
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

    public function complete(Request $request, Deposit $deposit)
    {   

        $deposit->update(['confirmed' => 1]);


        $user = User::find($request->user_id);
        $balance = $request->amount;

        $deposit_id = $request->deposit_id;

        $deposit_details = DB::table('deposits')->where('id', $deposit_id)->get();
        Mail::to(request('user_email'))
        ->send(new ConfirmMail($deposit_details));

        return redirect()->back();
    }
}
