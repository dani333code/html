@extends('layouts.spa')


@section('content')


<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
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
                          Amount
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      
                      <tbody>
                      @foreach ($deposits as $deposit)
                        <tr>
                          <td>
                      {{ $deposit->id }}3hd7bdi{{ $deposit->id }}
                          </td>

                          <td>
                          {{ $deposit->user_name }}
                          </td>
                         

                          <td>
                          {{ $deposit->plan_name }}
                          </td>
                         
                          
                          <td>
                          {{ $deposit->amount }}
                          </td>


                          <td>
                         
                          
                          
                          <form action="{{route('deposit.complete',$deposit->id)}}" method="post" class="mr-1">
                          <input type="hidden" name="user_id" value="{{ $deposit->user_id }}">
                          <input type="hidden" name="user_email" value="{{ $deposit->user_email }}">
                          <input type="hidden" name="amount" value="{{ $deposit->amount }}">

                          <input type="hidden" name="deposit_id" value="{{ $deposit->id }}">

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

