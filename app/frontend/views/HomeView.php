<?php 
	//load file LayoutTrangChu.php vao day
	$layout = "LayoutTrangChu.php";
 ?>
<div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="col-lg-10">
                <h2>HOT PRODUCT</h2>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
              <div class="clearfix"> 
              <?php 
                $products = $this->hotProducts();
               ?>
               <?php foreach($products as $row): ?>
                <!-- box product -->
                <div class="col-xs-6 col-md-2 col-sm-6 ">
                  <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                    <div class="image"> <a href="#"><img src="../assets/upload/products/<?php echo $row->photo; ?>" title="<?php echo $row->name; ?>" alt="<?php echo $row->name; ?>" class="img-responsive"></a> </div>
                    <div class="info">
                      <h3 class="name"><a href="index.php?controller=products&action=detail&id=<?php echo $row->id; ?>"><?php echo $row->name; ?></a></h3>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($row->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($row->price - ($row->price * $row->discount)/100); ?> </span>₫ </span> </p>
                      <p class="price-box"> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $row->id; ?>&star=1"><img src="../assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $row->id; ?>&star=2"><img src="../assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $row->id; ?>&star=3"><img src="../assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $row->id; ?>&star=4"><img src="../assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $row->id; ?>&star=5"><img src="../assets/frontend/images/star.jpg"></a> </p>
                      <div class="action-btn">
                        <form>
                          <a href="index.php?controller=cart&action=create&id=<?php echo $row->id; ?>" class="button">Add to Cart</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end box product --> 
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-12"> <img src="../assets/frontend/images/adv1.jpg" class="img-thumbnail"> </div>
        </div>
        <?php 
          $categories = $this->categories();
         ?>
         <?php foreach($categories as $rowCategory): ?>
        <!-- category product -->
        <div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="head-tabs head-tab1 col-lg-11">
                <h2><?php echo $rowCategory->name; ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex"> 
              
              <?php 
                $products = $this->productsInCategory($rowCategory->id);
               ?>
               <?php foreach($products as $row): ?>
                <!-- box product -->
                <div class="col-xs-6 col-md-2 col-sm-6 ">
                  <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                    <div class="image"> <a href="#"><img src="../assets/upload/products/<?php echo $row->photo; ?>" title="<?php echo $row->name; ?>" alt="<?php echo $row->name; ?>" class="img-responsive"></a> </div>
                    <div class="info">
                      <h3 class="name"><a href="index.php?controller=products&action=detail&id=<?php echo $row->id; ?>"><?php echo $row->name; ?></a></h3>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($row->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($row->price - ($row->price * $row->discount)/100); ?> </span>₫ </span> </p>
                      <p class="price-box"> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $row->id; ?>&star=1"><img src="../assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $row->id; ?>&star=2"><img src="../assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $row->id; ?>&star=3"><img src="../assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $row->id; ?>&star=4"><img src="../assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $row->id; ?>&star=5"><img src="../assets/frontend/images/star.jpg"></a> </p>
                      <div class="action-btn">
                        <form>
                          <a href="index.php?controller=cart&action=create&id=<?php echo $row->id; ?>" class="button">Add to Cart</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end box product --> 
                <?php endforeach; ?>
               
            </div>
          </div>
        </div>
        <!-- /category product --> 
        <?php endforeach; ?>
                
        <!-- adv -->
        <div class="widebanner"> <a href="#"><img src="../assets/frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361" alt="#" class="img-responsive"></a> </div>
        <!-- end adv --> 
        
        <!-- hot news -->
        <div class="home-blog">
          <h2 class="title"> <span>Tin tức</span></h2>
          <div class="row">
            <div class="owl-home-blog owl-home-blog-bottompage"> 
            <?php 
              $news = $this->hotNews();
             ?>
             <?php foreach($news as $row): ?>
              <!-- new item -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news&action=detail&id=<?php echo $row->id; ?>" class="image"> <img src="../assets/upload/news/<?php echo $row->photo; ?>" alt="<?php echo $row->name; ?>" title="<?php echo $row->name; ?>" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $row->id; ?>" style="font-weight: bold;"><?php echo $row->name; ?></a></h3>
                    <p class="desc"> <?php echo $row->description; ?></p>
                  </div>
                </div>
              </div>
              <!-- /news item --> 
              <?php endforeach; ?>
              
            </div>
          </div>
        </div>
        <!-- /hotnews -->