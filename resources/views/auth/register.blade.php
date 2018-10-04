@extends('layouts.app')

@section('content')
<div class="container">
      <div class="bs-example">
          <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Registration</li>
          </ul>
      </div>
        <center><h2 style="font-family: sans-serif;">Registration Form</h2></center>
        <div class="row">
            <div class="col-sm-8">
                <div class="account-wall">
                    <form class="form-signup" method="POST" action="{{ route('register') }}">
                        @csrf
                      <div class="row">
                        <div class="col-30"> <label>Name:</label></div>
                        <div class="col-70 input-group"> 
                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="name" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                       @if ($errors->has('name'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                       @endif
                        </div>            
                      </div>

                      <div class="row">
                       <div class="col-30"><label>Mobile Number:</label></div>         
                         <div class="col-70 input-group"><input class="form-control" type="text" name="mobile_no" placeholder="0123456789" required><span class="input-group-addon"><i class="fas fa-mobile-alt"></i></span>
                         </div> 
                      </div>

                      <div class="row">
                        <div class="col-30"><label>Email Id:</label></div>
                        <div class="col-70 input-group">
                          <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="name@domain.com" optional>
                          <span class="input-group-addon"><i class="far fa-envelope"></i></span>
                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                        </div>         
                      </div>          
                      
                      <div class="row">
                        <div class="col-30"><label>Password:</label></div>
                        <div class="col-70 input-group"><input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password" required>
                          <span class="input-group-addon"><i class="fas fa-key"></i></span>
                        </div>  
                      </div>
                      <div class="row"> 
                        <div class="col-30"><label>Confirm password:</label></div>
                        <div class="col-70 input-group"><input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                          <span class="input-group-addon"><i class="fas fa-key"></i></span>
                        </div> 
                      </div>   
<!--
                      <div class="row">
                        <div class="col-30"> <label>City:</label></div>
                        <div class="col-70 input-group"> 
                            <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" type="city" name="city" placeholder="city" value="{{ old('city') }}" required autofocus>
                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                       @if ($errors->has('city'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('city') }}</strong>
                                          </span>
                                       @endif
                        </div>            
                      </div>

                      <div class="row">
                        <div class="col-30"> <label>State:</label></div>
                        <div class="col-70 input-group"> 
                            <input class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" type="state" name="state" placeholder="state" value="{{ old('city') }}" required autofocus>
                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                       @if ($errors->has('state'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('state') }}</strong>
                                          </span>
                                       @endif
                        </div>            
                      </div>
                       
                      
-->
     

                        <center><button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button></center>
                        
                    </form>
                </div>
                <a href="#" class="text-center new-account">Create an account </a>
            </div>
            <div class="col-sm-4 col-md-4 part2">
              <span style="">
              
              <img class="img-responsive" src="image/logo1.png" style="margin: 100px;">
              
              </span>
            </div>
        </div>
        <br>
    </div>
    
@endsection
