<?php 
	//include file model vao day
	include "models/PersonalInformationModel.php";
	class PersonalinformationController extends Controller{
		//ke thua class OrdersModel
		use PersonalinformationModel;
		//ham tao duoc khoi tao dau tien
		public function __construct(){
			//kiem tra user dang nhap chua
			if(isset($_SESSION['email']) == false)
				header('location:index.php?controller=login');
		}
		public function index(){
			//quy dinh so ban ghi tren mot trang
			//$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			$email = $_SESSION['email'];
		
			$record = $this->modelGetRecord($email);
			$this->loadView("PersonalinformationView.php",["record"=>$record]);
			
		}
		public function update(){
			//lay bien id truyen tu url
			//$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			$email = $_SESSION['email'];
			//tao bien $action de gan vao thuoc tinh action cua the form
			$action = "index.php?controller=personalinformation&action=updatePost&id=$email";
			//lay mot ban ghi
			$record = $this->modelGetRecord($email);
			$this->loadView("PersonalinformationFormView.php",["action"=>$action,"record"=>$record]);
		}
		//sua ban ghi - POST -> khi an nut submit
		//url:index.php?controller=Member&action=updatePost
		public function updatePost(){
			//lay bien id truyen tu url
			//$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			$email = $_SESSION['email'];
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate($email);
			//quay tro lai trang user
			header("location:index.php?controller=personalinformation");
		}
		public function updateimage(){
			//lay bien id truyen tu url
			//$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			$email = $_SESSION['email'];
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdateimage($email);
			//quay tro lai trang user
			header("location:index.php?controller=personalinformation");
		}
	}
 ?>