<?php 
	//HomeController ke thua class Controller
	class HomeController extends Controller{
		//hàm tạo là hàm mặc định được gọi đầu tiên
		public function __construct(){
			//kiểm tra xem user đã đăng nhập chưa
			$this->authenticationadmin();
			/*
				if(isset($_SESSION['admin_email']) == false)
					header("location:index.php?controller=login");
			*/
		}
		public function index(){
			//goi view
			$this->loadView("HomeView.php");
		}
	}
 ?>