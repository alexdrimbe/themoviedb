@extends('layouts.auth')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-6 offset-sm-2 offset-md-3">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <fieldset>
                        <h2>Reset Password</h2>
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
                                   value="{{ old('email') }}" placeholder="Email Address" required autofocus>
                        </div>

                        <hr class="colorgraph"/>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Send Password Reset Link
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
