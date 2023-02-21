<?php 
    //load file LayoutView.php
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=notify&action=create" class="btn btn-primary">Thêm thông báo</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách thông báo</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Tiêu đề</th>
                    <th>Content</th>
                    <!-- <th style="width:70px;">Hot</th> -->
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $row): ?>
                <tr>
                    <td><?php echo $row->Title; ?></td>
                    <td><?php echo $row->Content; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=notify&action=update&ID=<?php echo $row->ID; ?>">Sửa</a>&nbsp;
                        <a href="index.php?controller=notify&action=delete&ID=<?php echo $row->ID; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
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
                    <li class="page-item"><a class="page-link" href="index.php?controller=notify&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>