@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ trans('register.registration') }}</div>
                <div class="card-body">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/register') }}">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">{{ trans('admin.name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">{{ trans('admin.role') }}</label>

                            <div class="col-md-6">
                                <input id="role" type="text" class="form-control" name="role" value="{{ old('role') }}" required autofocus>

                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{ trans('admin.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                        <label for="role" class="col-md-4 control-label">{{ trans('admin.role') }}</label>

                        <div class="col-md-6">
                            <input id="role" type="text" class="form-control" name="role" value="{{ old('role') }}">

                            @if ($errors->has('role'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<<<<<<< HEAD
                            <label for="password" class="col-md-4 control-label">{{ trans('admin.password') }}</label>
=======
                            <label for="password" class="col-md-4 control-label">{{ trans('register.password') }}</label>
>>>>>>> origin/master

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
<<<<<<< HEAD
                            <label for="password-confirm" class="col-md-4 control-label">{{ trans('admin.confirm_password') }}</label>
=======
                            <label for="password-confirm" class="col-md-4 control-label">{{ trans('register.confirm_password') }}</label>
>>>>>>> origin/master

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-deep-purple">
=======
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-outline-deep-purple">
>>>>>>> origin/master
                                    {{ trans('admin.create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
