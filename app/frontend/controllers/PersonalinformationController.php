<?php 
	//include file model vao day
	include "models/PersonalInformationModel.php";
	class PersonalinformationController extends Controller{
		//ke thua class OrdersModel
		use PersonalinformationModel;
		//ham tao duoc khoi tao dau tien
		public function __construct(){
			//kiem tra user dang nhap chua
			if(isset($_SESSION['admin_email']) == false)
				header('location:index.php?controller=login');
		}
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;

			$record = $this->modelGetRecord($id);
			$this->loadView("PersonalinformationView.php",["record"=>$record]);
		}
		public function update(){
			//lay bien id truyen tu url
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			//tao bien $action de gan vao thuoc tinh action cua the form
			$action = "index.php?controller=personalinformation&action=updatePost&id=$id";
			//lay mot ban ghi
			$record = $this->modelGetRecord($id);
			$this->loadView("PersonalinformationFormView.php",["action"=>$action,"record"=>$record]);
		}
		//sua ban ghi - POST -> khi an nut submit
		//url:index.php?controller=Member&action=updatePost
		public function updatePost(){
			//lay bien id truyen tu url
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate($id);
			//quay tro lai trang user
			header("location:index.php?controller=personalinformation");
		}
		public function updateimage(){
			//lay bien id truyen tu url
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdateimage($id);
			//quay tro lai trang user
			header("location:index.php?controller=personalinformation");
		}
	}
 ?>