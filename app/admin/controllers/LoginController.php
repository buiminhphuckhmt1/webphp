<?php 
	//include file LoginModel.php vao day
	include "models/LoginModel.php";
	class LoginController extends Controller{
		//ke thua class LoginModel
		use LoginModel;
		//url: index.php?controller=login -> action mặc định là index
		public function index(){
			//goi view
			$this->loadView("LoginView.php");
		}
		//khi ấn nút submit ở form login thì sẽ đến hàm sau
		//url: index.php?controller=login&action=doLogin
		public function doLogin(){
			//gọi hàm modelLogin trong class LoginModel để kiểm tra đăng nhập
			$this->modelLogin();
		}
		//đăng xuất
		//url: index.php?controller=login&action=logout
		public function logout(){
			//hủy biến session
			unset($_SESSION['admin_email']);
			header("location:index.php");
		}
	}
 ?>