<?php 
    //load file LayoutView.php
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=typicalface&action=create" class="btn btn-primary">Thêm gương mặt tiêu biểu</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách gương mặt tiêu biểu</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:60px;">Ảnh</th>
                    <th style="width:60px;">Họ và tên</th>
                    <th style="width:60px;">Chức vụ</th>
                    <th style="width:60px;">Ngày sinh</th>
                    <th style="width:60px;">Lớp-Khóa</th>
                    <th style="width:60px;">Địa chỉ</th>
                    <th style="width:60px;">Mô tả</th>
                    <th style="width:60px;"></th>
                </tr>
                <?php foreach($data as $row): ?>
                <tr>
                    <td>
                        <?php if($row->Image!= ""&&file_exists("../assets/upload/news/".$row->Image)): ?>
                        <img src="../assets/upload/news/<?php echo $row->Image; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $row->Name; ?></td>
                    <td><?php echo $row->Position; ?></td>
                    <td><?php echo $row->BirthDate; ?></td>
                    <td><?php echo $row->Class; ?></td>
                    <td><?php echo $row->Address; ?></td>
                    <td><?php echo $row->Description; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=typicalface&action=update&ID=<?php echo $row->ID; ?>">Sửa</a>&nbsp;
                        <a href="index.php?controller=typicalface&action=delete&ID=<?php echo $row->ID; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
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
                    <li class="page-item"><a class="page-link" href="index.php?controller=typicalface&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>