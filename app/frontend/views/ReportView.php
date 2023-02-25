<?php
//load file layout vao day
$layout = "LayoutTrangChu.php";
?>
<div class="message-wrapper">
    <div class="container">
        <div class="message-content">
            <h1>BẠN CÓ THÔNG BÁO TỪ ĐỘI TNTN KHOA CNTT</h1>
            <form action="" class="message-form">
                <table>
                    <?php $index = 1;
                    foreach ($data as $rows): ?>
                        <tr>
                            <td>
                                <div class="message-detail">
                                    <?php echo ($index);
                                    $index++; ?>
                                </div>
                            </td>
                            <td>
                                <div style="min-width: 700px;" class="message-detail">
                                    <?php echo $rows->Title ?>
                                </div>
                            </td>
                            <td>
                                <div class=" message-detail">
                                    <a style="text-decoration: none;color:white;border-radius:10px;padding: 5px 10px;background-color: blue;" href="index.php?controller=report&action=getnotify&ID=<?php echo $rows->ID; ?>">Xem </a>
                                </div>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </table>
            </form>
        </div>
    </div>
</div>