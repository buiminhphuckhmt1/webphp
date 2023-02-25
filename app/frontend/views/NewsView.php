<?php
$layout = "LayoutTrangChu.php";
?>
<div class="activity-wrapper">
    <div class="container">
        <h1>Hoạt động mới nhất</h1>
        <div class="activity-content-wrapper">
            <!-- <div class="activity-content">
                <div class="left-content">
                    <div class="left-image">
                        <img class="img-fluid" src="../template/images/ativity.png" alt="">
                    </div>
                    <h3>Chương trình “Tết ấm yêu thương 2022” </h3>
                </div>
                <div class="right-content">
                    <div class="activity-right-content" v-for="item in 2">
                        <div class="right-image">
                            <img src="../template/images/activity.png" alt="">
                        </div>
                        <h4>Chương trình “Kế hoạch nhỏ”</h4>
                    </div>
                </div>
            </div> -->
			<div id="scopedSyncSwiper" class="position-relative">
				<div id="mainSwiper">
					<div class="swiper mySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity.png" alt="">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity2.png" alt="">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity3.png" alt="">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity4.png" alt="">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity5.png" alt="">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity6.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="thumbSwiper">
					<div class="wrapper">
					<div  class="swiper mySwiper">
						<div class="swiper-wrapper">
						<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity.png" alt="">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity2.png" alt="">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity3.png" alt="">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity4.png" alt="">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity5.png" alt="">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="item">
									<img src="../template/images/ativity6.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				</div>
			</div>
            <div class="blog-wrapper">
            <div class="row" style="width:100%;">
                <?php foreach ($data as $row): ?>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="article-blog-news">
                        <div class="item-image">
                            <a href="index.php?controller=news&action=detail&ID=<?php echo $row->ID; ?>">
                                <?php if ($row->CoverImage != "" && file_exists("../assets/upload/news/" . $row->CoverImage)): ?>
                                    <img class="img-fluid" src="../assets/upload/news/<?php echo $row->CoverImage; ?>">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="item-content">
                            <a href="index.php?controller=news&action=detail&ID=<?php echo $row->ID; ?>" class="item-name"
                                title="">
                                <?php echo $row->Title; ?>
                            </a>
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?>
            </div>
            </div>
        </div>
    </div>
</div>