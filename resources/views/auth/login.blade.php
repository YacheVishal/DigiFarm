@extends('layouts.app')

@section('content')
  
    <div class="container">
      <div class="bs-example">
          <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Login</li>
          </ul>
      </div>
        <center><h2 style="font-family: sans-serif;">Login Form</h2></center>
        <div class="row">
            
            <div class="col-sm-8">
                <div class="account-wall">
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        @csrf


                    <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email or Mobile No" required>
                               @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
 


                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        
                    </label>
                    <a href="{{ route('password.request') }}" class="pull-right need-help">Forgot Password? </a><span class="clearfix"></span>
                    </form>
                </div>
                <a href="{{route('register')}}" class="text-center new-account">Create an account</a>
            </div>
            <div class="col-sm-4 col-md-4 part2">
              <center>
              <img class="img-responsive" src="image/logo1.png">
              </center>
            </div>
        </div>
        <br>
    </div>

@endsection