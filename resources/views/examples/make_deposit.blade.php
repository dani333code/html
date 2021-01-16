@extends('layouts.spa')


@section('content')
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <h3> Copy the bitcoin address below and make deposit  </h3>
                          <span class="nav-tabs-title">  
                          
                          </span>
                          <input  id="myInp" type="text" value="136FEZixsuTCeA8TggnmrF2pDXKktH29hT">
          <button id="btnCopy">copy</button>
                      
                      <!--ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">bug_report</i> Bugs
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">code</i> Website
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i> Server
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul-->
                    </div>
                  </div>
                </div>
                <div class="card-body">

            <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
                 
                <form action="/deposit/store" method="POST">

                @csrf

                

                <input name=user_id type="hidden" value="{{ Auth::user()->id }}">
                <input name=user_name type="hidden" value="{{ Auth::user()->name }}">
                <input name=user_email type="hidden" value="{{ Auth::user()->email }}">


                  <div class="row">
                    

                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                
                                <table class="table">
                                  <tbody>
                                  @foreach ($plans as $plan)
                                    <tr>
                                     
                                        <td>
                                        <div class="form-check">
                                          
                                            <input name="plan_name" type="checkbox"
                                             value="{{ $plan->name }}">   
                                      

                                        </div>
                                        </td>
                                        
                                        <td>
                                        <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">{{ $plan->name }}</h5>
                                                    <hr>
                                                    <p class="card-text">{{ $plan->description }}</p>
                                                    <hr>
                                                    <p>ROI : {{ $plan->roi }}</p>
                                                    <hr>
                                                    <p>Minimum Amount : {{ $plan->min_amount }}</p>
                                                    <hr>
                                                    <p>maximim Amount : {{ $plan->max_amount }}</p>

                                                    
                                                  </div>
                                                </div>
                                              </div>
                                        </div>

                            @if ($errors->has('plan'))
                                <span class="text-danger">{{ $errors->first('plan') }}</span>
                            @endif
                                        
                                            
                                            
                                            
                                        </td>
                                      
                                     
                                    </tr>
                                    
                                  @endforeach
                                  </tbody>
                                </table>
                             
                                
                               
                           
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label class="bmd-label-floating">Amount</label>
                            <input name="amount" type="text" class="form-control {{ $errors->has('ammount') ? 'error' : '' }}">

                            @if ($errors->has('amount'))
                                <span class="text-danger">{{ $errors->first('amount') }}</span>
                            @endif
                            </div>
                        </div>

                        <p></p>

                  </div>
                  <button type="submit" class="btn btn-primary pull-right">make deposit</button>
                  
                  <div class="clearfix"></div>

                </form>
                </div>
                
              </div>
            </div>
           
          </div>
        </div>
@endsection