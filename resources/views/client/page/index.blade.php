@extends('client.master')

@section('title', trans('client/master.title'))
@section(trans('admin/master.content'))
<div id="maincontainer">
  <!-- Slider Start-->
  <section class="slider">
    <div class="container">
    </div>
  </section>
  <!-- Slider End-->

  <div class="container">
    <div class="row">
      <aside class="col-lg-3 mt40">
        <!-- Must Have-->
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
        <!-- Testimonial-->
        <div class="sidewidt">
          <h2 class="heading2"><span>{{ trans('client/master.testimonials') }}</span></h2>
          <div class="flexslider" id="testimonialsidebar">
            <ul class="slides">
              <li>
                {{ trans('client/master.index1') }}<br>
                <span class="pull-right orange">{{ trans('client/master.by1') }}By : Themeforest</span>
              </li>
              <li>
                {{ trans('client/master.index2') }}<br>
                <span class="pull-right orange">{{ trans('client/master.by2') }}</span>
              </li>
              <li>
                {{ trans('client/master.index3') }}<br>
                <span class="pull-right orange">{{ trans('client/master.by1') }}</span>
              </li>
              <li>
                {{ trans('client/master.index4') }}<br>
                <span class="pull-right orange">{{ trans('client/master.by2') }}</span>
              </li>
            </ul>
          </div>
        </div>
        <!-- Popular Brand-->
        <section id="popularbrands" >
          <h2 class="heading2"><span>{{ trans('client/master.popular_brands') }}</span></h2>
          <div class="brandcarousalrelative">
            <ul id="brandcarousal">
              <li><img src="img/brand1.jpg" alt="" title=""/></li>
              <li><img src="img/brand2.jpg" alt="" title=""/></li>
              <li><img src="img/brand3.jpg" alt="" title=""/></li>
              <li><img src="img/brand4.jpg" alt="" title=""/></li>
            </ul>
            <div class="clearfix"></div>
            <a id="prev" class="prev" href="#">&lt;</a>
            <a id="next" class="next" href="#">&gt;</a>
          </div>
        </section>
      </aside>
      <!-- Featured Product-->
      <div class="col-lg-9">
        <section id="featured" class="row mt40">
          <h1 class="heading1 mt0"><span class="maintext">{{ trans('client/master.food') }}</span><span class="subtext">{{ trans('client/master.somfp') }}</span></h1>
          <ul class="thumbnails">
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
          <h1 class="heading1 mt0"><span class="maintext">{{ trans('client/master.drink') }}</span><span class="subtext"> {{ trans('client/master.somfp') }}</span></h1>
          <ul class="thumbnails">
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
        </section>
      </div>
    </div>

    <!-- Newsletter Signup-->
    <section id="newslettersignup" class="mt0">
      <div class="container">
        <div class="pull-left newsletter">
          <h2>{{ trans('client/master.newsletters_signup') }}</h2>
          {{ trans('client/master.index5') }}</div>
      </div>
    </section>
  </div>
</div>
<!-- /maincontainer -->
@endsection()
