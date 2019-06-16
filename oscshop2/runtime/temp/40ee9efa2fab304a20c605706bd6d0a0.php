<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:36:"./themes/shop/index/brand/index.html";i:1560232766;s:61:"/var/www/html/css/oscshop2/themes/shop/index/public/base.html";i:1560576167;}*/ ?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title><?php echo (isset($SEO['title']) && ($SEO['title'] !== '')?$SEO['title']:''); ?></title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="keywords" content="<?php echo (isset($SEO['keywords']) && ($SEO['keywords'] !== '')?$SEO['keywords']:''); ?>"/>
  <meta name="description" content="<?php echo (isset($SEO['description']) && ($SEO['description'] !== '')?$SEO['description']:''); ?>"/>
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">
  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="/public/static/shop_res/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/public/static/shop_res/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="/public/static/shop_res/pages/css/animate.css" rel="stylesheet">
  <link href="/public/static/shop_res/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="/public/static/shop_res/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="/public/static/shop_res/pages/css/components.css" rel="stylesheet">
  <link href="/public/static/shop_res/pages/css/slider.css" rel="stylesheet">
  <link href="/public/static/shop_res/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="/public/static/shop_res/corporate/css/style.css" rel="stylesheet">
  <link href="/public/static/shop_res/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="/public/static/shop_res/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="/public/static/shop_res/corporate/css/custom.css" rel="stylesheet">

  <!-- Theme styles END -->
  <style type="text/css">
    .ecommerce .site-logo{
      padding-top:20px;
      margin-right:20px;
    }
    .header-navigation, .header-navigation .dropdown{
        margin: 0 15px;
    }
    li.first_li.dropdown,li.first_li.dropdown:hover{
        width:200px;
        background: #e84d1c;
        text-align: center;
        margin-right: 20px;
        margin-left: 0;
        color:#fff;
    }
    li.dropdown>a{
        position: relative;
    }
    li.first_li.dropdown>div,li.first_li.dropdown>div:hover,li.first_li.dropdown>div:focus{
        padding: 34px 12px 32px;
        background: #e84d1c;
    }
    .header-navigation > ul > li.dropdown:hover > a::after{
       left:40%;
    }
    .brands .owl-carousel{
        padding:0;
    }
    .owl-carousel .owl-stage{
        width:auto!important;
    }
  </style>
  
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <!-- <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>主题色</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div> -->
    <!-- END BEGIN STYLE CUSTOMIZER  -->

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                
                <!-- BEGIN TOP BAR MENU -->
                <?php if(is_module_install('member')): ?>
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-left">
                        <!-- <li><a href="shop-wishlist.html">My Wishlist</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li> -->
                        <?php if(member('uid')): ?>
                        <li><a href="<?php echo url('member/order_member/index'); ?>">个人中心</a></li>
                        <li><a href="<?php echo url('/logout'); ?>">退出登录</a></li>
                        <?php else: ?>
                        <li>您好，请【<a class="pointer" id="login">登录</a>】</li>
                        <li>欢迎【<a class="pointer" id="reg">注册</a>】</li>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <!-- END TOP BAR MENU -->
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><i class="fa fa-weixin" style="font-size: 16px;"></i> <span>yubkhokhjk</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="<?php echo url('/index/'); ?>"><img src="/public/static/shop_res/corporate/img/logos/logo-red.png" alt="Metronic Shop UI" ></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
          <div class="top-cart-info">
            <a href="javascript:void(0);" class="top-cart-info-count"><?php if(session('total')): ?><?php echo \think\Session::get('total'); else: ?>0<?php endif; ?> 件</a>
            <a href="javascript:void(0);" class="top-cart-info-value">￥<?php echo $total_price; ?></a>
          </div>
          <i class="fa fa-shopping-cart"></i>
                        
          <div class="top-cart-content-wrapper">
            <div class="top-cart-content">
              <?php if($cartlist): ?>
              <ul class="scroller" style="height:100%;">
                <?php if(is_array($cartlist) || $cartlist instanceof \think\Collection || $cartlist instanceof \think\Paginator): $i = 0; $__LIST__ = $cartlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cart): $mod = ($i % 2 );++$i;?>
                <li>
                  <a href="<?php echo url('/goods/'.$cart['goods_id']); ?>"><img src="/<?php echo $cart['image']; ?>" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x <?php echo $cart['quantity']; ?></span>
                  <strong><a href="<?php echo url('/goods/'.$cart['goods_id']); ?>"><?php echo substr($cart['name'],0,72); ?>... </a><small style="color:#b0b0b0;"> <?php foreach ($cart['option'] as $option) { ?>
                      <?php echo $option['name']; ?>:<?php echo $option['value']; ?> &nbsp;
                      <?php } ?></small></strong>
                  <em>￥<?php echo round($cart['price'] ,2); ?></em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                 <?php endforeach; endif; else: echo "" ;endif; ?> 
              </ul>
              <div class="text-right">
                <a href="<?php echo url('/cart/'); ?>" class="btn btn-primary">查看购物车</a>
                <a href="shop-checkout.html" class="btn btn-primary">结算</a>
              </div>
              <?php else: ?>
              <div style="text-align: center;margin:20px;">您的购物车还没有商品！</div>
              <div class="text-right">
                <a href="<?php echo url('/cart/'); ?>" class="btn btn-default">查看购物车</a>
                <a href="shop-checkout.html" class="btn btn-default">结算</a>
              </div>
              <?php endif; ?>
            </div>
          </div>            
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation" style="border-bottom: 1px solid #e84d1c;">
          <ul>


            <li class="dropdown first_li" >
              <div class="dropdown-toggle" data-toggle="dropdown" data-target="#"  style="color:#fff;">
               全部分类
              </div>
              <!-- BEGIN DROPDOWN MENU -->
              <ul class="dropdown-menu" style="width:200px;">
                  <?php if(is_array($top_nav) || $top_nav instanceof \think\Collection || $top_nav instanceof \think\Paginator): $i = 0; $__LIST__ = $top_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?>
                    <li class="fir-childmenu">
                        <a href="<?php echo url('/category/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
                        <?php if(isset($category['children'])): ?>
                        <ul class="dropdown-menu sec-chlidmenu">
                            <?php if(is_array($category['children']) || $category['children'] instanceof \think\Collection || $category['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $category['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$children): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a href="<?php echo url('/category/'.$children['id']); ?>"><?php echo $children['name']; ?></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
              <!-- END DROPDOWN MENU -->
            </li>
            <li class="dropdown" id="brand-nav">
              <a class="dropdown-toggle" data-toggle="" data-target="#" href="<?php echo url('/index/brand/index'); ?>">
                  品牌专区
              </a>
            </li>
            <li class="dropdown" id="price-nav">
              <a class="dropdown-toggle"  data-target="#" href="">
                  限时特价
              </a>
            </li>
            <li class="dropdown" id="australia-nav">
              <a class="dropdown-toggle"  data-target="#" href="">
                  澳洲直邮
              </a>
            </li>
            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="请输入..." class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">搜索</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->


<style>
    .letters>span>a{
        padding:10px;font-size: 20px;color:inherit;
    }
    .letters>span>a:hover{
        color:#e84d1c;
    }
    .letters>span:first-child>a{
        padding-left:0;
    }
</style>
<div class="main">
    <div class="container">
        <!-- BEGIN BRANDS -->
        <!-- BEGIN ALL LETTERS -->
            <div class="letters" style="padding:20px 0 40px;">
                <?php if(is_array($letters) || $letters instanceof \think\Collection || $letters instanceof \think\Paginator): $i = 0; $__LIST__ = $letters;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?><span><a href="#<?php echo $one; ?>"><?php echo $one; ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        <!-- END ALL LETTERS -->
        <?php if(is_array($brands_list) || $brands_list instanceof \think\Collection || $brands_list instanceof \think\Paginator): $i = 0; $__LIST__ = $brands_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$first_letter): $mod = ($i % 2 );++$i;?>
        <div class="row margin-bottom-40" id="<?php echo $key; ?>">
            <!-- BEGIN EACH LETTER BRAND -->
            <div class="col-md-12 sale-product">
                <h2 ><?php echo $key; ?></h2>
                <div class="owl-carousel owl-carousel4" style="border-top: 5px solid #e84d1c;padding-top:10px;">
                    <?php if(is_array($first_letter) || $first_letter instanceof \think\Collection || $first_letter instanceof \think\Paginator): $i = 0; $__LIST__ = $first_letter;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?>
                    <div style="padding:10px 20px;">
                        <a href="<?php echo url('/brands/'.$vol['brand_id']); ?>">
                            <div class="product-item" style="margin:0 0 18px;margin-right: 0;padding:0; ">
                                <div class="pi-img-wrapper" style="height:130px;">
                                    <img src="/public/uploads//<?php echo $vol['image']; ?>" class="img-responsive" style="max-height:130px;" alt="Berry Lace Dress">
                                </div>
                            </div>
                        </a>
                        <h5 style="text-align: center;"><a href="<?php echo url('/brands/'.$vol['brand_id']); ?>" style="color:#848484;"><?php echo $vol['name']; ?></a></h6>
                    </div>
                    <?php endforeach; endif; else: echo "$empty" ;endif; ?>
                </div>
            </div>
            <!-- END EACH LETTER BRAND -->
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- END BRANDS -->
    </div>
</div>


    <!-- BEGIN BRANDS -->
    <?php if(!$no_bottom): ?>
    <div class="brands">
      <div class="container">
            <div class="owl-carousel owl-carousel6-brands">
               <?php if(is_array($brands) || $brands instanceof \think\Collection || $brands instanceof \think\Paginator): $i = 0; $__LIST__ = $brands;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('/brand/'.$val['brand_id']); ?>"><img src="/public/uploads//<?php echo $val['image']; ?>" alt="<?php echo $val['name']; ?>" title="<?php echo $val['name']; ?>"></a>
               <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- END BRANDS -->

    <!-- BEGIN STEPS -->
    <div class="steps-block steps-block-red">
      <div class="container">
        <div class="row">
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-truck"></i>
            <div>
              <h2>Free shipping</h2>
              <em>Express delivery withing 3 days</em>
            </div>
            <span>&nbsp;</span>
          </div>
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-gift"></i>
            <div>
              <h2>Daily Gifts</h2>
              <em>3 Gifts daily for lucky customers</em>
            </div>
            <span>&nbsp;</span>
          </div>
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-phone"></i>
            <div>
              <h2>477 505 8877</h2>
              <em>24/7 customer care available</em>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END STEPS -->

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>关于我们</h2>
            <p>Health Trade为中国客户提供新西兰直购商品，正品保障 </p>
            Email: <a href="mailto:info@metronic.com">info@metronic.com</a>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM INFO BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>网站信息</h2>
            <ul class="list-unstyled">
              <li><a href="javascript:;">关于我们</a></li>
              <li><a href="javascript:;">联系我们</a></li>
              <li><a href="javascript:;">帮助中心</a></li>
              
            </ul>
          </div>
          <!-- END INFO BLOCK -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>购物信息</h2>
             <ul class="list-unstyled">
                <li> <a href="javascript:;">支付方式</a></li>
                <li> <a href="contacts.html">配送方式</a></li>
                <li><a href="javascript:;">取消订单及退货</a></li>
                <li><a href="javascript:;">包裹赔付</a></li>
            </ul>
                  
          </div>
          <!-- END TWITTER BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>其他信息</h2>
             <ul class="list-unstyled">
                <li> <a href="javascript:;">隐私保护</a></li>
                <li> <a href="contacts.html">网站使用条款</a></li>
            </ul>
          </div>
          <!-- END BOTTOM CONTACTS -->
        </div>
        <hr>
        <div class="row">
          <!-- BEGIN SOCIAL ICONS -->
        <!--   <div class="col-md-6 col-sm-6">
            <ul class="social-icons">
              <li><a class="rss" data-original-title="rss" href="javascript:;"></a></li>
              <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
              <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
              <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
              <li><a class="linkedin" data-original-title="linkedin" href="javascript:;"></a></li>
              <li><a class="youtube" data-original-title="youtube" href="javascript:;"></a></li>
              <li><a class="vimeo" data-original-title="vimeo" href="javascript:;"></a></li>
              <li><a class="skype" data-original-title="skype" href="javascript:;"></a></li>
            </ul>
          </div> -->
          <!-- END SOCIAL ICONS -->
          <!-- BEGIN NEWLETTER -->
         <!--  <div class="col-md-6 col-sm-6">
            <div class="pre-footer-subscribe-box pull-right">
              <h2>Newsletter</h2>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="请输入您的邮箱" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div> 
          </div> -->
          <!-- END NEWLETTER -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4 padding-top-10">
            Copyright 2017 - Optimlife Pte Limited - All rights served.</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-4 col-sm-4">
            <ul class="list-unstyled list-inline pull-right">
              <li><img src="/public/static/shop_res/corporate/img/payments/western-union.jpg" alt="We accept Western Union" title="We accept Western Union"></li>
              <li><img src="/public/static/shop_res/corporate/img/payments/american-express.jpg" alt="We accept American Express" title="We accept American Express"></li>
              <li><img src="/public/static/shop_res/corporate/img/payments/MasterCard.jpg" alt="We accept MasterCard" title="We accept MasterCard"></li>
              <li><img src="/public/static/shop_res/corporate/img/payments/PayPal.jpg" alt="We accept PayPal" title="We accept PayPal"></li>
              <li><img src="/public/static/shop_res/corporate/img/payments/visa.jpg" alt="We accept Visa" title="We accept Visa"></li>
            </ul>
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class="col-md-4 col-sm-4 text-right">
            <p class="powered">KeenThemes</p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 700px;">
            <div class="product-page product-pop-up">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                  <div class="product-main-image">
                    <img src="/public/static/shop_res/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive">
                  </div>
                  <div class="product-other-images">
                    <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="/public/static/shop_res/pages/img/products/model3.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="/public/static/shop_res/pages/img/products/model4.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="/public/static/shop_res/pages/img/products/model5.jpg"></a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                  <h2>Cool green dress with red bell</h2>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span>47.00</strong>
                      <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                      Availability: <strong>In Stock</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat Nostrud duis molestie at dolore.</p>
                  </div>
                  <div class="product-page-options">
                    <div class="pull-left">
                      <label class="control-label">Size:</label>
                      <select class="form-control input-sm">
                        <option>L</option>
                        <option>M</option>
                        <option>XL</option>
                      </select>
                    </div>
                    <div class="pull-left">
                      <label class="control-label">Color:</label>
                      <select class="form-control input-sm">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Black</option>
                      </select>
                    </div>
                  </div>
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">加入购物车</button>
                    <a href="shop-item.html" class="btn btn-default">More details</a>
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
    </div>
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="/public/static/shop_res/plugins/respond.min.js"></script>  
    <![endif]-->
    <script src="/public/static/shop_res/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/public/static/shop_res/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/public/static/shop_res/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="/public/static/shop_res/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="/public/static/shop_res/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/public/static/shop_res/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/public/static/shop_res/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='/public/static/shop_res/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="/public/static/shop_res/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <script src="/public/static/shop_res/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="/public/static/shop_res/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script src="/public/static/artDialog/artDialog.js"></script>
    <script src="/public/static/artDialog/iframeTools.js"></script>
    <link href="/public/static/artDialog/skins/default.css" rel="stylesheet" type="text/css" /> 
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initUniform();
            // Layout.initTwitter();
        });
        

        function get_url_attr(name) {
          var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
          var r = window.location.search.substr(1).match(reg);
          if (r != null) return unescape(r[2]); return null;
        } 
        $(document).ready(function() {
            $("ul.nav li").hover(function(){
                $(this).addClass("on");
            },
            function(){
                $(this).removeClass("on");
            });    
        });
        $('.fir-childmenu').mouseover(function(){
            $(this).children('ul').css('display','block');
            });
        $('.fir-childmenu').mouseout(function(){
            $(this).children('ul').css('display','none');
        });
        $('#reg').click(function(){
          art.dialog.open("/reg", 
            { id:'reg',
              title: '新 用 户注 册',
              lock: true
            });
        });
        $('#login').click(function(){
          art.dialog.open("/login", 
            { id:'login',
              title: '用 户 登 录',
              lock: true
            });
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>

<script>
    $('#brand-nav').addClass('active');
</script>

<!-- END BODY -->
</html>	