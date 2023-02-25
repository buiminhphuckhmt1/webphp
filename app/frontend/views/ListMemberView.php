<?php
//load file layout vao day
$layout = "LayoutTrangChu.php";
?>
<div class="message-wrapper">
    <div class="container">
        <div class="message-content">
            <h1>DANH SÁCH THÀNH VIÊN ĐỘI TNTN KHOA CNTT</h1>
            <form action="" class="message-form">
                <table>
                    <tr style="text-align: center;">
                        <th style="color:black">STT</th>
                        <th style="border-left: 1px solid white; color:black;padding: 15px 0px;">Ảnh</th>
                        <th style="border-left: 1px solid white;color:black">Họ Và Tên</th>
                        <th style="border-left: 1px solid white;color:black">Lớp-Khóa</th>
                        <th style="border-left: 1px solid white;color:black">Quê Quán</th>
                        <th style="border-left: 1px solid white;color:black">Năm Tham Gia</th>
                    </tr>
                    <?php $index = 1;
                    foreach ($data as $rows): ?>
                        <tr>
                            <td>
                                <div class="message-detail">
                                    <?php echo ($index);
                                    $index++; ?>
                                </div>
                            </td>
                            <td style="text-align: center;max-width: 170px;">
                                <img style="max-width: 150px;margin:10px  0px;" class="img-fluid" src="../assets/upload/news/<?php echo $rows->Image; ?>">
                            </td>
                            <td>
                                <div  class="message-detail">
                                    <?php echo $rows->Stu_Name ?>
                                </div>
                            </td>
                            <td>
                                <div  class="message-detail">
                                    <?php echo $rows->Class ?>
                                </div>
                            </td>
                            <td>
                                <div  class="message-detail">
                                    <?php echo $rows->Addresss ?>
                                </div>
                            </td>
                            <td>
                                <div  class="message-detail">
                                    <?php echo $rows->TimeJoin ?>
                                </div>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </table>
            </form>
        </div>
    </div>
</div>