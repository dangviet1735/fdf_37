<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> @yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta http-equiv="X-UA-Compatible" content="IE=100" >
{{ Html::style(asset('css/client-css/fonts-googleapis-Open-Sans.css')) }}
{{ Html::style(asset('css/client-css/fonts-googleapis-Crete-Round.css')) }}
{{ Html::style(asset('css/client-css/bootstrap.css')) }}
{{ Html::style(asset('css/client-css/style.css')) }}
{{ Html::style(asset('css/client-css/flexslider.css')) }}
{{ Html::style(asset('css/client-css/jquery.fancybox.css')) }}
{{ Html::style(asset('css/client-css/portfolio.css')) }}
{{ Html::style(asset('css/client-css/cloud-zoom.css')) }}
{{ Html::style(asset('css/font-awesome/css/font-awesome.min.css')) }}
{{ Html::style(asset('css/client-css/mycss.css')) }}
{{ Html::script(asset('js/client-js/jquery.js')) }}
</head>
<body>
<!-- Header Start -->
<header>
    <div class="headerstrip">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> <a href="index.html" class="logo pull-left"><img class="logoImage" src="img/logo.jpeg" alt="SimpleOne" title="SimpleOne"></a>
                    <!-- Top Nav Start -->
                    <div class="pull-left">
                        <div class="navbar" id="topnav">
                            <div class="navbar-inner">
                                <ul class="nav" >
                                    <li><a class="home active" href="#">{{ trans('client/master.home') }}</a> </li>
                                    <li><a class="myaccount" href="#">{{ trans('client/master.my_account') }}</a> </li>
                                    <li><a class="shoppingcart" href="#">{{ trans('client/master.shopping_cart') }}</a> </li>
                                    <li><a class="checkout" href="#">{{ trans('client/master.checkout') }}</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav End -->
                    <div class="pull-right">
                        <form class="form-search top-search">
                            <input type="text" class="input-medium search-query" placeholder="Search Here…">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="headerdetails">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <ul class="nav topcart pull-left">
                    <li class="dropdown hover carticon ">
                     <a href="#" class="dropdown-toggle" >{{ trans('client/master.shopping_cart') }}
                         <span class="label label-orange font14">{{ trans('client/master.item') }}</span>{{ trans('client/master.price') }}<b class=""></b></a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="categorymenu">
            <nav class="subnav">
                <ul class="nav-pills categorymenu">
                    <li><a class="active"  href="index.html">{{ trans('client/master.home') }}</a>
                    </li>

                    <li><a href="shopping-cart.html">{{ trans('client/master.food') }}</a> </li>
                    <li><a href="shopping-cart.html">{{ trans('client/master.drink') }}</a> </li>
                    <li><a href="checkout.html">{{ trans('client/master.checkout') }}</a> </li>
                    <li><a href="myaccount.html">{{ trans('client/master.my_account_other') }}</a>
                        <div>
                            <ul>
                                <li><a href="myaccount.html">{{ trans('client/master.my_account') }}</a> </li>
                                <li><a href="login.html">{{ trans('client/master.login') }}</a> </li>
                                <li><a href="register.html">{{ trans('client/master.register') }}</a> </li>
                                <li><a href="#">{{ trans('client/master.suggest') }}</a> </li>
                            </ul>
                        </div>
                    </li>
                    <!-- /.dropdown-user -->
                </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header End -->

   @yield('content')

<!-- Footer -->
<footer id="footer">
  <section class="footersocial">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 aboutus col-sm-6">
          <h2>{{ trans('client/master.about_us') }}</h2>
          <p>{{ trans('client/master.text') }}</p>
        </div>
        <div class="col-lg-3 contact col-sm-6">
          <h2>{{ trans('client/master.contact_us') }} </h2>
          <ul>
            <li class="phone">{{ trans('client/master.sdt1') }}</li>
            <li class="mobile">{{ trans('client/master.sdt2') }}</li>
            <li class="email">{{ trans('client/master.mail1') }}</li>
            <li class="email">{{ trans('client/master.mail2') }}</li>
          </ul>
        </div>
        <div class="col-lg-3 twitter col-sm-6">
          <h2>{{ trans('client/master.twitter') }}</h2>
          <div id="twitter">
          </div>
        </div>
        <div class="col-lg-3 facebook col-sm-6">
          <h2>{{ trans('client/master.facebook') }}</h2>
         <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
        <div class="fb-like-box" data-href="http://www.facebook.com/envato" data-width="292" data-show-faces="true" data-colorscheme="light" data-stream="false" data-show-border="false" data-header="false"  data-height="240"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="copyrightbottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">{{ trans('client/master.owner') }}</div>
        <div class="col-lg-6 textright">{{ trans('client/master.dr') }}</div>
      </div>
    </div>
  </section>
  <a id="gotop" href="#">{{ trans('client/master.back_to_top') }}</a>
</footer>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{ Html::script(asset('js/client-js/bootstrap.js')) }}
{{ Html::script(asset('js/client-js/respond.min.js')) }}
{{ Html::script(asset('js/client-js/application.js')) }}
{{ Html::script(asset('js/client-js/bootstrap-tooltip.js')) }}
{{ Html::script(asset('js/client-js/jquery.fancybox.js')) }}
{{ Html::script(asset('js/client-js/jquery.flexslider.js')) }}
{{ Html::script(asset('js/client-js/cloud-zoom.1.0.2.js')) }}
{{ Html::script(asset('js/client-js/jquery.validate.js')) }}
{{ Html::script(asset('js/client-js/jquery.carouFredSel-6.1.0-packed.js')) }}
{{ Html::script(asset('js/client-js/jquery.mousewheel.min.js')) }}
{{ Html::script(asset('js/client-js/jquery.touchSwipe.min.js')) }}
{{ Html::script(asset('js/client-js/jquery.ba-throttle-debounce.min.js')) }}
{{ Html::script(asset('js/client-js/jquery.isotope.min.js')) }}
{{ Html::script(asset('js/client-js/custom.js')) }}
</body>
</html>
