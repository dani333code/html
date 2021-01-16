@extends('layouts.spa')


@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Deposit Table</h4>
                  <p class="card-category"> Here is a list of all your Confirmed Deposits you have made </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                        plan Name
                        </th>
                        <th>
                          Amount
                        </th>

                      
                     
                      </thead>
                      
                      <tbody>
                      @foreach ($deposits as $deposit)
                        <tr>
                     
                         

                          <td>
                          {{ $deposit->plan_name }}
                          </td>
                         
                          
                          <td>
                          {{ $deposit->amount }}
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