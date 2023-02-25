<?php 
	class Controller{
		//hàm hiển thị dữ liệu
		//đầu vào biến $data phải là một array nếu có dữ liệu
		public function loadView($fileName,$data = null){
			//kiểm tra xem biến $data có dữ liệu hay không, nếu có thì dùng hàm extract để biến tên key thành tên biến
			if(is_null($data) == false)
				extract($data);
			//nếu tồn tại file thì load nội dung file vào đây để đọc nó vào một biến
			$content = "";
			$contentMvc = "";
			if(file_exists("views/$fileName")){
				//load file vào đây để đọc nội dung
				ob_start();
					include "views/$fileName";
					$contentMvc = ob_get_contents();
				ob_get_clean();
			}
			//kiểm tra nếu có biến $layout thì include biến này vào, nếu không thì sẽ xuất nội dung của biên $content
			if(isset($layout) && file_exists("views/$layout")){
				//load file vào đây để đọc nội dung
				ob_start();
					include "views/$layout";
					$content = ob_get_contents();
				ob_get_clean();
				//return $content;
			}
			if($content != "")
				echo $content;
			else
				echo $contentMvc;
		}
		public function authentication(){
			//kiểm tra xem user đã đăng nhập chưa
			if(isset($_SESSION['admin_email']) == false)
				header("location:index.php?controller=account");
		}
		public function authenticationadmin(){
			//kiểm tra xem user đã đăng nhập chưa
			if(isset($_SESSION['admin_email']) == false)
				header("location:index.php?controller=login");
		}
	}
 ?>