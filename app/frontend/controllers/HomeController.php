<?php 
	//include file HomeModel.php
	include "models/HomeModel.php";
	include "models/MemberfbModel.php";
	class HomeController extends Controller{
		//ke thua class HomeModel
		use HomeModel;
		use MemberfbModel;

		public function __construct(){
			//kiem tra user dang nhap chua
			if(isset($_SESSION['email']) == false)
				header('location:index.php?controller=login');
		}
		public function index(){
			$this->loadView("HomeView.php");
		}
		
		public function sendfb(){
			$email = $_SESSION['email'];
			$name = $_SESSION['name'];
			$this->modelCreate($email,$name);
			header("location:index.php?controller=home");
		}
	}
 ?>