<?php 
    //load file LayoutView.php
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=products&action=create" class="btn btn-primary">Add product</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List product</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Photo</th>
                    <th>Name</th>
                    <th style="width:200px; text-align: center;">Category</th>
                    <th style="width:120px;">Price</th>
                    <th style="width:70px;">Discount</th>
                    <th style="width:70px;">Hot</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $row): ?>
                <tr>
                    <td>
                        <?php if($row->photo != ""&&file_exists("../assets/upload/products/".$row->photo)): ?>
                        <img src="../assets/upload/products/<?php echo $row->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $row->name; ?></td>
                    <td style="text-align:center;">
                        <?php 
                            //lay 1 ban ghi danh muc san pham tuong ung voi category_id
                            $category = $this->getCategory($row->category_id);
                            echo isset($category->name) ? $category->name : "";
                         ?>
                    </td>
                    <td><?php echo number_format($row->price); ?> VNĐ</td>
                    <td style="text-align: center;"><?php echo $row->discount; ?> %</td>
                    <td>
                        <?php if($row->hot == 1): ?>
                            <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=products&action=update&id=<?php echo $row->id; ?>">Edit</a>&nbsp;
                        <a href="index.php?controller=products&action=delete&id=<?php echo $row->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                    <li class="page-item"><a class="page-link" href="index.php?controller=products&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>