
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Book Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logoheader.png" type="image/x-icon"/>
    
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/owl-carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/camera.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/main-style.css">
    
    <link rel="stylesheet" id="contact-form-7-css" href="css/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-css" href="css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" id="magnific-popup-css" href="css/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" id="woocommerce_frontend_styles-css" href="css/woocommerce.css" type="text/css" media="all">
    <style>.tieude{font-size: 14px }</style>
     <style type="text/css">.cherry-fixed-layout .main-holder{background:#ffffff;}</style>
    <style type='text/css'>h1{font:normal 24px/30px Cabin;color:#414141;}h2{font:normal 22px/24px Cabin;color:#414141;}h3{font:normal 20px/22px Cabin;color:#414141;}h4{font:normal 18px/20px Cabin;color:#414141;}h5{font:normal 16px/18px Cabin;color:#414141;}h6{font:normal 14px/16px Cabin;color:#414141;}.logo_h__txt,.logo_link{font:normal 60px/62px Alike;color:#414141;}.sf-menu>li>a{font:normal 16px/18px Cabin;color:#414141;}.nav.footer-nav a{font:normal 12px/18px Arial,Helvetica,sans-serif;color:#0088CC;}</style>
<div id="fb-root"></div>
    
   
</head>

    
    <body class="home page page-id-203 page-template page-template-page-home-php has_woocommerce has_shop cherry-fixed-layout">
    <div id="motopress-main" class="main-holder">
     
    <header class="motopress-wrapper header">
    <div class="container">
        <!-- <div class="row"> -->
            <div class="span12" >
                <div class="row">
                    <div class="span7" data-motopress-type="static">

                        <div class="logo pull-left">
                            <a href="index.php" class="logo_h logo_h__img"><img src="images/logopage.png" alt="Book Store" title="NND team"></a>
                            <!-- <p class="logo_tagline">  Book store by NND</p>  -->
                        </div>
                      </div>
                <div class="span5 bot1" data-motopress-type="static" data-motopress-static-file="static/static-shop-nav.php">
                    <div class="shop-nav">
                        <?php
                            if(!isset($_SESSION['login_member']))
                            {
                        ?>
                        <ul id="shopnav" class="shop-menu">
                            <li>
                                <a href="index.php?page=register" class='register-link' title="Đăng ký">
                                    đăng ký
                                </a>                      
                            </li>
                            <li>
                                <a href="index.php?page=login" title="Đăng nhập">
                                    đăng nhập
                                </a>
                            </li>
                        </ul>
                        <?php
                            }
                            else
                            {
                                $query= "select * from khachhang where tendangnhap='".$_SESSION['tendangnhap']."'";
                                $rows=$db->query($query);
                                $r=$rows->fetch();
                        ?>
                            <ul id="shopnav" class="shop-menu">
                            <li>
                                Xin chào: 
                                
                                    <?php
                                        echo $r[4];
                                    ?>
                                                
                            </li>
                            
                            <li>
                                <a href="index.php?page=logout">
                                    Thoát
                                </a>
                            </li>
                        </ul>
                        <?php
                            }
                        ?>
                    </div> 
                    <div style="background: #fe5252;height: 50px;margin-left:250px; margin-top: 30px">
                        <a href="index.php?page=cart">
                            <h3 style="line-height: 50px; padding-left: 15px; color: white"><img style="width: 30px; padding-right: 10px; padding-bottom: 5px" src="hinhanhsp/cart.png">Shopping Cart
                                </h3>
                        </a>        
                    </div>
                </div>
                </div>
                
                <div class="row bot2">
                <div class="span8" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">

                <nav class="nav nav__primary clearfix">
                <ul id="topnav" class="sf-menu">
                    <li id="menu-item-1807" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-203 current_page_item">
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li id="menu-item-1810" class="menu-item menu-item-type-post_type menu-item-object-page
                        <?php $page=$_REQUEST['page'];
                            if($page=='tintuc' || $page=='tintucct')
                                echo "current_page_item";
                        ?>
                        ">
                        <a href="index.php?page=tintuc">Tin tức</a>
                    </li>
                    <li id="menu-item-1969" class="menu-item menu-item-type-post_type menu-item-object-page @@@
                        <?php $page=$_REQUEST['page'];
                            if($page=='sanphamct' || $page=='sanpham')
                                echo "current_page_item";
                        ?>">
                        <a href="index.php?page=sanpham">Shop</a>
                    </li>
                
                    <li id="menu-item-1804" class="menu-item menu-item-type-post_type menu-item-object-page
                        <?php $page=$_REQUEST['page'];
                            if($page=='lienhe')
                                echo "current_page_item";
                        ?>
                        ">
                        <a href="index.php?page=contact">Liên hệ</a>
                    </li>
                    <?php
                        if(isset($_SESSION['login_member']))
                        {
                            
                        ?>
                            <li id="menu-item-1969" class="menu-item menu-item-type-post_type menu-item-object-page @@@">
                            
                            <a href="index.php?page=lichsugd">Lịch sử đơn hàng</a>
                        </li>
                        <?php
                        
                        }?>
                    
                </ul></nav>  </div>
              
                <div class="clear"></div>
                </div>
                
          
            </div>
        </div>

    <!-- </div> -->
</header>


