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
          <h1 class="heading1"><span class="maintext">{{ trans('client/master.change_profile') }}</span></h1>
            {!! Form::open(['action' => ['User\RegisterController@update',$user->id], 'method' => 'PATCH']) !!}
              <h3 class="heading3">{{ trans('client/master.your_personal_details') }}</h3>
                <div class="registerbox">
                  <fieldset>
                    <div class="control-group">
                      {!! Form::label('username', trans('client/master.full_name'), ['class' => 'control-label']) !!}
                      <div class="controls">
                        {!! Form::text('username', old('username', isset($user) ? $user->username : null), ['class' => 'input-xlarge']) !!}
                        @if ($errors->has('username'))
                          <span class="help-block">
                              <strong>{{ $errors->first('username') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    <div class="control-group">
                      {!! Form::label('email', trans('client/master.email_re'), ['class' => 'control-label']) !!}
                      <div class="controls">
                        {!! Form::email('email', old('email', isset($user) ? $user->email : null), ['class' => 'input-xlarge', 'disabled']) !!}
                        @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    <div class="control-group">
                      {!! Form::label('phone', trans('client/master.telephone'), ['class' => 'control-label']) !!}
                      <div class="controls">
                        {!! Form::text('phone', old('phone', isset($user) ? $user->phone : null), ['class' => 'input-xlarge']) !!}
                      </div>
                    </div>
                    <div class="control-group">
                      {!! Form::label('address', trans('client/master.address_re'), ['class' => 'control-label']) !!}
                      <div class="controls">
                        {!! Form::text('address', old('address', isset($user) ? $user->address : null), ['class' => 'input-xlarge']) !!}
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
              <li>
                <a href="category.html">{{ trans('client/master.logout') }}</a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>
@endsection()
