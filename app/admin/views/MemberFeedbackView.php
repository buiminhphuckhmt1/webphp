<?php 
    //load file layout vao day
    $layout = "LayoutView.php";
 ?>
 <div class="col-md-12">
 	<div class="panel panel-primary">
 		<div class="panel-heading">List memberfeedback</div>
 		<div class="panel-body">
 			<table class="table table-hover table-borderd">
 				<tr>
                    <th>Email</th>
 					<th>Họ và tên</th>
 					<th style="width: 150px;">Trạng thái</th>
 					<th style="width:150px;"></th>
 				</tr>
 				<?php foreach($data as $rows): ?>
 				<tr>
 					<td><?php echo isset($rows->Email)?$rows->Email:""; ?></td>
 					<td><?php echo isset($rows->Name)?$rows->Name:""; ?></td>
 					<td>
 						<?php if($rows->Status == 1): ?>
 							<div>Đã duyệt</div>
 						<?php else: ?>
 							<div>Chưa duyệt</div>
 						<?php endif; ?>
 					</td>
 					<td style="text-align:center;">
 						<?php if($rows->Status == 0): ?>
 							<a href="index.php?controller=memberfeedback&action=delivery&ID=<?php echo $rows->ID; ?>" class="label label-info">Duyệt</a>
 							&nbsp;&nbsp;
 						<?php endif; ?>
 						<a href="index.php?controller=memberfeedback&action=detail&ID=<?php echo $rows->ID; ?>" class="label label-success">Chi tiết</a>
						 <a href="index.php?controller=memberfeedback&action=delete&ID=<?php echo $rows->ID; ?>" class="label label-success">Delete</a>
 					</td>
 				</tr>
 				<?php endforeach; ?>
 			</table>
 			<style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=memberfeedback&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
 		</div>
 	</div>
 </div>