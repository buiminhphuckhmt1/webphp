<?php 
  $layout = "LayoutTrangTrong.php";
 ?>
<div class="login-wrapper">
            <div class="w-594">
                <div class="logo-login">
                    <img src="../template/images/comon/logo_tntn_2.png" alt="">
                    <h1>Đăng nhập</h1>
                </div>
                <form method="post" class="login-form" action="index.php?controller=account&amp;action=loginPost">
                    <div class=" group-form">
                        <h5>Tài khoản</h5>
                        <input type="email" name="email" placeholder="">
                    </div>
                    <div class=" group-form">
                        <h5>Mật khẩu</h5>
                        <input type="password" name="password" placeholder="">
                    </div>
                    <div class=" group-form">
                        <button type="submit">Đăng nhập</button>
                    </div>
                </form>
            </div>
            <div id="modal">
                <div class="modal-content">
                    <p>Sai tài khoản hoặc mật khẩu!<br><br>
                        <strong>vui lòng nhập lại</strong>.</p>
                        <span class="close">&times;</span>
                </div>
            </div>
</div>