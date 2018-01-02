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
        <li class="active">{{ trans('client/master.my_account') }}</li>
      </ul>
      <div class="row">

        <!-- My Account-->
        <div class="col-lg-9">
        <h1 class="heading1"><span class="maintext">{{ trans('client/master.my_account') }}</span><span class="subtext">{{ trans('client/master.view') }}</span></h1>
          <h3 class="heading3">{{ trans('client/master.my_account') }}</h3>
          <div class="myaccountbox">
            <ul>
              <li>
                <a href="#">{{ trans('client/master.edit_your_account') }}</a>
              </li>
              <li>
                <a href="#"> {{ trans('client/master.change_your_password') }}</a>
              </li>
              <li>
                <a href="#">{{ trans('client/master.modify_your_address') }}</a>
              </li>
            </ul>
          </div>
          <h3 class="heading3">{{ trans('client/master.my_orders') }}</h3>
          <div class="myaccountbox">
            <ul>
              <li>
                <a href="#">{{ trans('client/master.view_order_history') }}</a>
              </li>
              </li>
              <li>
                <a href="#">{{ trans('client/master.your_transactions') }}</a>
              </li>
            </ul>
          </div>
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
