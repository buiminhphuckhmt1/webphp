<?php 
	//include file model vao day
	include "models/UserFeedbackModel.php";
	class UserFeedbackController extends Controller{
		//ke thua class OrdersModel
		use UserFeedbackModel;
		//ham tao duoc khoi tao dau tien
		// public function __construct(){
		// 	//kiem tra user dang nhap chua
		// 	if(isset($_SESSION['admin_email']) == false)
		// 		header('location:index.php?controller=login');
		// }
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("UserFeedbackView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function detail(){
			$id = isset($_GET['ID']) ? $_GET['ID'] : 0;
			$data = $this->modelDetail($id);
			//goi view, truyen du lieu ra view
			// $action = "index.php?controller=userfeednack&action=modelDetail&ID=$id";
			// //lay mot ban ghi
			// $record = $this->modelDetail($id);
			$this->loadView("UserFeedbackDetailView.php",["data"=>$data,"ID"=>$id]);
		}
		//xac nhan da phan hoi
		public function delivery(){
			$id = isset($_GET['ID']) ? $_GET['ID'] : 0;
			$this->modelDelivery($id);
			header("location:index.php?controller=userfeedback");
		}

		//xoa phan hoi
		public function delete(){
			//lay bien id truyen tu url
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			//xoa ban ghi
			$record = $this->modelDelete($id);
			//quay tro lai trang user
			header("location:index.php?controller=userfeedback");
		}
	}
 ?>