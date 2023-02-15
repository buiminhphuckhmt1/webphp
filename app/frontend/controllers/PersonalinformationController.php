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
			//goi view, truyen du lieu ra view
			$this->loadView("PersonalinformationView.php");
		}
		public function detail(){
			$id = isset($_GET['id']) ? $_GET['id'] : 0;
			$data = $this->modelOrdersDetail($id);
			//goi view, truyen du lieu ra view
			$this->loadView("PersonalinformationFormView.php",["data"=>$data,"id"=>$id]);
		}
	}
 ?>