<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:39:"./themes/shop/index/category/index.html";i:1560244742;s:61:"/var/www/html/css/oscshop2/themes/shop/index/public/base.html";i:1560232615;}*/ ?>
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




<div class="title-wrapper">
	<div class="container"><div class="container-inner">
		<h1><span>MEN</span> CATEGORY</h1>
		<em>Over 4000 Items are available here</em>
	</div></div>
</div>

<div class="main">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="<?php echo url('/index'); ?>">首页</a></li>
			<?php if(isset($pcate)): ?>
			<li><a href="<?php echo url('/categroy/'.$pcate['id']); ?>"><?php echo $pcate['name']; ?></a></li>
			<?php endif; ?>
			<li class="active"><?php echo $now_category['name']; ?></li>
		</ul>
		<!-- BEGIN SIDEBAR & CONTENT -->
		<div class="row margin-bottom-40">
			<!-- BEGIN SIDEBAR -->
			<div class="sidebar col-md-3 col-sm-5">
				<ul class="list-group margin-bottom-25 sidebar-menu">
                    <?php if(is_array($top_nav) || $top_nav instanceof \think\Collection || $top_nav instanceof \think\Paginator): $i = 0; $__LIST__ = $top_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?>
					<li class='list-group-item clearfix dropdown <?php if($category['id']==$now_category['id']): ?>active<?php endif; if(isset($pcate)&&$category['id']==$pcate['id']): ?>active<?php endif; ?>'>
                        <?php if($category['id']==$now_category['id']): ?>
                        <a href="javascript:void(0);" >
							<i class="fa fa-angle-right"></i>
                                <?php echo $category['name']; ?>
						</a>
                        <?php else: ?>
                        <a href="<?php echo url('/category/'.$category['id']); ?>">
                            <i class="fa fa-angle-right"></i>
                            <a href="<?php echo url('/category/'.$category['id']); ?>" class="jump_a">
                            <?php echo $category['name']; ?>
                            </a>
                        </a>
                        <?php endif; if(isset($category['children'])): ?>
						<ul class="dropdown-menu" <?php if(isset($pcate)&&$category['id']==$pcate['id']): ?> style="display:block;" <?php endif; if($category['id']==$now_category['id']): ?>style="display:block;"<?php endif; ?>>
                            <?php if(is_array($category['children']) || $category['children'] instanceof \think\Collection || $category['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $category['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$children): $mod = ($i % 2 );++$i;?>
							<li class="list-group-item dropdown clearfix <?php if($children['id']==$now_category['id']): ?>active<?php endif; ?>">
                                <?php if($children['id']==$now_category['id']): ?>
                                <a href="javascript:void(0);">
                                    <?php echo $children['name']; ?>
                                </a>
                                <?php else: ?>
                                <a href="<?php echo url('/category/'.$children['id']); ?>">
                                    <?php echo $children['name']; ?>
                                </a>
                                <?php endif; ?>
							</li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                        <?php endif; ?>
					</li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>

				<div class="sidebar-filter margin-bottom-25">
					<h2>Filter</h2>
					<h3>Availability</h3>
					<div class="checkbox-list">
						<label><input type="checkbox"> Not Available (3)</label>
						<label><input type="checkbox"> In Stock (26)</label>
					</div>

					<h3>Price</h3>
					<p>
						<label for="amount">Range:</label>
						<input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
					</p>
					<div id="slider-range"></div>
				</div>

				<div class="sidebar-products clearfix">
					<h2>Bestsellers</h2>
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
				<div class="row list-view-sorting clearfix">
					<div class="col-md-2 col-sm-2 list-view">
						<a href="javascript:;"><i class="fa fa-th-large"></i></a>
						<a href="javascript:;"><i class="fa fa-th-list"></i></a>
					</div>
					<div class="col-md-10 col-sm-10">
						<div class="pull-right">
							<label class="control-label">Show:</label>
							<select class="form-control input-sm">
								<option value="#?limit=24" selected="selected">24</option>
								<option value="#?limit=25">25</option>
								<option value="#?limit=50">50</option>
								<option value="#?limit=75">75</option>
								<option value="#?limit=100">100</option>
							</select>
						</div>
						<div class="pull-right">
							<label class="control-label">Sort&nbsp;By:</label>
							<select class="form-control input-sm">
								<option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
								<option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
								<option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
								<option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
								<option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
								<option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
								<option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
								<option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
								<option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
							</select>
						</div>
					</div>
				</div>
				<!-- BEGIN PRODUCT LIST -->
				<div class="row product-list">
					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="/public/static/shop_res/pages/img/products/model1.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="/public/static/shop_res/pages/img/products/model1.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress Berry Lace Dress</a></h3>
							<div class="pi-price">$29.00</div>
							<a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->
					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="/public/static/shop_res/pages/img/products/model2.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="/public/static/shop_res/pages/img/products/model2.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
							<div class="pi-price">$29.00</div>
							<a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->
					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="/public/static/shop_res/pages/img/products/model6.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="/public/static/shop_res/pages/img/products/model6.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress 2</a></h3>
							<div class="pi-price">$29.00</div>
							<a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->
				</div>
				<div class="row product-list">
					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="/public/static/shop_res/pages/img/products/model4.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="/public/static/shop_res/pages/img/products/model4.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress Berry Lace Dress</a></h3>
							<div class="pi-price">$29.00</div>
							<a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->
					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="/public/static/shop_res/pages/img/products/model5.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="/public/static/shop_res/pages/img/products/model5.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
							<div class="pi-price">$29.00</div>
							<a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
							<div class="sticker sticker-new"></div>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->
					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="/public/static/shop_res/pages/img/products/model3.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="/public/static/shop_res/pages/img/products/model3.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
							<div class="pi-price">$29.00</div>
							<a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->
				</div>
				<div class="row product-list">
					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="/public/static/shop_res/pages/img/products/model7.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="/public/static/shop_res/pages/img/products/model7.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
							<div class="pi-price">$29.00</div>
							<a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->
					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="/public/static/shop_res/pages/img/products/model1.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="/public/static/shop_res/pages/img/products/model1.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
							<div class="pi-price">$29.00</div>
							<a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->
					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="/public/static/shop_res/pages/img/products/model2.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="/public/static/shop_res/pages/img/products/model2.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
							<div class="pi-price">$29.00</div>
							<a href="javascript:;" class="btn btn-default add2cart">加入购物车</a>
							<div class="sticker sticker-sale"></div>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->
				</div>
				<!-- END PRODUCT LIST -->
				<!-- BEGIN PAGINATOR -->
				<div class="row">
					<div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
					<div class="col-md-8 col-sm-8">
						<ul class="pagination pull-right">
							<li><a href="javascript:;">&laquo;</a></li>
							<li><a href="javascript:;">1</a></li>
							<li><span>2</span></li>
							<li><a href="javascript:;">3</a></li>
							<li><a href="javascript:;">4</a></li>
							<li><a href="javascript:;">5</a></li>
							<li><a href="javascript:;">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<!-- END PAGINATOR -->
			</div>
			<!-- END CONTENT -->
		</div>
		<!-- END SIDEBAR & CONTENT -->
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

<style>
	.hover{ background:#aaa; }
</style>
<script>
var attribute=get_url_attr('a');

if(attribute){	 
	 var ch = new Array;
	 ch = attribute.split(",");
	 if(ch.length==1){
		 $('#a'+attribute).addClass('hover');
	 }else if(ch.length>1){			 
		 		 
		 for(i=0;i<ch.length;i++){		  
			$('#a'+ch[i]).addClass('hover');
		}
	 }
}


$(function(){
	$('.attribute').click(function(){

		if(attribute){
			if($(this).hasClass('hover')){
				$(this).removeClass('hover');
			}else{
				$(this).siblings().removeClass('hover')
				$(this).addClass('hover');
			}
		}else{
				$(this).addClass('hover');
		}
		
		var length=$('#attribute li.hover').size();	
		
		
			var url = "<?php echo url('/category'); ?>"+'/'+'<?php echo \think\Request::instance()->param('id'); ?>';	
			var param='?a=';
	
		
		$('#attribute li.hover').each(function(i){
			
			if(i<length-1){
				param+=$('#attribute li.hover').eq(i).attr('aid')+',';
			}else{
				param+=$('#attribute li.hover').eq(i).attr('aid');
			}
			
		});
		
		url+=param;
		
		window.location.href = url;		
	});
    $('.jump_a').unbind();
	
});
</script>

<!-- END BODY -->
</html>	