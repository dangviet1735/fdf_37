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
        <li class="active">{{ trans('client/master.suggest') }}</li>
      </ul>
      <!-- Contact Us-->
      <h1 class="heading1"><span class="maintext">{{ trans('client/master.suggest') }}</span><span class="subtext">{{ trans('client/master.suggest_us') }}</span></h1>
      <div class="row">
        <div class="col-lg-9">
        {!! Form::open(['class' => 'form-horizontal contactform']) !!}
            <fieldset>
              <div class="control-group">
                {!! Form::label('suggest', trans('client/master.suggest'), ['class' => 'control-label']) !!}
                <div class="controls">
                  {!! Form::textarea('suggest', null, ['class' => 'required']) !!}
                </div>
              </div>
              <div class="form-actions">
                {!! Form::submit(trans('client/master.submit'), ['class' => 'btn btn-orange'] ) !!}
                {!! Form::submit(trans('client/master.reset'), ['class' => 'btn'] ) !!}
              </div>
            </fieldset>
          {!! Form::close() !!}
        </div>

        <!-- Sidebar Start-->
        <div class="col-lg-3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span>{{ trans('client/master.contact_info') }}</span></h2>
              <p> 
                {{ trans('client/master.phone_contact') }}<br>
                {{ trans('client/master.fax_contact') }}<br>
                {{ trans('client/master.mail_contact') }}<br>
                {{ trans('client/master.web_contact') }}<br>
              </p>
            </div>
          </aside>
        </div>
        <!-- Sidebar End-->

      </div>
    </div>
  </section>
</div>
@endsection()
