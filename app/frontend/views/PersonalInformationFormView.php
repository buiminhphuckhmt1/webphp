<?php 
    //load file layout vao day
    $layout = "LayoutTrangTrong.php";
 ?>
 <div class="register-wrapper">
                <div class="container">
                    <div class="t__top--slider">
                        <div class="backgroud-slide"></div>
                        <div class="left-content">
                            <div class="register-form">
                                <h1>Sửa thông tin cá nhân</h1>
                                <form action="<?php echo $action; ?>" enctype="multipart/form-data"  method="post" >
                                    <div class=" group-form">
                                        <h5>Họ và tên</h5>
                                        <input type="text" value="<?php echo isset($record->Stu_Name)?$record->Stu_Name:''; ?>" name="name" >
                                    </div>
                                    <div class=" group-form">
                                        <h5>ngày sinh</h5>
                                        <input type="date" value="<?php echo isset($record->BirthDate)?$record->BirthDate:''; ?>" name="birthdate" >
                                    </div>
                                    <div class=" group-form">
                                        <h5>ma sinh vien</h5>
                                        <input type="text" value="<?php echo isset($record->Stu_Code)?$record->Stu_Code:''; ?>" name="code" >
                                    </div>
                                    <div class=" group-form">
                                        <h5>lớp-khóa</h5>
                                        <input type="text" value="<?php echo isset($record->Class)?$record->Class:''; ?>" name="class" >
                                    </div>
                                    <div class=" group-form">
                                        <h5>khoa</h5>
                                        <input type="text" value="<?php echo isset($record->Department)?$record->Department:''; ?>" name="department" >
                                    </div>
                                    <div class=" group-form">
                                        <h5>quê quán</h5>
                                        <input type="text" value="<?php echo isset($record->Addresss)?$record->Addresss:''; ?>" name="address" >
                                    </div>
                                    <div class=" group-form">
                                        <h5>số điện thoại</h5>
                                        <input type="text" value="<?php echo isset($record->Phone)?$record->Phone:''; ?>" name="phone" >
                                    </div>
                                    <div class=" group-form">
                                        <h5>email</h5>
                                        <input type="text" value="<?php echo isset($record->Email)?$record->Email:''; ?>" name="email" readonly>
                                    </div>
                                    <div class=" group-form">
                                        <button type="submit">Sửa thông tin</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="right-contet">
                        <form action="index.php?controller=personalinformation&action=updateimage&id" enctype="multipart/form-data"  method="post" >
                            <div class="avatar-img">
                                <img src="../assets/upload/news/<?php echo isset($record->Image)?$record->Image:''; ?>">
                                <label for="uploadfile" class="upload-field">
                                    <input type="file" name="photo" id="uploadfile">
                                    <div class="upload-text">
                                        <p>
                                            + Tải ảnh lên
                                        </p>
                                    </div>
                                </label>
                            
                            </div>
                            <button class="upload" type="submit">Upload ảnh</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>