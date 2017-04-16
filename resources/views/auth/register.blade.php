@extends('layouts.auth')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-6 offset-sm-2 offset-md-3">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <fieldset>
                        <h2>Register</h2>

                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <div>{{$error}}</div>
                                @endforeach
                            </div>
                        @endif

                        <hr class="colorgraph"/>

                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <input id="name" type="text" class="form-control form-control-lg" name="name"
                                   value="{{ old('name') }}" placeholder="Name" required autofocus>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <input id="email" type="email" class="form-control form-control-lg" name="email"
                                   value="{{ old('email') }}" placeholder="Email Address" required autofocus>
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
                                Register
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
