@extends('client.master')

@section(trans('admin/master.content'))
<div id="maincontainer">
  <section id="product">
    <div class="container">
      <!-- Product Details-->
      <div class="row">
       <!-- Left Image-->
        <div class="col-lg-5">
          <ul class="thumbnails mainimage">
            <li>
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="img/product1big.jpg">
                <img src="img/product1big.jpg" alt="" title="">
              </a>
            </li>
          </ul>
          <span>{{ trans('client/master.image_zoom') }}</span>
        </div>
         <!-- Right Details-->
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="productname"><span class="bgnone">{{ trans('client/master.name_product') }}</span></h1>
              <div class="productprice">
                <div class="productpageprice">
                  <span class="spiral"></span> </div>
                <div class="productpageoldprice">{{ trans('client/master.old_price') }}</div>
                <ul class="rate">
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="off"></li>
                  <li class="off"></li>
                </ul>
              </div>
              <div class="productdesc">
                      <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#description">{{ trans('client/master.description') }}</a>
                        </li>
                        <li><a href="#specification">{{ trans('client/master.specification') }}</a>
                        </li>
                        <li><a href="#review">{{ trans('client/master.review') }}</a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="description">           
                        </div>
                        <div class="tab-pane " id="specification">
                          <ul class="productinfo">
                            <li>
                              <span class="productinfoleft">{{ trans('client/master.detail_name') }}</span> </li>
                            <li>
                              <span class="productinfoleft">{{ trans('client/master.detail_quanity') }}</span> </li>
                            <li>
                              <span class="productinfoleft">{{ trans('client/master.manufacturing_date') }}</span> </li>
                            <li>
                              <span class="productinfoleft">{{ trans('client/master.expiry_date') }}</span> </li>  
                            <li>
                              <span class="productinfoleft">{{ trans('client/master.status') }} </span> </li>
                          </ul>
                        </div>
                        <div class="tab-pane" id="review">
                          <h3>{{ trans('client/master.write_a_review') }}</h3>
                          {!! Form::open(['class' => 'form-vertical']) !!}
                          <form class="form-vertical">
                            <fieldset>
                              <div class="control-group">
                                {!! Form::label('content', trans('client/master.review'), ['class' => 'control-label']) !!}
                                <div class="controls">
                                  {!! Form::textarea('content', null, ['class' => 'col-lg-3']) !!}
                                </div>
                              </div>
                            </fieldset>
                            {!! Form::submit(trans('client/master.submit'), ['class' => 'btn btn-orange']) !!}
                          {!! Form::close() !!}
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   <ul class="productpagecart">
                <li><a class="cart" href="#">{{ trans('client/master.add_to_cart') }}</a>
                </li>
              </ul>
                </div>
             
         <!-- Product Description tab & comments-->
        </div>
      </div>
    </div>
  </section>
  <!--  Related Products-->
  <section id="related" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">{{ trans('client/master.related_products') }}</span><span class="subtext">{{ trans('client/master.somfp') }}</span></h1>
      <ul class="thumbnails">
        <li class="col-lg-3 col-sm-3">
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
        <li class="col-lg-3 col-sm-3">
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
    </div>
  </section>
</div>
@endsection()
