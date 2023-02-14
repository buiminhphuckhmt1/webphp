<?php 
    //load file LayoutView.php vao day
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit product</div>
        <div class="panel-body">
        <!-- muốn upload được file thì trong thẻ form phải có thuộc tính enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:''; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Discount</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->discount)?$record->discount:'0'; ?>" name="discount" required style="width: 150px;"> %
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Price</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->price)?$record->price:'0'; ?>" name="discount" required style="width: 150px;"> VNĐ
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Category</div>
                <div class="col-md-10">
                    <?php 
                        $conn = Connection::getInstance();
                        $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
                        $categories = $query->fetchAll(PDO::FETCH_OBJ);
                     ?>
                    <select name="category_id" class="form-control" style="width: 300px;">
                        <?php foreach($categories as $rows): ?>
                        <option <?php if(isset($record->category_id) && $record->category_id == $rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                            <?php 
                                $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
                                $categoriesSub = $querySub->fetchAll(PDO::FETCH_OBJ);
                             ?>
                            <?php foreach($categoriesSub as $rowsSub): ?>
                            <option <?php if(isset($record->category_id) && $record->category_id == $rowsSub->id): ?> selected <?php endif; ?> value="<?php echo $rowsSub->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowsSub->name; ?></option>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Description</div>
                <div class="col-md-10">
                    <textarea id="description" name="description"><?php echo isset($record->description)?$record->description:''; ?></textarea>
                    <script type="text/javascript">
                    	CKEDITOR.replace("description");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Content</div>
                <div class="col-md-10">
                    <textarea id="content" name="content"><?php echo isset($record->content)?$record->content:''; ?></textarea>
                    <script type="text/javascript">
                    	CKEDITOR.replace("content");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Hot</div>
                <div class="col-md-10">
                    <input type="checkbox" <?php if(isset($record->hot) && $record->hot == 1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hot">Hot</label>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Upload image</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>

