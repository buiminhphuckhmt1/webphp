<!-- header -->
<header id="header">
<!-- top header -->
<div class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
      <?php if(isset($_SESSION["customer_email"]) == false): ?>
        <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="index.php?controller=account&action=login">Đăng nhập</a>&nbsp; &nbsp;<a href="index.php?controller=account&action=register">Đăng ký</a> </div>
      <?php else: ?>
        <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="#">Xin chào <?php echo $_SESSION["customer_email"]; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout">Đăng xuất</a> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- end top header --> 
<!-- middle header -->
<div class="mid-header">
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.html"> <img src="../assets/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
    <div class="col-xs-12 col-sm-12 col-md-6 header-search"> 
      <!--<form method="post" id="frm" action="">-->
      <div style="margin-top:25px;" id="box-search">
        <input type="text" onkeyup="ajaxSearch();" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
        <button style="margin-top:5px;" type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
        <!-- list box search -->
        <div id="box-search-list">
          <ul>
            <li><img src="http://localhost:8080/devpro/php63/php63_project/assets/upload/products/1670158805_132195018346013007_2.jpg"> <a href="#">17 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li>
            <li><img src="http://localhost:8080/devpro/php63/php63_project/assets/upload/products/1670158805_132195018346013007_2.jpg"> <a href="#">17 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li>
            <li><img src="http://localhost:8080/devpro/php63/php63_project/assets/upload/products/1670158805_132195018346013007_2.jpg"> <a href="#">17 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li>
          </ul>
        </div>
        <!-- /list box search -->        
      </div>
      <style type="text/css">
          #box-search{position: relative;}
          #box-search-list{position: absolute; z-index: 1; width: 100%; background: white; display: none; height: 300px; overflow: scroll;}
          #box-search-list ul{padding:0px; margin:0px; list-style: none;}
          #box-search-list ul li{border-bottom: 1px solid #dddddd;}
          #box-search-list img{width: 50px;}
        </style>
      <!--</form>--> 
      <script type="text/javascript">
        function search(){
          var key = document.getElementById("key").value;
          //di chuyen den trang tim kiem
          location.href="index.php?controller=search&action=searchName&key="+key;
        }
        function ajaxSearch(){
          //phai load thu vien jquery vao trang nay
          //kiem tra thu vien jquery co load o trang hay khong
          //$(document).ready(function(){ alert('da load jquery'); });          
          $("#box-search-list ul").empty();
          //lay textbox co id=key
          var key = $("#key").val();
          if(key != ""){
            //dat css de hien thi box search
            $("#box-search-list").attr("style","display:block;");
            //ajax goi den url de lay ket qua tra ve
            //---
            $.ajax({
              url: "index.php?controller=search&action=ajaxSearch&key="+key,
              success: function( result ) {
                //do du lieu vao box-search-list
                $("#box-search-list ul").append(result);
              }
            });
            //---
          }
        }
      </script>
    </div>
    <?php 
      $numberProduct = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
     ?>
    <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
      <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="cart"> <span class="mini-cart-count"> <?php echo $numberProduct; ?> </span> sản phẩm <i class="fa fa-caret-down"></i></a>
        <div class="content-mini-cart">
          <div class="has-items">
            <ul class="list-unstyled">
             <?php if(isset($_SESSION['cart'])): ?> 
              <?php foreach($_SESSION['cart'] as $product): ?>
                <?php 
                  //ep kieu tu array sang object
                  $product = (object)$product;
                 ?>
              <li class="clearfix" id="item-1853038">
                <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $product->id; ?>"> <img alt="<?php echo $product->name; ?>" src="../assets/upload/products/<?php echo $product->photo; ?>" title="<?php echo $product->name; ?>" class="img-responsive"> </a> </div>
                <div class="info">
                  <h3><a href="index.php?controller=products&action=detail&id=<?php echo $product->id; ?>"><?php echo $product->name; ?></a></h3>
                  <p><?php echo $product->number; ?> x <?php echo number_format($product->price - ($product->price * $product->discount)/100); ?>₫</p>
                </div>
                <div> <a href="index.php?controller=cart&action=remove&id=<?php echo $product->id; ?>"> <i class="fa fa-times"></i></a> </div>
              </li>
                <?php endforeach; ?>
              <?php endif; ?>
            </ul>
            <a href="index.php?controller=cart&action=checkout" class="button">Thanh toán</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end middle header --> 
<!-- bottom header -->
<div class="bottom-header">
  <div class="container">
    <div class="clearfix">
      <ul class="main-nav hidden-xs hidden-sm list-unstyled">
        <li class="active"><a href="index.php">Trang chủ</a></li>
        <li class="has-submenu"> <a href="#"> <span>Sản phẩm</span><i class="fa fa-caret-down" style="margin-left: 5px;"></i> </a>
          <ul class="list-unstyled level1">
          <?php 
            $conn = Connection::getInstance();
            //lay cac danh muc co parent_id = 0
            $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
            $categories = $query->fetchAll(PDO::FETCH_OBJ);
           ?>
           <?php foreach($categories as $row): ?>
            <li><a href="index.php?controller=products&action=category&category_id=<?php echo $row->id; ?>"><?php echo $row->name; ?></a></li>
            <?php 
                //lay cac danh muc cap con
                $querySub = $conn->query("select * from categories where parent_id = {$row->id} order by id desc");
                $categoriesSub = $querySub->fetchAll(PDO::FETCH_OBJ);
             ?>
             <?php foreach($categoriesSub as $rowSub): ?>
            <li style="padding-left:20px;"><a hrefindex.php?controller=products&action=category&category_id=<?php echo $rowSub->id; ?>"><?php echo $rowSub->name; ?></a></li>
              <?php endforeach; ?>
            <?php endforeach; ?>
          </ul>
        </li>
        <li><a href="index.php?controller=cart">Giỏ hàng</a></li>
        <li><a href="index.php?controller=news">Tin tức</a></li>
        <li><a href="index.php?controller=contact">Liên hệ</a></li>
      </ul>
      <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
      <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
        <li class="active"><a href="index.php">Trang chủ</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="index.php?controller=tintuc">Tin tức</a></li>
        <li><a href="index.php?controller=lienhe">Liên hệ</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- end bottom header -->
</header>
<!-- end header -->