<?php 
    //load file LayoutView.php
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=member&action=create" class="btn btn-primary">Add Member</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List Member</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Image</th>
                    <th style="width:100px;">Code</th>
                    <th style="width:120px; ">Name</th>
                    <th style="width:100px;">BirthDate</th>
                    <th style="width:100px;">Class</th>
                    <th style="width:100px;">Faculty</th>
                    <th style="width:200px;">Address</th>
                    <th style="width:100px;">Phone</th>
                    <th style="width:150px;">Email</th>
                    <th style="width:150px;">TimeJoin</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $row): ?>
                <tr>
                    <td>
                        <?php if($row->Image!= ""&&file_exists("../assets/upload/news/".$row->Image)): ?>
                        <img src="../assets/upload/news/<?php echo $row->Image; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $row->Stu_Code; ?></td>
                    <td><?php echo $row->Stu_Name; ?></td>
                    <td><?php echo $row->BirthDate; ?></td>
                    <td><?php echo $row->Class; ?></td>
                    <td><?php echo $row->Department; ?></td>
                    <td><?php echo $row->Addresss; ?></td>
                    <td><?php echo $row->Phone; ?></td>
                    <td><?php echo $row->Email; ?></td>
                    <td><?php echo $row->TimeJoin; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=member&action=update&ID=<?php echo $row->ID; ?>">Edit</a>&nbsp;
                        <a href="index.php?controller=member&action=delete&ID=<?php echo $row->ID; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                    <li class="page-item"><a class="page-link" href="index.php?controller=member&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>