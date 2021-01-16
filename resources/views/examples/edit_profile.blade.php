@extends('layouts.spa')

@section('content')

<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                @foreach ($user as $user)
              <form action="{{route('user.profile',$user->id)}}" method="post" class="mr-1">
                      @csrf
                      @method('PUT')
          
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Name</label>
                          <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">User Name </label>
                          <input type="text" class="form-control" value="{{ $user->username }}" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Email</label>
                          <input type="text" class="form-control" value="{{ $user->email }}" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Bitcoin Address</label>
                          <input type="text" name="bitcoin_address"class="form-control" value="{{ $user->bitcoin_address }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  
                </form>
                @endforeach
                </div>
              </div>
            </div>
            
          </div>
</div>
@endsection