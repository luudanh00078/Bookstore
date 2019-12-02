
<div class="row">
<div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
<div id="post-203" class="post-203 page type-page status-publish hentry page instock">

<div class="featured-box">
<h3>Sách mới</h3>
<div class="woocommerce">
<ul class="products">
    <?php
    $query="select tensp, tentg, giaban, hinhanh, tendm, masp from sanpham join danhmuc on sanpham.madm=danhmuc.madm order by masp desc limit 6";
    $rows=$db->query($query);
    $i=0;
    foreach ($rows as $r)
    {
        $i=$i+1;
        if($i%3==1)
        {
        ?>
    <li class="post-1958 product type-product status-publish hentry first featured instock">
    <a href="index.php?page=sanphamct&masp=<?php echo $r[5]?>">
        <img style="width: 135px; height: 200px" src="hinhanhsp/<?php echo $r[3]?>" class="attachment-shop_catalog wp-post-image" />
    <h3><?php echo $r[4]?></h3>
    </a>
    <div class='extra-wrap'> <div class="short_desc">
    <?php echo $r[0];?> </div>
        <span class="price"><span class="amount"><?php echo number_format($r[2]) ?> vnd</span></span>
    <a href='index.php?page=sanphamct&masp=<?php echo $r[5]?>' class='btn'>Chi tiết</a>
    <a href="index.php?page=addcart&masp=<?php echo $r[5] ?>" class="add_to_cart_button button product_type_simple">add to cart</a>
    </div>
    </li>
     <?php
    }
    else
    {
     ?>  
    <li class="post-1954 product type-product status-publish hentry featured instock">
    <a href="index.php?page=sanphamct&masp=<?php echo $r[5]?>">
        <img style="width: 135px; height: 200px" src="hinhanhsp/<?php echo $r[3]?> " class="attachment-shop_catalog wp-post-image"/>
    <h3><?php echo $r[4]?></h3>
    </a>
    <div class='extra-wrap'> <div class="short_desc">
    <?php echo $r[0];?></div>
    <span class="price"><span class="amount"><?php echo number_format($r[2]) ?> vnd</span></span>
    <a href='index.php?page=sanphamct&masp=<?php echo $r[5]?>' class='btn'>Chi tiết</a>
    <a href="?page=addcart&masp=<?php echo $r[5] ?>" rel="nofollow" data-product_id="1954" data-product_sku="" class="add_to_cart_button button product_type_simple">add to cart</a>
    </div>
    </li>
    <?php
    }
    }
    ?>
    
</ul>
</div>
</div>
<div class="top-box">
    
<h3>Sách bán chạy</h3>
<div class="woocommerce">
<ul class="products">
    
<?php
    $query="select tensp, tentg, giaban, hinhanh, tendm, masp from sanpham join danhmuc on sanpham.madm=danhmuc.madm order by masp asc limit 6 ";
    $rows=$db->query($query);
    $i=0;
    foreach ($rows as $r)
    {
        $i=$i+1;
        if($i%3==1)
        {
        ?>
    <li class="post-1958 product type-product status-publish hentry first featured instock">
    <a href="index.php?page=sanphamct&masp=<?php echo $r[5]?>">
        <img style="width: 135px; height: 200px" src="hinhanhsp/<?php echo $r[3]?>" class="attachment-shop_catalog wp-post-image" />
    <h3><?php echo $r[4]?></h3>
    </a>
    <div class='extra-wrap'> <div class="short_desc">
    <?php echo $r[0];?> </div>
        <span class="price"><span class="amount"><?php echo number_format($r[2]) ?> vnd</span></span>
    <a href='index.php?page=sanphamct&masp=<?php echo $r[5]?>' class='btn'>Chi tiết</a>
    <a href="index.php?page=addcart&masp=<?php echo $r[5] ?>" class="add_to_cart_button button product_type_simple">add to cart</a>
    </div>
    </li>
     <?php
    }
    else
    {
     ?>  
    <li class="post-1954 product type-product status-publish hentry featured instock">
    <a href="index.php?page=sanphamct&masp=<?php echo $r[5]?>">
        <img style="width: 135px; height: 200px" src="hinhanhsp/<?php echo $r[3]?> " class="attachment-shop_catalog wp-post-image"/>
    <h3><?php echo $r[4]?></h3>
    </a>
    <div class='extra-wrap'> <div class="short_desc">
    <?php echo $r[0];?></div>
    <span class="price"><span class="amount"><?php echo number_format($r[2]) ?> vnd</span></span>
    <a href='index.php?page=sanphamct&masp=<?php echo $r[5]?>' class='btn'>Chi tiết</a>
    <a href="?page=addcart&masp=<?php echo $r[5] ?>" rel="nofollow" data-product_id="1954" data-product_sku="" class="add_to_cart_button button product_type_simple">add to cart</a>
    </div>
    </li>
    <?php
    }
    }
    ?>
    
</ul>
</div>
</div>
<div class="clear"></div>
 
</div> 
</div>
</div>
</div>
</div>
</div>
</div>
