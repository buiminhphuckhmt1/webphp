<?php 
    //load file LayoutView.php vao day
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit notify</div>
        <div class="panel-body">
        <!-- muốn upload được file thì trong thẻ form phải có thuộc tính enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tiêu đề</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Title)?$record->Title:''; ?>" name="title" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Nội dung</div>
                <div class="col-md-10">
                    <textarea id="content" name="content"><?php echo isset($record->Content)?$record->Content:''; ?></textarea>
                    <script type="text/javascript">
                    	CKEDITOR.replace("content");
                    </script>
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

