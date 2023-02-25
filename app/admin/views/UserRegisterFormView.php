<?php 
    //load file LayoutView.php vao day
    $layout = "LayoutView.php";
 ?>
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Confirm Member</div>
        <div class="panel-body">
        <!-- muốn upload được file thì trong thẻ form phải có thuộc tính enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Name)?$record->Name:''; ?>" name="name" class="form-control" required style="width:600px">
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
                <div class="col-md-2">Stu_Code</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Stu_Code)?$record->Stu_Code:''; ?>" name="code" required class="form-control" style="width:600px">
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
                <div class="col-md-2">Department</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Department)?$record->Department:''; ?>" name="department" required class="form-control" style="width:600px">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Address</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Address)?$record->Address:''; ?>" name="address" required class="form-control" style="width:600px">
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
                    <div class="col-md-2">Ngày tham gia</div>
                    <div class="col-md-10">
                        <input type="text"
                            value="<?php $time = date("Y/m/d");
                            echo $time; ?>"
                            name="timejoin" class="form-control" required style="width:600px">
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

