<?php
//load file layout vao day
$layout = "LayoutTrangChu.php";
?>
<div class="message-wrapper">
    <div class="container">
        <div class="message-content">
            <h1>Danh sách thu chi đội TNTN</h1>
            <form action="" class="message-form">
                <table>
                    <tr style="text-align: center;">
                        <th style="color:black">STT</th>
                        <th style="border-left: 1px solid white; color:black;padding: 15px 0px;">Nội Dung</th>
                        <th style="border-left: 1px solid white;color:black">Tổng Tiền</th>
                        <th style="border-left: 1px solid white;color:black">Người Thống Kê</th>
                        <th style="border-left: 1px solid white;color:black">Ngày Thống Kê</th>
                        <th style="border-left: 1px solid white;color:black">Thu/Chi</th>
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
                            <td>
                                <div  class="message-detail">
                                    <?php echo $rows->Content?>
                                </div>
                            </td>
                            <td>
                                <div  class="message-detail">
                                    <?php echo $rows->Total?>
                                </div>
                            </td>
                            <td>
                                <div  class="message-detail">
                                    <?php echo $rows->Collecter?>
                                </div>
                            </td>
                            <td>
                                <div  class="message-detail">
                                    <?php echo $rows->CollectionDate?>
                                </div>
                            </td>
                            <td>
                                <div  class="message-detail">
                                    <?php echo $rows->Action?>
                                </div>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </table>
            </form>
        </div>
    </div>
</div>