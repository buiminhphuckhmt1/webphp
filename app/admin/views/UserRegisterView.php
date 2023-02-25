<?php 
    //load file LayoutView.php
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">List User Register</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:120px; ">Name</th>
                    <th style="width:100px;">BirthDate</th>
                    <th style="width:100px;">Stu_Code</th>
                    <th style="width:100px;">Class</th>
                    <th style="width:100px;">Faculty</th>
                    <th style="width:200px;">Address</th>
                    <th style="width:100px;">Phone</th>
                    <th style="width:150px;">Email</th>
                    <th style="width:150px;">Desire</th>
                    <th style="width:150px;">Trạng thái</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $row): ?>
                <tr>
                    <td><?php echo $row->Name; ?></td>
                    <td><?php echo $row->BirthDate; ?></td>
                    <td><?php echo $row->Stu_Code; ?></td>
                    <td><?php echo $row->Class; ?></td>
                    <td><?php echo $row->Department; ?></td>
                    <td><?php echo $row->Address; ?></td>
                    <td><?php echo $row->Phone; ?></td>
                    <td><?php echo $row->Email; ?></td>
                    <td><?php echo $row->Desire; ?></td>
                    <td>
 						<?php if($row->Status ==  1): ?>
 							<div>Đã phản hồi</div>
 						<?php else: ?>
 							<div>Chưa phản hồi</div>
 						<?php endif; ?>
 					</td>
                    <td style="text-align:center;">
                        <?php if($row->Status == 0): ?>
 							<a href="index.php?controller=userregister&action=delivery&ID=<?php echo $row->ID; ?>" class="label label-info">Duyệt</a>
 							&nbsp;&nbsp;
                            <a href="index.php?controller=userregister&action=create&ID=<?php echo $row->ID; ?>" class="label label-info">Add</a>
 							&nbsp;&nbsp;
 						<?php endif; ?>
                        <a href="index.php?controller=userregister&action=delete&ID=<?php echo $row->ID; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                    <li class="page-item"><a class="page-link" href="index.php?controller=userregister&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>