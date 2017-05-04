@extends('minimalistic-login::layout')

@section('body')

    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4>Reset Password</h4>
        </div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form role="form" method="POST" action="{{ url('/password/email') }}">

                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>E-Mail Address</label>

                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
