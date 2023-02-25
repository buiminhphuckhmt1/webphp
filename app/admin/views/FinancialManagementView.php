<?php 
    //load file LayoutView.php
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=financialmanagement&action=create" class="btn btn-primary">Thêm ghi chú</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Quản lí tài chính</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Nội dung</th>
                    <th>Thu/Chi</th>
                    <th>Tổng tiền</th>
                    <th>Người thống kê</th>
                    <th>Ngày thống kê</th>
                    <!-- <th style="width:70px;">Hot</th> -->
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $row): ?>
                <tr>
                    <td><?php echo $row->Content; ?></td>
                    <td><?php echo $row->Action; ?></td>
                    <td><?php echo number_format($row->Total); ?> VNĐ</td>
                    <td><?php echo $row->Collecter; ?></td>
                    <td><?php echo $row->CollectionDate; ?></td>
                    <td style="text-align:center;">
                        <?php if($row->Status == 0): ?>
 							<a href="index.php?controller=financialmanagement&action=delivery&ID=<?php echo $row->ID; ?>" class="label label-info">Duyệt</a>
 							&nbsp;&nbsp;
                            <a href="index.php?controller=financialmanagement&action=update&ID=<?php echo $row->ID; ?>" class="label label-info">Sửa</a>
 							&nbsp;&nbsp;
 						<?php endif; ?>
                        <a href="index.php?controller=financialmanagement&action=delete&ID=<?php echo $row->ID; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                    <li class="page-item"><a class="page-link" href="index.php?controller=financialmanagement&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>