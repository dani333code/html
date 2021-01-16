@extends('layouts.spa')


@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Withdrawal Table</h4>
                  <p class="card-category">Here is the list of all your confirmed Withdrawal</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                       Amount
                        </th>
                        <th>
                          status
                        </th>

                      
                     
                      </thead>
                      
                      <tbody>
                      @foreach ($withdrawals as $withdrawal)
                        <tr>
                     
                         

                          <td>
                          {{ $withdrawal->amount }}
                          </td>
                         
                          
                          <td>
                          Paid
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