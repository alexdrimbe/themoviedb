@extends('layouts.auth')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-6 offset-sm-2 offset-md-3">
                <form role="form" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <fieldset>
                        <h2>Reset Password</h2>
                    </fieldset>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

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
                               value="{{ $email or old('email') }}" placeholder="Email Address" required autofocus>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <input type="password" name="password" id="password" class="form-control form-control-lg"
                               placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control form-control-lg"
                               name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                    <hr class="colorgraph"/>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
