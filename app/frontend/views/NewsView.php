<?php 
  $layout = "LayoutTrangTrong.php";
 ?>
<h1>Tin tức</h1>
        <div class="wrapper-blog"> 
          <!-- list news -->
          <div class="row">
            <?php foreach($data as $row): ?>
            <div class="col-md-6 article" style="height:400px; overflow:hidden;"> <a href="index.php?controller=news&action=detail&id=<?php echo $row->id; ?>" class="image"> <img src="../assets/upload/news/<?php echo $row->photo; ?>" alt="<?php echo $row->name; ?>" title="<?php echo $row->name; ?>" class="img-responsive"> </a>
              <h3><a href="index.php?controller=news&action=detail&id=<?php echo $row->id; ?>u"><?php echo $row->name; ?></a></h3>
              <p class="desc"><?php echo $row->description; ?></p>
            </div>
            <?php endforeach; ?>
          </div>
          <!-- end list news --> 
          <ul class="pagination pull-right" style="margin-top: 0px !important">
            <li><a href="#">Trang</a></li>
            <?php for($i = 1; $i <= $numPage; $i++): ?>
            <li><a href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php endfor; ?>
          </ul>
        </div>