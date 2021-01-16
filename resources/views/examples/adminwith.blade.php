@extends('layouts.spa')


@section('content')


<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a list of all the pending withdrawals</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          User Name
                        </th>
                        <th>
                        plan Name
                        </th>
                        <th>
                          Bitcoin Address
                        </th>
                        <th>
                          Amount
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      
                      <tbody>
                      @foreach ($withdrawals as $withdrawal)
                        <tr>
                          <td>
                      {{ $withdrawal->id }}3hd7bdi{{ $withdrawal->id }}
                          </td>

                          <td>
                          {{ $withdrawal->user_name }}
                          </td>
                         

                          <td>
                          {{ $withdrawal->user_email }}
                          </td>

                          <td>
                          {{ $withdrawal->user_bitcoin_address }}
                          </td>
                         
                          
                          <td>
                          {{ $withdrawal->amount }}
                          </td>

                         

                          <td>
                         
                          
                          
                          <form action="{{route('withdrawal.complete',$withdrawal->id)}}" method="post" class="mr-1">
                          <input type="hidden" name="withdrawal_id" value="{{ $withdrawal->id }}">
                          <input type="hidden" name="user_email" value="{{ $withdrawal->user_email }}">
                          
                          <input type="hidden" name="user_name" value="{{ $withdrawal->user_name }}">

                              @csrf
                              @method('PUT')
                              <button type="submit" class="text-blue-500">CONFIRM</button>
                          </form>


                       
                
                          </td>


                         
                          
                        </tr>
                        @endforeach
                
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection

