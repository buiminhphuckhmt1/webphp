<template>
    <?php foreach($data as $row): ?>
	<div class="article-blog-news">
		<div class="item-image">
			<a href="index.php?controller=news&action=detail&id=<?php echo $row->id; ?>u">
				<img src="../template/images/activity.png" alt="" class="img-fluid" />
			</a>
		</div>
		<div class="item-content">
			<a href="index.php?controller=news&action=detail&id=<?php echo $row->id; ?>u" class="item-name" title="">
				Hội nghị kiện toàn Đội TNTN Khoa CNTT.
			</a>
		</div>
	</div>
    <?php endforeach; ?>
</template>