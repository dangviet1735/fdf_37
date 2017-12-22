@extends('admin.master')

@section(trans('admin/master.content'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('admin/master.user') }}
                    <small>{{ trans('admin/master.add') }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                {{ Form::open(['action' => 'Admin\UserController@store']) }}
                    <div class="form-group">
                        {{ Form::label('username', trans('admin/master.username')) }}
                        {{ Form::text('username', old('username'), ['placeholder' => trans('admin/master.please_enter_username'), 'class' => 'form-control']) }}
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', trans('admin/master.password')) }}
                        {{ Form::password('password', ['placeholder' => trans('admin/master.please_enter_password'), 'class' => 'form-control']) }}
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('rePassword', trans('admin/master.repassword')) }}
                        {{ Form::password('rePassword', ['placeholder' => trans('admin/master.please_enter_repassword'), 'class' => 'form-control']) }}
                        @if ($errors->has('rePassword'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rePassword') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', trans('admin/master.email')) }}
                        {{ Form::email('email', old('email'), ['placeholder' => trans('admin/master.please_enter_email'), 'class' => 'form-control']) }}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('address', trans('admin/master.address')) }}
                        {{ Form::text('address', old('address'), ['placeholder' => trans('admin/master.please_enter_address'), 'class' => 'form-control']) }}
                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('phone', trans('admin/master.phone')) }}
                        {{ Form::text('phone', old('phone'), ['placeholder' => trans('admin/master.please_enter_phone'), 'class' => 'form-control']) }}
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('role', trans('admin/master.role')) }}&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="radio-inline">
                            {{ Form::radio('role', config('setting.role.admin'), false,['class' => 'radio-inline', 'id' => 'role1']) }} {{ trans('admin/login.admin') }}
                        </label>
                        <label class="radio-inline">
                            {{ Form::radio('role', config('setting.role.member'), true, ['class' => 'radio-inline', 'id' => 'role2']) }} {{ trans('admin/login.member') }} 
                        </label>
                    </div>
                    {{ Form::submit(trans('admin/master.user_add'), ['class' => 'btn btn-default']) }}
                    {{ Form::reset(trans('admin/master.reset'), ['class' => 'btn btn-default']) }}
                    
                {{ Form::close() }}
            </div>
        </div>  
        <!-- /.row -->
    </div>
@endsection()
