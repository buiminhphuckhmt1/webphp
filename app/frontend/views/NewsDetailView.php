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
            <p>
                <img class="img-fluid" src="../assets/upload/news/<?php echo $record->CoverImage; ?>">
            </p>
            
                <?php echo isset($record->Content) ? $record->Content : ""; ?>
            
        </div>

    </div>
</div>