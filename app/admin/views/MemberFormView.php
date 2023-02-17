<?php 
    //load file LayoutView.php vao day
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit Member</div>
        <div class="panel-body">
        <!-- muốn upload được file thì trong thẻ form phải có thuộc tính enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Stu_Code</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Stu_Code)?$record->Stu_Code:''; ?>" name="code" class="form-control" required style="width:600px">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Stu_Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Stu_Name)?$record->Stu_Name:''; ?>" name="name" required class="form-control" style="width:600px">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">BirthDate</div>
                <div class="col-md-10">
                    <input type="date" value="<?php echo isset($record->BirthDate)?$record->BirthDate:''; ?>" name="birthdate" required class="form-control" style="width:600px">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Class</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Class)?$record->Class:''; ?>" name="class" required class="form-control" style="width:600px">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Faculty</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Department)?$record->Department:''; ?>" name="department" required class="form-control" style="width:600px">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Address</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Addresss)?$record->Addresss:''; ?>" name="address" required class="form-control" style="width:600px">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Email</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Email)?$record->Email:''; ?>" name="email" required class="form-control" style="width:600px">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Phone</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Phone)?$record->Phone:''; ?>" name="phone" required class="form-control" style="width:600px">
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

