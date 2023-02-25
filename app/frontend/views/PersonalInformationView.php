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
                            <form action="">
                                <table>
                                    <tr>
                                        <td>
                                            <h5>Họ và tên:</h5>
                                        </td>
                                        <td>
                                            <h3><?php echo isset($record->Stu_Name)?$record->Stu_Name:''; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                         <td>
                                            <h5>Ngày sinh:</h5>
                                        </td>
                                        <td>
                                            <h3><?php echo isset($record->BirthDate)?$record->BirthDate:''; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Mã sinh viên:</h5>
                                        </td>
                                        <td>
                                            <h3><?php echo isset($record->Stu_Code)?$record->Stu_Code:''; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Lớp-Khóa:</h5>
                                        </td>
                                        <td>
                                            <h3><?php echo isset($record->Class)?$record->Class:''; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Quê quán:</h5>
                                        </td>
                                        <td>
                                            <h3><?php echo isset($record->Addresss)?$record->Addresss:''; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Số điện thoại:</h5>
                                        </td>
                                        <td>
                                            <h3><?php echo isset($record->Phone)?$record->Phone:''; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Email:</h5>
                                        </td>
                                        <td>
                                            <h3><?php echo isset($record->Email)?$record->Email:''; ?></h5>
                                        </td>
                                    </tr>
                                </table>
                                <div class=" group-form">
                                    <button type="submit">
                                    <a href="index.php?controller=personalinformation&action=update&id">
                                     Sửa thông tin
                                    </a>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="right-contet">
                        <div class="avatar-img">
                        <img  class="img-fluid" src="../assets/upload/news/<?php echo isset($record->Image)?$record->Image:''; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>