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
        <li class="active">{{ trans('client/master.checkout') }}</li>
      </ul>
      <div class="row">
        <!-- Account Login-->
        <div class="col-lg-9">
          <h1 class="heading1"><span class="maintext">{{ trans('client/master.checkout') }}</span><span class="subtext"></span></h1>
          <div class="checkoutsteptitle">{{ trans('client/master.products_order') }}<a class="modify">{{ trans('client/master.modify') }}</a>
          </div>
          <div class="checkoutstep">
            <div class="cart-info">
              <table class="table table-striped table-bordered">
                <tr>
                  <th class="image">{{ trans('client/master.image') }}</th>
                  <th class="name">{{ trans('client/master.product_name') }}</th>
                  <th class="model">{{ trans('client/master.model') }}</th>
                  <th class="quantity">{{ trans('client/master.quantity') }}</th>
                  <th class="price">{{ trans('client/master.unit_price') }}</th>
                  <th class="total">{{ trans('client/master.total') }}</th>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
                  <td  class="name"><a href="#">{{ trans('client/master.food_name') }}</a></td>
                  <td class="model">{{ trans('client/master.my_product') }}</td>
                  <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="col-lg-1">
                    &nbsp;
                    <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
                    <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>
                  <td class="price"></td>
                  <td class="total"></td>
                </tr>
              </table>
            </div>
            <div class="row">
                <div class="col-lg-4 pull-right">
                  <table class="table table-striped table-bordered ">
                    <tbody>
                      <tr>
                        <td><span class="extra bold totalamout">{{ trans('client/master.total') }}</span></td>
                        <td><span class="bold totalamout"></span></td>
                      </tr>
                    </tbody>
                  </table>
                  <input type="submit" class="btn btn-orange pull-right" value="CheckOut">
                  <input type="submit" class="btn btn-orange pull-right mr10" value="Continue Shopping">
                </div>
            </div>
          </div>
        </div>
        <!-- Sidebar Start-->
        <div class="col-lg-3">
          <aside>
            <div class="sidewidt mt20">
              <h2 class="heading2"><span>{{ trans('client/master.product_hot') }}</span></h2>
                <div class="flexslider" id="mainsliderside">
                <ul class="slides">
                  <li>
                    <img src="img/product1a.jpg" alt="" />
                  </li>
                  <li>
                    <img src="img/product2a.jpg" alt="" />
                  </li>
                </ul>
              </div>
            </div>
          </aside>
        </div>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>
@endsection()
