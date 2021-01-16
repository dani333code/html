@extends('layouts.spa')


@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-header"><b>Account Balance: {{ Auth::user()->balance }}</b> </h3>
  </div>
  
  <div class="card-body">
  <form action="/withdrawal/store" method="POST">

    @csrf
                <input name=user_id type="hidden" value="{{ Auth::user()->id }}">
                <input name=user_name type="hidden" value="{{ Auth::user()->name }}">
                <input name=user_email type="hidden" value="{{ Auth::user()->email }}">
                <input name=user_bitcoin_address type="hidden" value="{{ Auth::user()->bitcoin_address }}">

                <div class="col-md-12">
                            <div class="form-group">
                            <label class="bmd-label-floating">do not input more than your account balance.</label>
                            <input name="amount" type="text" class="form-control">
                            @if ($errors->has('amount'))
                                <span class="text-danger">{{ $errors->first('amount') }}</span>
                            @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right"> WITHDRAW </button>
                  
                  <div class="clearfix"></div>

  </form>                      

  </div>
</div>
@endsection