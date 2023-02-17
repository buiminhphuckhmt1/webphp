<?php 
    //load file LayoutView.php
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=news&action=create" class="btn btn-primary">Thêm bài viết</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách bài viết</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Ảnh bìa</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <!-- <th style="width:70px;">Hot</th> -->
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $row): ?>
                <tr>
                    <td>
                        <?php if($row->CoverImage!= ""&&file_exists("../assets/upload/news/".$row->CoverImage)): ?>
                        <img src="../assets/upload/news/<?php echo $row->CoverImage; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $row->Title; ?></td>
                    <td><?php echo $row->Content; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=news&action=update&ID=<?php echo $row->ID; ?>">Sửa</a>&nbsp;
                        <a href="index.php?controller=news&action=delete&ID=<?php echo $row->ID; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="#">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item"><a class="page-link" href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>