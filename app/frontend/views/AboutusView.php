<?php
//load file layout vao day
$layout = "LayoutTrangChu.php";
?>
<div class="introduce-wrapper">
    <div class="container">
        <div class="section-title-wrapper">
            <div class="section-title-left">
                <h1>ĐỘI THANH NIÊN TÌNH NGUYỆN KHOA CÔNG NGHỆ THÔNG TIN
                    TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP HÀ NỘI
                </h1>
                <p> “Muốn đi nhanh thì đi một mình<br>
                    Muốn đi xa thì hãy đi cùng Đội TNTN Khoa CNTT”
                </p>
            </div>
            <div class="section-title-right">
                <div class="logo-images">
                    <img src="../template/images/comon/logo_tntn_2.png" alt="">
                </div>
            </div>
        </div>
        <div class="section-content-wrapper">
            <div class="section-content-left">
                <p>
                    Thành lập từ năm 2008, trải qua 14 năm hoạt động, Đội TNTN Khoa CNTT đã trở thành lực lượng thanh
                    niên tình nguyện nòng cốt và lớn mạnh không chỉ trong Khoa CNTT mà còn là cánh chim đầu đàn cho hoạt
                    động tình nguyện tại Trường Đại học Công Nghiệp Hà Nội.
                </p>
            </div>
            <div class="section-content-right">
                <p>
                    Để có được những thành công ấy, không thể không kể đến những thế hệ BPT của Đội đã xây dựng và tiếp
                    nối những truyền thống tốt đẹp của đội. Một vài những chương trình tiêu biểu của Đội như: Tết ấm yêu
                    thương, Tình nguyện vì cộng đồng, Đạp xe vì môi trường, Mùa hè xanh, ...
                </p>
            </div>
        </div>
        <div class="section-img-wrapper">
            <img src="../template/images/ativity1.png" alt="">
        </div>
        <div class="section-img-content">
            <div class="col-lg-3 col-md-6 col-12 total-content">
                <div class="totalcount">
                    <h1 class="count">250</h1>
                    <h1>+</h1>
                </div>
                <p>
                    Thành viên, Cộng tác viên hoạt động thường trực
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-12 total-content">

                <div class="totalcount">
                    <h1 class="count">14</h1>
                    <h1>+</h1>
                </div>
                <p>
                    Năm hoạt động và phát triển lớn mạnh
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-12 total-content">

                <div class="totalcount">
                    <h1 class="count">20</h1>
                    <h1>+</h1>
                </div>
                <p>
                    Chương trình, hoạt động lớn nhỏ trong một năm.
                </p>
            </div>
        </div>
        <div class="section-content-wrapper">
            <div class="section-content-left">
                <p>
                    Thành lập từ năm 2008, trải qua 14 năm hoạt động, Đội TNTN Khoa CNTT đã trở thành lực lượng thanh
                    niên tình nguyện nòng cốt và lớn mạnh không chỉ trong Khoa CNTT mà còn là cánh chim đầu đàn cho hoạt
                    động tình nguyện tại Trường Đại học Công Nghiệp Hà Nội.
                </p>
            </div>
            <div class="section-content-right">
                <p>
                    Để có được những thành công ấy, không thể không kể đến những thế hệ BPT của Đội đã xây dựng và tiếp
                    nối những truyền thống tốt đẹp của đội. Một vài những chương trình tiêu biểu của Đội như: Tết ấm yêu
                    thương, Tình nguyện vì cộng đồng, Đạp xe vì môi trường, Mùa hè xanh, ...
                </p>
            </div>
        </div>
        <div id="AboutSwiper"  class="section-slide-wrapper">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="../template/images/ativity.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../template/images/ativity1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../template/images/ativity3.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../template/images/ativity4.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../template/images/ativity5.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../template/images/ativity6.png" alt="">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="section-month-category">

            <div class="section-month-category-left">
                <?php foreach ($data as $row): ?>
                    <div class="section-month-category-content">
                        <p>
                            <?php if ($row->Status == 1): ?>
                                <?php echo $row->Content; ?>
                            <?php endif; ?>
                        </p>
                        <svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.629083 31.2725L19.2194 0.872643L35.8973 26.1827L0.629083 31.2725Z" fill="#C9D0F3" />
                        </svg>

                    </div>
                <?php endforeach; ?>
            </div>

            <div class="section-month-category-right">
                <div class="section-month-category-img">
                    <img src="../template/images/3.png" alt="">
                </div>
            </div>
        </div>

    </div>
</div>