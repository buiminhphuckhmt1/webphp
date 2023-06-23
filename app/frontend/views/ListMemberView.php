<?php
//load file layout vao day
$layout = "LayoutTrangChu.php";
?>
<div class="message-wrapper">
    <div class="container">
        <div class="message-content">
            <h1>DANH SÁCH THÀNH VIÊN ĐỘI TNTN KHOA CNTT</h1>
            <div class="blog-wrapper">
                <div class="row" style="width:100%;">
                    <?php $index = 1;
                    foreach ($data as $rows): ?>
                        <div class="col-lg-3 col-md-6 col-12S">
                            <div class="article-blog-news" style="background-color: #7e99f8; padding: 10px; border-radius: 10px; margin-bottom: 15px; height: 400px">
                                <div class="item-image">
                                    <a href="javascript:;" style="text-align: center">
                                        <img src="../assets/upload/news/<?php echo $rows->Image; ?>" >
                                    </a>
                                </div>
                                <div class="item-content" style="text-align: center">
                                    <a href="javascript:;" class="item-name" title="" style="text-align: center">
                                        <?php echo $rows->Stu_Name ?>
                                    </a>
                                </div>
                                <div class="item-content">
                                    <a href="javascript:;" class="item-name" title="" style="text-align: center">
                                        <?php echo $rows->Class ?>
                                    </a>
                                </div>
                                <div class="item-content">
                                    <a href="javascript:;" class="item-name" title="" style="text-align: center">
                                        <?php echo $rows->Addresss ?>
                                    </a>
                                </div>
                                <div class="item-content">
                                    <a href="javascript:;" class="item-name" title="" style="text-align: center">
                                        <?php echo $rows->TimeJoin ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>