<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:36:"./themes/shop/index/goods\index.html";i:1559182722;s:36:"./themes/shop/index/public/base.html";i:1559181921;}*/ ?>
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
  
<script>
  function changeQty(increase) {
      var qty = parseInt($('.select_number').find("input").val());
      if ( !isNaN(qty) ) {
          qty = increase ? qty+1 : (qty ><?php echo $goods['minimum']; ?>?qty-1:<?php echo $goods['minimum']; ?>);
          $('.select_number').find("input").val(qty);
      }
  }   
</script>

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
        <ul class="breadcrumb">
            <li><a href="index.html">首页</a></li>
            <li><a href="">分类</a></li>
            <li class="active"></li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-5">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Ladies</a></li>
              <li class="list-group-item clearfix dropdown active">
                <a href="shop-product-list.html" class="collapsed">
                  <i class="fa fa-angle-right"></i>
                  Mens
                  
                </a>
                <ul class="dropdown-menu" style="display:block;">
                  <li class="list-group-item dropdown clearfix active">
                    <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Shoes </a>
                      <ul class="dropdown-menu" style="display:block;">
                        <li class="list-group-item dropdown clearfix">
                          <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic </a>
                          <ul class="dropdown-menu">
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                          </ul>
                        </li>
                        <li class="list-group-item dropdown clearfix active">
                          <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Sport  </a>
                          <ul class="dropdown-menu" style="display:block;">
                            <li class="active"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li>
                </ul>
              </li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Kids</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Accessories</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sports</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Brands</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Electronics</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Home &amp; Garden</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Custom Link</a></li>
            </ul>

            <div class="sidebar-products clearfix">
              <h2>热销商品</h2>
              <div class="item">
                <a href="shop-item.html"><img src="/public/static/shop_res/pages/img/products/k1.jpg" alt="Some Shoes in Animal with Cut Out"></a>
                <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                <div class="price">$31.00</div>
              </div>
              <div class="item">
                <a href="shop-item.html"><img src="/public/static/shop_res/pages/img/products/k4.jpg" alt="Some Shoes in Animal with Cut Out"></a>
                <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                <div class="price">$23.00</div>
              </div>
              <div class="item">
                <a href="shop-item.html"><img src="/public/static/shop_res/pages/img/products/k3.jpg" alt="Some Shoes in Animal with Cut Out"></a>
                <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                <div class="price">$86.00</div>
              </div>
            </div>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="product-page">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="product-main-image large-image">
                    <a href="/public/uploads/<?php echo $goods['image']; ?>" class="cloud-zoom" id="zoom1" rel="" > 
                      <img src="/<?php echo resize($goods['image'],300,300); ?>" alt="Cool green dress with red bell" class="img-responsive" id="zoom1" data-BigImgsrc="/<?php echo resize($goods['image'],300,300); ?>">
                    </a>
                  </div>
                  <div class="product-other-images">
                    <?php if(is_array($image) || $image instanceof \think\Collection || $image instanceof \think\Paginator): $i = 0; $__LIST__ = $image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
                    <a href="/public/uploads/<?php echo $image['image']; ?>" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '/<?php echo resize($image['image'],300,300); ?>'"><img alt="Berry Lace Dress" src="/<?php echo resize($image['image'],100,100); ?>"></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <h1><?php echo $goods['name']; ?></h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>￥</span><?php echo $goods['price']; ?></strong>
                      <em>￥<span>62.00</span></em>
                    </div>
                    <?php if($goods['subtract']): ?>
                    <div class="availability">
                      库存: <strong><?php echo $goods['quantity']; ?><?php echo $goods['sku']; ?></strong>
                    </div>
                    <?php endif; ?>
                  </div>
                  <div class="description">
                    <ul class="list-unstyled">
                      <li>品牌：纽崔莱</li>
                      <li>产地：<?php echo $goods['location']; ?></li>
                      <li>货号：<?php echo $goods['model']; ?></li>
                    </ul>
                  </div>
                  <?php if($options): ?>  
                  <div class="product-page-options">
                     <?php if(is_array($options) || $options instanceof \think\Collection || $options instanceof \think\Paginator): $i = 0; $__LIST__ = $options;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>  
                    <div class="pull-left">
                      <label class="control-label"><?php echo $option['name']; ?>:</label>
                      <select class="form-control input-sm" name="option[<?php echo $goods['goods_id']; ?>,<?php echo $option['option_id']; ?>]">
                        <option value=""> --- 请选择 --- </option>
                       <?php if(is_array($option['goods_option_value']) || $option['goods_option_value'] instanceof \think\Collection || $option['goods_option_value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $option['goods_option_value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option_value): $mod = ($i % 2 );++$i;?> 
                          <option title="数量<?php echo $option_value['quantity']; ?>" value="<?php echo $option_value['option_value_id']; ?>"><?php echo $option_value['name']; if($option_value['goods_price'] != '0.00'): ?>   
                              (<?php echo $option_value['price_prefix']; ?>￥<?php echo $option_value['price']; ?>)
                            <?php endif; ?>
                          </option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                      </select>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
                  <?php endif; ?>
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary buy-now" type="submit">立即购买</button>
                    <button class="btn btn-primary" type="submit">加入购物车</button>
                  </div>
                  <!-- <div class="review">
                    <input type="range" value="4" step="0.25" id="backing4">
                    <div class="rateit" data-rateit-backingfld="#backing4" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                    </div>
                    <a href="javascript:;">7 reviews</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:;">Write a review</a>
                  </div> -->
                 <!--  <ul class="social-icons">
                    <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                    <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                    <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                    <li><a class="evernote" data-original-title="evernote" href="javascript:;"></a></li>
                    <li><a class="tumblr" data-original-title="tumblr" href="javascript:;"></a></li>
                  </ul> -->
                </div>

                <div class="product-page-content">
                  <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#Description" data-toggle="tab">商品详情</a></li>
                    <li><a href="#Information" data-toggle="tab">产品信息</a></li>
                   <!--  <li><a href="#Reviews" data-toggle="tab">Reviews (2)</a></li> -->
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade" id="Description">
                      <?php if(!empty($mobile_description)): if(is_array($mobile_description) || $mobile_description instanceof \think\Collection || $mobile_description instanceof \think\Paginator): $i = 0; $__LIST__ = $mobile_description;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mobile): $mod = ($i % 2 );++$i;?>
                          <img src="/<?php echo resize($mobile['image'],630); ?>" />
                        <?php endforeach; endif; else: echo "" ;endif; else: ?>
                        <?php echo htmlspecialchars_decode($goods['description']); endif; ?>
                    </div>
                    <div class="tab-pane fade" id="Information">
                      <table class="datasheet">
                        <tr>
                          <th colspan="2">Additional features</th>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 1</td>
                          <td>21 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 2</td>
                          <td>700 gr.</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 3</td>
                          <td>10 person</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 4</td>
                          <td>14 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 5</td>
                          <td>plastic</td>
                        </tr>
                      </table>
                    </div>
                    <!-- <div class="tab-pane fade in active" id="Reviews"> -->
                      <!--<p>There are no reviews for this product.</p>-->
                      <!-- <div class="review-item clearfix">
                        <div class="review-item-submitted">
                          <strong>Bob</strong>
                          <em>30/12/2013 - 07:37</em>
                          <div class="rateit" data-rateit-value="5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                        </div>                                              
                        <div class="review-item-content">
                            <p>Sed velit quam, auctor id semper a, hendrerit eget justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel arcu pulvinar dolor tempus feugiat id in orci. Phasellus sed erat leo. Donec luctus, justo eget ultricies tristique, enim mauris bibendum orci, a sodales lectus purus ut lorem.</p>
                        </div>
                      </div>
                      <div class="review-item clearfix">
                        <div class="review-item-submitted">
                          <strong>Mary</strong>
                          <em>13/12/2013 - 17:49</em>
                          <div class="rateit" data-rateit-value="2.5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                        </div>                                              
                        <div class="review-item-content">
                            <p>Sed velit quam, auctor id semper a, hendrerit eget justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel arcu pulvinar dolor tempus feugiat id in orci. Phasellus sed erat leo. Donec luctus, justo eget ultricies tristique, enim mauris bibendum orci, a sodales lectus purus ut lorem.</p>
                        </div>
                      </div> -->

                      <!-- BEGIN FORM-->
                    <!--   <form action="#" class="reviews-form" role="form">
                        <h2>Write a review</h2>
                        <div class="form-group">
                          <label for="name">Name <span class="require">*</span></label>
                          <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                          <label for="review">Review <span class="require">*</span></label>
                          <textarea class="form-control" rows="8" id="review"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="email">Rating</label>
                          <input type="range" value="4" step="0.25" id="backing5">
                          <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                          </div>
                        </div>
                        <div class="padding-top-20">                  
                          <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                      </form> -->
                      <!-- END FORM--> 
                    <!-- </div> -->
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
          <div class="col-md-12 col-sm-12">
            <h2>Most popular products</h2>
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

<link href="/public/static/js/cloud-zoom/cloud-zoom.css" rel="stylesheet" type="text/css" />
<link href="/public/static/js/flexslider/flexslider.css" rel="stylesheet" type="text/css"> 
<script src="/public/static/js/cloud-zoom/cloud-zoom.js"></script>
<script src="/public/static/js/flexslider/jquery.flexslider.js"></script>
<script>
$(function(){
  $('#button-cart').bind('click', function() {

    $.ajax({
      url: "<?php echo url('/add'); ?>",
      type: 'post',
      data: $('input[type=\'text\'],input[type=\'hidden\'],input[type=\'radio\']:checked,input[type=\'checkbox\']:checked,select'),
      dataType: 'json',
      success: function(json) {
        $('.box-check').removeClass('text-error');      
        $('.text-danger').remove(); 
        if(json){           
          if(json.error){
            if (json['goods_option_id']) {
                   
                   var id=json['goods_option_id'];
                   
                      var element = $('#option-'+id);
          
                      if (element.parent().hasClass('box-check')) {
                        element.parent().addClass('text-error').after('<div class="text-danger">' + json.error + '</div>');
                      } else {
                        element.after('<div class="text-danger">' + json.error+ '</div>');
                      }
                    
            }
            alert(json.error);
          }else if(json.success){
            alert(json.success);
            $('#cart a').text(json.total);
          }
        }
      }
    }); 
  });
}); 
</script> 

<!-- END BODY -->
</html>	