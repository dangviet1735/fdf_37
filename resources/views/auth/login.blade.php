@extends('layouts.app')

@section(trans('admin/master.content'))
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('admin/master.login') }}</div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'postLoginAdmin' ,'class' => 'form-horizontal']) }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{ Form::label('email', trans('admin/master.email_address'), ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">
                                {{ Form::email('email', old('email'), ['placeholder' => trans('admin/master.please_enter_email'), 'class' => 'form-control']) }}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{ Form::label('password', trans('admin/master.password'), ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">
                                {{ Form::password('password', ['placeholder' => trans('admin/master.please_enter_password'), 'class' => 'form-control']) }}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        {{ Form::checkbox('remember', 'yes') }} {{ trans('admin/master.remember_me') }} 
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {{ Form::submit(trans('admin/master.login'), ['class' => 'btn btn-primary']) }}
                                {{ Html::linkRoute('password.request', trans('admin/master.forgot_your_password'), array(), array('class' => 'btn btn-link')) }}
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
