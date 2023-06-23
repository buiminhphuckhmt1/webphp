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
                                <div class="message-detail">
                                    <?php echo $rows->Content ?>
                                </div>
                            </td>
                            <td>
                                <div class="message-detail">
                                    <?php echo $rows->Total ?>
                                </div>
                            </td>
                            <td>
                                <div class="message-detail">
                                    <?php echo $rows->Collecter ?>
                                </div>
                            </td>
                            <td>
                                <div class="message-detail">
                                    <?php echo $rows->CollectionDate ?>
                                </div>
                            </td>
                            <td>
                                <div class="message-detail">
                                    <?php echo $rows->Action ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </form>
            <form class="message-form">
                <table style="margin-top: 30px">
                    <tr style="text-align: center;">
                        <th style="color:black">Tổng thu</th>
                        <th style="border-left: 1px solid white;color:black">Tổng chi</th>
                        <th style="border-left: 1px solid white;color:black">Còn lại</th>
                    </tr>
                    <?php $s1 = 0;
                    $s2 = 0;
                    foreach ($data as $rows): ?>
                        <?php if ($rows->Action == "Thu"): ?>
                            <?php $s1 = $s1 + $rows->Total ?>
                        <?php endif; ?>

                        <?php if ($rows->Action == "Chi"): ?>
                            <?php $s2 = $s2 + $rows->Total ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <tr style="text-align: center;">
                        <td>
                            <?php echo $s1 ?>
                        </td>
                        <td>
                            <?php echo $s2 ?>
                        </td>
                        <td>
                            <?php echo ($s1 - $s2) ?>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>