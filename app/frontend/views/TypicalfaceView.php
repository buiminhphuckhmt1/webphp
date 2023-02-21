<?php 
	//load file LayoutTrangChu.php vao day
	$layout = "LayoutTrangChu.php";
 ?>
 <div class="typical-face-wrapper">
            <div class="container">
                <h1>GƯƠNG MẶT TIÊU BIỂU ĐỘI TNTN KHOA CNTT</h1>
                <?php 
                $hotface = $this->hotface();
               ?>
               <?php foreach($hotface as $row): ?>
                <div class="typical-face-content-wrapper">
                    <div  class="typical-face-content">
                    <div class="left-content">
                        <div class="image-wrapper">
                        <img src="../assets/upload/news/<?php echo $row->Image; ?>" alt="">
                        </div>
                        <h3><?php echo $row->Name; ?></h3>
                    </div>
                    <div class="right-contet">
                        <ul>
                            <li>
                                Họ và tên: <?php echo $row->Name; ?>
                            </li>
                            <li>
                                Chức vụ: <?php echo $row->Position; ?>
                            </li>
                            <li>
                                Năm sinh: <?php echo $row->BirthDate; ?>
                            </li>
                            <li>
                                Lớp - Khóa: <?php echo $row->Class; ?>
                            </li>
                            <li>
                                Quê quán: <?php echo $row->Address; ?>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <p>
                        <?php echo $row->Description; ?> 
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>