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
          <h1 class="heading1"><span class="maintext">{{ trans('client/master.register_account') }}</span><span class="subtext">{{ trans('client/master.register_with_us') }}</span></h1>
          {!! Form::open(['class' => 'form-horizontal']) !!}
            <h3 class="heading3">{{ trans('client/master.your_personal_details') }}</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  {!! Form::label('username', trans('client/master.full_name'), ['class' => 'control-label']) !!}
                  <div class="controls">
                    {!! Form::text('username', old('username'), ['class' => 'input-xlarge']) !!}
                    @if ($errors->has('username'))
                      <span class="help-block">
                          <strong>{{ $errors->first('username') }}</strong>
                      </span>
                    @endif
                    <span class="red">*</span>
                  </div>
                </div>
                <div class="control-group">
                  {!! Form::label('email', trans('client/master.email_re'), ['class' => 'control-label']) !!}
                  <div class="controls">
                    {!! Form::email('email', old('email'), ['class' => 'input-xlarge']) !!}
                    @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                    <span class="red">*</span>
                  </div>
                </div>
                <div class="control-group">
                  {!! Form::label('phone', trans('client/master.telephone'), ['class' => 'control-label']) !!}
                  <div class="controls">
                    {!! Form::text('phone', old('phone'), ['class' => 'input-xlarge']) !!}
                  </div>
                </div>
                <div class="control-group">
                  {!! Form::label('address', trans('client/master.address_re'), ['class' => 'control-label']) !!}
                  <div class="controls">
                    {!! Form::text('address', old('address'), ['class' => 'input-xlarge']) !!}
                  </div>
                </div>
                <div class="control-group">
                  {!! Form::label('password', trans('client/master.password'), ['class' => 'control-label']) !!}
                  <div class="controls">
                    {!! Form::password('password', ['class' => 'input-xlarge']) !!}
                    @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                    <span class="red">*</span>
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
                    <span class="red">*</span>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    {!! Form::submit(trans('client/master.register'), ['class' => 'btn btn-orange']) !!}
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
