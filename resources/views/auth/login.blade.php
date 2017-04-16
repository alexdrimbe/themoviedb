@extends('layouts.auth')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-6 offset-sm-2 offset-md-3">
                <form role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <fieldset>
                        <h2>Please Sign In</h2>
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <div>{{$error}}</div>
                                @endforeach
                            </div>
                        @endif
                        <hr class="colorgraph"/>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <input id="email" type="email" class="form-control form-control-lg" name="email"
                                   value="{{ old('email') }}" placeholder="Email Address" required autofocus>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <input type="password" name="password" id="password" class="form-control form-control-lg"
                                   placeholder="Password" required/>
                        </div>
                        <input type="checkbox"
                               name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me

                        <a class="btn btn-link float-right" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>

                        <hr class="colorgraph"/>
                        <div class="row">
                            <div class="col-xs-6 col-md-6 col-lg-6 mb-3">
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In"
                                />
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6"><a href="{{ route('register') }}"
                                                                       class="btn btn-lg btn-primary btn-block">Register</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
