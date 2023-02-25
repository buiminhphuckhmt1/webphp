<?php
//load file LayoutView.php vao day
$layout = "LayoutView.php";
?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit fianance</div>
        <div class="panel-body">
            <!-- muốn upload được file thì trong thẻ form phải có thuộc tính enctype="multipart/form-data" -->
            <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">

                <!-- rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Nội dung</div>
                    <div class="col-md-10">
                        <textarea id="content"
                            name="content"><?php echo isset($record->Content) ? $record->Content : ''; ?></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace("content");
                        </script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Thu/Chi?</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->Action) ? $record->Action : ''; ?>" name="action"
                            class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Tổng tiền</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->Total) ? $record->Total : ''; ?>" name="total" class="form-control" required style="width: 600px;">VND
                    </div>
                </div>
                <!-- end rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Người thu</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->Collecter) ? $record->Collecter : ''; ?>"
                            name="collecter" class="form-control" required>
                    </div>
                </div>
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Ngày thống kê</div>
                    <div class="col-md-10">
                        <input type="text"
                            value="<?php $time = date("Y/m/d");
                            echo isset($record->CollectionTime) ? $record->CollectionTime : $time; ?>"
                            name="collectiondate" class="form-control" required>
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