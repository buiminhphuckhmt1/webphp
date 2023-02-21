<template>
	<?php foreach ($data as $row): ?>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12S">
				<div class="article-blog-news">
					<div class="item-image">
						<a href="index.php?controller=news&action=detail&ID=<?php echo $row->ID; ?>u">
							<?php if ($row->CoverImage != "" && file_exists("../assets/upload/news/" . $row->CoverImage)): ?>
								<img src="../assets/upload/news/<?php echo $row->CoverImage; ?>" style="width:100px;">
							<?php endif; ?>
						</a>
					</div>
					<div class="item-content">
						<a href="index.php?controller=news&action=detail&id=<?php echo $row->id; ?>u" class="item-name"
							title="">
							<?php echo $row->Title; ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</template>