<?php 
    //load file LayoutView.php
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=users&action=create" class="btn btn-primary">Add user</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List User</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $row): ?>
                <tr>
                    <td><?php echo $row->Name; ?></td>
                    <td><?php echo $row->Email; ?></td>
                    <td><?php echo $row->Role; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=users&action=update&ID=<?php echo $row->ID; ?>">Edit</a>&nbsp;
                        <a href="index.php?controller=users&action=delete&ID=<?php echo $row->ID; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                    <li class="page-item"><a class="page-link" href="index.php?controller=users&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>