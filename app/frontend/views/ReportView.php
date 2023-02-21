<?php
//load file layout vao day
$layout = "LayoutTrangChu.php";
?>
<div class="message-wrapper">
    <div class="container">
        <div class="message-content">
            <h1>BẠN CÓ THÔNG BÁO TỪ ĐỘI TNTN KHOA CNTT</h1>
            <form method="post" action="index.php?controller=report&action=getnotify" class="message-form">
                <table>
                    <?php foreach ($data as $rows): ?>
                        <tr>
                            <td>
                                <div class="message-detail">1</div>
                            </td>
                            <td>
                                <div class="message-detail"><?php echo $rows->Title?></div>
                            </td>
                            <td>
                                <div class=" message-detail">
                                    <button class="active" type="submit">Đã xem</button>
                                </div>
                            </td>
                        </tr>
                        <!-- <tr v-for="item in 4">
                                        <td>
                                            <div class="message-detail">1</div>
                                        </td>
                                        <td>
                                            <div class="message-detail">THÔNG BÁO HỌP ĐỘI THƯỜNG XUYÊN THÁNG 12</div>
                                        </td>
                                        <td>
                                            <div class=" message-detail">
                                                <button type="submit">Đã xem</button>
                                            </div>
                                        </td>
                                    </tr> -->
                    <?php endforeach; ?>
                </table>
            </form>
        </div>
    </div>
</div>