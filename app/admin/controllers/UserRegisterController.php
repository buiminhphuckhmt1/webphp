<?php 
	//include filde ProductsModel.php
	include "models/UserRegisterModel.php";
	class UserRegisterController extends Controller{
		//ke thua class ProductsModel
		use UserregisterModel;
		//hien thi danh sach cac ban ghi
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 50;
			//lay tong so bang hi
			$totalRecord = $this->modelTotalRecord();
			//tinh so trang: ham ceil(so) se lay tran. VD: ceil(3.6) = 4
			$numPage = ceil($totalRecord/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("UserRegisterView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//them ban ghi
		//url: index.php?controller=Member&action=create
		public function create(){
			$id = isset($_GET['ID']) ? $_GET['ID'] : 0;
			//deli
			//$this->modelDelivery($id);
			//tao bien $action de gan vao thuoc tinh action cua the form
			$record = $this->modelGetRecord($id);
			$action = "index.php?controller=userregister&action=createPost";
			$this->loadView("UserRegisterFormView.php",["action"=>$action,"record"=>$record]);
		}
		//them ban ghi - POST -> khi an nut submit
		//url:index.php?controller=Member&action=createPost
		public function createPost(){
			//goi ham modelCreate de update ban ghi
			$this->modelCreate();
			//quay tro lai trang user
			header("location:index.php?controller=userregister");
		}
		//xoa ban ghi
		//url: index.php?controller=Member&action=delete&id=number
		public function delete(){
			//lay bien id truyen tu url
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			//xoa ban ghi
			$record = $this->modelDelete($id);
			//quay tro lai trang user
			header("location:index.php?controller=userregister");
		}
		public function delivery(){
			$id = isset($_GET['ID']) ? $_GET['ID'] : 0;
			$this->modelDelivery($id);
			header("location:index.php?controller=userregister");
		}
	}
 ?>