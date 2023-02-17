<?php 
	$layout = "LayoutTrangTrong.php";
 ?>
<div class="register-wrapper">
            <div class="container">
                <div class="t__top--slider">
                    <div class="backgroud-slide"></div>
                    <div class="left-content">
                        <div class="register-form">
                            <h1>đơn xin tham gia đội</h1>
                            <form action="index.php?controller=account&action=registerPost" method="post">
                                <div class=" group-form">
                                    <h5>Họ và tên</h5>
                                    <input type="text" name="name" placeholder="Tìm kiếm thông tin">
                                </div>
                                <div class=" group-form">
                                    <h5>Ngày sinh</h5>
                                    <input type="date" name="birthdate" placeholder="Tìm kiếm thông tin">
                                </div>
                                <div class=" group-form">
                                    <h5>Mã sinh viên</h5>
                                    <input type="text" name="code" placeholder="Tìm kiếm thông tin">
                                </div>
                                <div class=" group-form">
                                    <h5>Lớp-khóa</h5>
                                    <input type="text" name="class" placeholder="Tìm kiếm thông tin">
                                </div>
                                <div class=" group-form">
                                    <h5>Khoa</h5>
                                    <input type="text" name="department" placeholder="Tìm kiếm thông tin">
                                </div>
                                <div class=" group-form">
                                    <h5>quê quán</h5>
                                    <input type="text" name="address" placeholder="Tìm kiếm thông tin">
                                </div>
                                <div class=" group-form">
                                    <h5>số điện thoại</h5>
                                    <input type="text" name="phone" placeholder="Tìm kiếm thông tin">
                                </div>
                                <div class=" group-form">
                                    <h5>email</h5>
                                    <input type="text" name="email" placeholder="Tìm kiếm thông tin">
                                </div>
                                <div class=" group-form">
                                    <h5>mong muốn</h5>
                                    <textarea type="text" name="desire" placeholder="Tìm kiếm thông tin"></textarea>
                                </div>
                                <div class=" group-form">
                                    <button type="submit">Nộp đơn</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="right-contet">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <img src="../template/images/1.png" alt="">
                              </div>
                              <div class="swiper-slide">
                                <img src="../template/images/1.png" alt="">
                              </div>
                              <div class="swiper-slide">
                                <img src="../template/images/1.png" alt="">
                              </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>