<?php 
  $layout = "LayoutTrangChu.php";
 ?>
<div class="activity-wrapper">
            <div class="container">
                <h1>Hoạt động mới nhất</h1>
                <div class="activity-content-wrapper">
                    <div  class="activity-content">
                    <div class="left-content">
                        <div class="left-image">
                        <img class="img-fluid" src="../template/images/ativity.png" alt="">
                        </div>
                        <h3>Chương trình “Tết ấm yêu thương 2022” </h3>
                    </div>
                    <div class="right-content">
                        <div class="activity-right-content" v-for="item in 2">
                            <div class="right-image">
                            <img src="../template/images/activity.png" alt="">
                            </div>
                            <h4>Chương trình “Kế hoạch nhỏ”</h4>
                        </div>
                    </div>
                    </div>
                    <div class="blog-wrapper">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12" v-for="item in 9">
                            <?php include "Views/ArticleBlogView.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>