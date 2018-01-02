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
        <li class="active">{{ trans('client/master.login') }}</li>
      </ul>
       <!-- Account Login-->
      <div class="row">
        <div class="col-lg-9">
          <h1 class="heading1"><span class="maintext">{{ trans('client/master.login') }}</span><span class="subtext">{{ trans('client/master.title_login') }}</span></h1>
          <section class="newcustomer">
            <h2 class="heading2">{{ trans('client/master.new_customer') }}</h2>
            <div class="loginbox">
              <h4 class="heading4">{{ trans('client/master.register_account') }}</h4>
              <p>{{ trans('client/master.text_login') }}</p>
              <br> <br> <br> <br> <br> <br> <br>
              <a href="#" class="btn btn-orange">{{ trans('client/master.register') }}</a>
            </div>
          </section>
          <section class="returncustomer">
            <h2 class="heading2">{{ trans('client/master.returning_customer') }}</h2>
            <div class="loginbox">
              <h4 class="heading4">{{ trans('client/master.return_cus') }}</h4>
              {!! Form::open(['class' => 'form-vertical']) !!}
                <fieldset>
                  <div class="control-group">
                    {!! Form::label('email', trans('client/master.email'), ['class' => 'control-label']) !!}
                    <div class="controls">
                      {!! Form::email('email', old('email')) !!}
                      @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="control-group">
                    {!! Form::label('password', trans('client/master.password'), ['class' => 'control-label']) !!}                    
                    <div class="controls">
                      {!! Form::password('password') !!}
                      @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  {!! Html::link('#', trans('client/master.forgotten_password')) !!}
                  <br>
                  <br>
                  {!! Form::submit(trans('client/master.login'), ['class' => 'btn btn-orange']) !!}
                </fieldset>
              {!! Form::close() !!}
            </div>
          </section>
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
              <li><a href="#">{{ trans('client/master.order_history') }}</a>
              </li>
              <li>
                <a href="category.html">{{ trans('admin/master.logout') }}</a>
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
