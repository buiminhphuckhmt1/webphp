<?php
//load file layout vao day
$layout = "LayoutTrangChu.php";
?>
<div class="activity-wrapper">
    <div class="container">

        <h1>
            <?php echo isset($record->Title) ? $record->Title : ""; ?>
        </h1>
        <div class="blog-detail-wrapper">
            <?php echo isset($record->Content) ? $record->Content : ""; ?>

        </div>

    </div>
</div>