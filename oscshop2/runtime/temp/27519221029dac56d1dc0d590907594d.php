<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:35:"./themes/shop/index/cart\index.html";i:1559114112;s:36:"./themes/shop/index/public/base.html";i:1559109076;}*/ ?>
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
                        <!-- BEGIN CURRENCIES -->
                        <!-- <li class="shop-currencies">
                            <a href="javascript:void(0);">鈧</a>
                            <a href="javascript:void(0);">拢</a>
                            <a href="javascript:void(0);" class="current">$</a>
                        </li> -->
                        <!-- END CURRENCIES -->
                        <!-- BEGIN LANGS -->
                       <!--  <li class="langs-block">
                            <a href="javascript:void(0);" class="current">English </a>
                            <div class="langs-block-others-wrapper"><div class="langs-block-others">
                              <a href="javascript:void(0);">French</a>
                              <a href="javascript:void(0);">Germany</a>
                              <a href="javascript:void(0);">Turkish</a>
                            </div></div>
                        </li> -->
                        <!-- END LANGS -->
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
        <div class="header-navigation">
          <ul>
            <?php if(is_array($top_nav) || $top_nav instanceof \think\Collection || $top_nav instanceof \think\Paginator): $i = 0; $__LIST__ = $top_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="<?php echo url('/category/'.$category['id']); ?>">
               <?php echo $category['name']; ?>
              </a>
                
              <!-- BEGIN DROPDOWN MENU -->
              <?php if(isset($category['children'])): ?>
              <ul class="dropdown-menu">
                <?php if(is_array($category['children']) || $category['children'] instanceof \think\Collection || $category['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $category['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$children): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo url('/category/'.$children['id']); ?>"><?php echo $children['name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?> 
              </ul>
              <?php endif; ?>
              <!-- END DROPDOWN MENU -->
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
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


    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>购物车</h1>
             <?php if($goods): ?>
            <div class="goods-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                <table summary="Shopping cart">
                  <tr>
                    <th class="goods-page-image">图片</th>
                    <th class="goods-page-description">名称及规格</th>
                    <th class="goods-page-ref-no">货号</th>
                    <th class="goods-page-quantity">数量</th>
                    <th class="goods-page-price">单价</th>
                    <th class="goods-page-total" colspan="2">总计</th>
                  </tr>
                  <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?>
                  <tr class="goods<?php echo $d['cart_id']; ?>">
                    <td class="goods-page-image">
                      <a href="javascript:;"><img src="/<?php echo $d['image']; ?>" alt="Berry Lace Dress"></a>
                    </td>
                    <td class="goods-page-description">
                      <h3><a href="javascript:;"><?php echo $d['name']; ?></a></h3>
                      <p>
                      <?php foreach ($d['option'] as $option) { ?>
                      <?php echo $option['name']; ?>:<?php echo $option['value']; ?> &nbsp;&nbsp;
                      <?php } ?>
                      </p>
                     <!--  <em>More info is here</em> -->
                    </td>
                    <td class="goods-page-ref-no">
                      <?php echo $d['model']; ?>
                    </td>
                    <td class="goods-page-quantity">
                      <div class="product-quantity">
                          <div class="input-group bootstrap-touchspin input-group-sm" id="select_number<?php echo $d['cart_id']; ?>">
                          	<span class="input-group-btn">
                          		<button class="btn quantity-down bootstrap-touchspin-down increase"  type="button">
                          			<i class="fa fa-angle-down"></i>
                          		</button>
                          	</span>
                          	<input id="product-quantity" type="text" value="<?php echo $d['quantity']; ?>" readonly="" onchange='change_quantity("<?php echo $d['goods_id']; ?>",this,"<?php echo $d['cart_id']; ?>","<?php echo $d['cart_id']; ?>")' class="form-control input-sm" style="display: block;" name="quantity<?php echo $d['goods_id']; ?>">
                          	<span class="input-group-btn">
                          		<button class="decrease btn quantity-up bootstrap-touchspin-up" type="button">
                          			<i class="fa fa-angle-up"></i>
                          		</button>
                          	</span>
                          </div>
                      </div>
                    </td>
                    <td class="goods-page-price">
                      <strong>￥<?php echo $d['price']; ?></strong>
                    </td>
                    <td class="goods-page-total">
                      <strong>￥<?php echo $d['total']; ?></strong>
                    </td>
                    <td class="del-goods-col">
                      <a class="del-goods" href="<?php echo url('/remove/'.$d['cart_id']); ?>">&nbsp;</a>
                    </td>
                  </tr>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
                </div>

                <div class="shopping-total">
                  <ul>
                    <li>
                      <em>小计</em>
                      <strong class="price">￥<?php echo $total_price; ?></strong>
                    </li>
                    <li>
                      <em>运费</em>
                      <strong class="price">￥0.00</strong>
                    </li>
                    <li class="shopping-total-price">
                      <em>总计</em>
                      <strong class="price">￥<?php echo $total_price; ?></strong>
                    </li>
                  </ul>
                </div>
              </div>
              <button class="btn btn-default" type="submit">继续购物 <i class="fa fa-shopping-cart"></i></button>
              <button class="btn btn-primary" type="submit">结算 <i class="fa fa-check"></i></button>
            </div>
            <?php else: ?>
            <div class="shopping-cart-page">
              <div class="shopping-cart-data clearfix">
                <p style="text-align: center;padding:30px;font-size:16px;">您的购物车还没有商品!</p>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
          <div class="col-md-12 col-sm-12">
            <h2>您可能还需要</h2>
            <div class="owl-carousel owl-carousel4">
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/public/static/shop_res/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="/public/static/shop_res/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
                  <div class="sticker sticker-new"></div>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/public/static/shop_res/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="/public/static/shop_res/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/public/static/shop_res/pages/img/products/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="/public/static/shop_res/pages/img/products/k3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/public/static/shop_res/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="/public/static/shop_res/pages/img/products/k4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress4</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
                  <div class="sticker sticker-sale"></div>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/public/static/shop_res/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="/public/static/shop_res/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/public/static/shop_res/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="/public/static/shop_res/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress6</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END SIMILAR PRODUCTS -->
      </div>
    </div>


    <!-- BEGIN BRANDS -->
    <div class="brands">
      <div class="container">
            <div class="owl-carousel owl-carousel6-brands">
               <?php if(is_array($brands) || $brands instanceof \think\Collection || $brands instanceof \think\Paginator): $i = 0; $__LIST__ = $brands;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('/brand/'.$val['brand_id']); ?>"><img src="/<?php echo $val['image']; ?>" alt="<?php echo $val['name']; ?>" title="<?php echo $val['name']; ?>"></a>
               <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
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

function update_cart(id,qty,cart_id,key){
  $.post(
    '<?php echo url("/update"); ?>',
    {id:id,q:qty,cart_id:cart_id},
    function(json){     
      
      if (json['success']) {        
        
        $('#cart a').text(json['success']);
        
        $('#select_number' + key).find("input").val(qty);
        
        $('.goods' + key).find("td.goods-page-price>strong").text('￥ '+json['price']);
        
        $('.goods' + key).find("td.goods-page-total>strong").text('￥ '+json['total_price']);
        
        $('.shopping-total-price>strong').text('￥ '+json['total_all_price']);
        
        $('#weight').text(json['weight']);
        
      }else if(json['error']){
        if(json['data']){
          $('#select_number' + key).find("input").val(json['data']);
        }
        alert(json['error']);     
        
      } 
    }
  );
}

function change_quantity(goods_id,input,cart_id,key){
  var qty=input.value;  
  update_cart(goods_id,qty,cart_id,key);
}

// function changeQty(increase,goods_id,cart_id,key) {
//     var qty = parseInt($('#select_number' + key).find("input").val());  
//     if ( !isNaN(qty) ) {
//       //增加
//       if(increase){     
//         update_cart(goods_id,(qty+1),cart_id,key);
//       }else{
//         update_cart(goods_id,(qty-1),cart_id,key);
//       }     
//     }
// } 

</script>

<!-- END BODY -->
</html>	