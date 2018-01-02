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
        <li class="active">{{ trans('client/master.category_drink') }}</li>
      </ul>
      <div class="row">
        <!-- Sidebar Start-->
        <aside class="col-lg-3">
         <!--  Best Seller -->
          <div class="sidewidt">
            <h2 class="heading2"><span>{{ trans('client/master.best_seller') }}</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html">{{ trans('client/master.product_name') }}</a>
                <span class="procategory">{{ trans('client/master.food_name') }}</span>
                <span class="price">{{ trans('client/master.250') }}</span>
              </li>
            </ul>
          </div>
          <!-- Latest Product -->
          <div class="sidewidt">
            <h2 class="heading2"><span>{{ trans('client/master.latest_products') }}</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html">{{ trans('client/master.product_name') }}</a>
                <span class="procategory">{{ trans('client/master.drink_name') }}</span>
                <span class="price">{{ trans('client/master.250') }}</span>
              </li>
            </ul>
          </div>
          <!--  Must have -->
          <div class="sidewidt">
          <h2 class="heading2"><span>{{ trans('client/master.product_hot') }}</span></h2>
          <div class="flexslider" id="mainslider">
            <ul class="slides">
              <li>
                <img src="img/product1.jpg" alt="" />
              </li>
              <li>
                <img src="img/product2.jpg" alt="" />
              </li>
            </ul>
          </div>
          </div>
        </aside>
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="col-lg-9">
          <!-- Category Products-->
          <section id="category">
               <!-- Sorting-->
                <div class="sorting well">
                  <form class=" form-inline pull-left">
                    {{ trans('client/master.sort_by') }}
                    <select>
                      <option>{{ trans('client/master.default') }}</option>
                      <option>{{ trans('client/master.name') }}</option>
                      <option>{{ trans('client/master.pirce') }}</option>
                      <option>{{ trans('client/master.rating') }} </option>
                    </select>
                    &nbsp;&nbsp;
                    {{ trans('client/master.show') }}
                    <select>
                      <option>{{ trans('client/master.10') }}</option>
                      <option>{{ trans('client/master.15') }}</option>
                      <option>{{ trans('client/master.20') }}</option>
                      <option>{{ trans('client/master.25') }}</option>
                    </select>
                  </form>
                  <div class="btn-group pull-right">
                    <button class="btn" id="list"><i class="fa fa-list"></i>
                    </button>
                    <button class="btn btn-orange" id="grid"><i class="fa fa-list-alt"></i></button>
                  </div>
                </div>
               <!-- Category-->
                <section id="categorygrid">
                  <ul class="thumbnails grid">
                    <li class="col-lg-4 col-sm-6">
                      <a class="prdocutname" href="product.html">{{ trans('client/master.product_name_here') }}</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">{{ trans('client/master.sale') }}</span>
                        <a href="#"><img alt="" src="img/product1.jpg"></a>
                      <div class="shortlinks">
                        <a class="details" href="#">{{ trans('client/master.details') }}</a>
                      </div>
                      <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart">{{ trans('client/master.add_to_cart') }}</a>
                        <div class="price">
                          <div class="pricenew">{{ trans('client/master.price1') }}</div>
                          <div class="priceold">{{ trans('client/master.price2') }}</div>
                        </div>
                        </div>
                      </div>
                    </li>

                    <li class="col-lg-4 col-sm-6">
                      <a class="prdocutname" href="product.html">{{ trans('client/master.product_name_here') }}</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="img/product1.jpg"></a>
                      <div class="shortlinks">
                        <a class="details" href="#">{{ trans('client/master.details') }}</a>
                      </div>
                      <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart">{{ trans('client/master.add_to_cart') }}</a>
                        <div class="price">
                          <div class="pricenew">{{ trans('client/master.price1') }}</div>
                          <div class="priceold">{{ trans('client/master.price2') }}</div>
                        </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <ul class="thumbnails list row">
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4">
                            <span class="sale tooltip-test">{{ trans('client/master.sale') }}</span>
                            <a href="#"><img alt="" src="img/product1.jpg"></a>
                          </div>
                          <div class="col-lg-8 col-sm-8">
                            <a class="prdocutname" href="product.html">{{ trans('client/master.product_name_here') }}</a>
                            <div class="productdiscrption">{{ trans('client/master.description') }}</div>
                            <div class="pricetag">
                              <span class="spiral"></span><a href="#" class="productcart">{{ trans('client/master.add_to_cart') }}</a>
                              <div class="price">
                                <div class="pricenew">{{ trans('client/master.price1') }}</div>
                                <div class="priceold">{{ trans('client/master.price2') }}</div>
                              </div>
                            </div>
                            <div class="shortlinks">
                              <a class="details" href="#">{{ trans('client/master.details') }}</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4">
                            <a href="#"><img alt="" src="img/product1.jpg"></a>
                          </div>
                          <div class="col-lg-8 col-sm-8">
                            <a class="prdocutname" href="product.html">{{ trans('client/master.product_name_here') }}</a>
                            <div class="productdiscrption">{{ trans('client/master.description') }} </div>
                            <div class="pricetag">
                              <span class="spiral"></span><a href="#" class="productcart">{{ trans('client/master.add_to_cart') }}</a>
                              <div class="price">
                                <div class="pricenew">{{ trans('client/master.price1') }}</div>
                                <div class="priceold">{{ trans('client/master.price2') }}</div>
                              </div>
                            </div>
                            <div class="shortlinks">
                              <a class="details" href="#">{{ trans('client/master.details') }}</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  <div>
                    <ul class="pagination pull-right">
                      <!-- pagination-->
                    </ul>
                  </div>
                </section>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection()
