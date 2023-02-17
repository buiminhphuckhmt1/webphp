<?php 
    //load file layout vao day
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">
    <div class="panel panel-default" style="margin-bottom:5px;">
        <div class="panel-heading">Thông tin phản hồi</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <?php foreach($data as $rows): ?>
                <tr>
                    <th style="width:150px;">Họ và tên</th>
                    <th><?php echo isset($rows->Name)?$rows->Name:""?></th>
                </tr>
                <tr>
                    <th style="width:150px;">Email</th>
                    <th><?php echo isset($rows->Email)?$rows->Email:""; ?></th>
                </tr>
                <tr>
                    <th style="width:150px;">Nội dung</th>
                    <th><?php echo isset($rows->Content)?$rows->Content:""; ?></th>
                </tr>
                <?php endforeach; ?>
            </table>            
        </div>
        <div class="panel-footer"><a href="#" onclick="history.go(-1);" class="btn btn-primary">Quay lại</a></div>
    </div>
</div>