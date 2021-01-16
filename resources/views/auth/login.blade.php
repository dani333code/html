@extends('layouts.app')

@section('content')
<section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{ route('login') }}" id="signup-form" class="signup-form">
                        @csrf
                        <h2 class="form-title">Log In To your  account</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit"  id="submit" class="form-submit" value="Log In"/>
                        </div>
                        
                    </form>
                    <p class="loginhere">
                        Click here to create a new account <a href="/register" class="loginhere-link">Register here</a>
                    </p>

                    <p class="loginhere">
                        <b>
                        click here to to reset yout password if you have forgotten it  
                        
                        </b> <a href="/password/reset" class="loginhere-link">Reset Paassword</a>
                    </p>
                </div>
            </div>
        </section>
@endsection
