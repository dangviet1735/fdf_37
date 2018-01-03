@extends('client.master')

@section(trans('admin/master.content'))
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->
      <ul class="breadcrumb">
        <li>
          <a href="#">{{ trans('client/master.home') }}</a>
          <span class="divider">/</span>
        </li>
        <li class="active">{{ trans('client/master.register_account') }}</li>
      </ul>
      <div class="row">
        <!-- Register Account-->
        <div class="col-lg-9">
          <h1 class="heading1"><span class="maintext">{{ trans('client/master.change_password') }}</span></h1>
            {!! Form::open(['action' => ['User\ChangePassController@update',$user->id], 'method' => 'PATCH']) !!}
              <h3 class="heading3">{{ trans('client/master.your_personal_details') }}</h3>
                <div class="registerbox">
                  <fieldset>
                    <div class="control-group">
                      {!! Form::label('oldPassword', trans('client/master.old_password'), ['class' => 'control-label']) !!}
                      <div class="controls">
                        {!! Form::password('oldPassword', ['class' => 'input-xlarge']) !!}
                        @if ($errors->has('oldPassword'))
                          <span class="help-block">
                              <strong>{{ $errors->first('oldPassword') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    <div class="control-group">
                      {!! Form::label('newPassword', trans('client/master.new_password'), ['class' => 'control-label']) !!}
                      <div class="controls">
                        {!! Form::password('password', ['class' => 'input-xlarge']) !!}
                        @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    <div class="control-group">
                      {!! Form::label('rePassword', trans('client/master.password_confirm'), ['class' => 'control-label']) !!}
                      <div class="controls">
                        {!! Form::password('rePassword', ['class' => 'input-xlarge']) !!}
                        @if ($errors->has('rePassword'))
                          <span class="help-block">
                              <strong>{{ $errors->first('rePassword') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        {!! Form::submit(trans('client/master.update'), ['class' => 'btn btn-orange']) !!}
                        {!! Form::submit(trans('client/master.reset'), ['class' => 'btn btn-orange']) !!}
                      </div>
                    </div>
                  </fieldset>
                </div>
              {!! Form::close() !!}
          <div class="clearfix"></div>
          <br>
        </div>
        <!-- Sidebar Start-->
        <aside class="col-lg-3">
          <div class="sidewidt">
            <h2 class="heading2"><span>{{ trans('client/master.account') }}</span></h2>
            <ul class="nav nav-list categories">
              <li>
                <a href="#">{{ trans('client/master.my_account') }}</a>
              </li>
              <li>
                <a href="#">{{ trans('client/master.edit_account') }}</a>
              </li>
              <li>
                <a href="#">{{ trans('client/master.order_history') }}</a>
              </li>
              @if (Auth::check())
              <li>
                <a href="{{ action('User\LoginController@getLogout')}}">{{ trans('client/master.logout') }}</a>
              </li>
              @endif
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>
@endsection()
