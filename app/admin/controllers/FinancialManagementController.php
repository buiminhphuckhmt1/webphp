<?php 
	//include filde FinancialManagementModel.php
	include "models/FinancialManagementModel.php";
	class FinancialManagementController extends Controller{
		//ke thua class FinancialManagementModel
		use FinancialManagementModel;
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
			$this->loadView("FinancialManagementView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//sua ban ghi - GET
		//url: index.php?controller=FinancialManagement&action=update&id=number
		public function update(){
			//lay bien id truyen tu url
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			//tao bien $action de gan vao thuoc tinh action cua the form
			$action = "index.php?controller=financialmanagement&action=updatePost&ID=$id";
			//lay mot ban ghi
			$record = $this->modelGetRecord($id);
			$this->loadView("FinancialManagementFormView.php",["action"=>$action,"record"=>$record]);
		}
		//sua ban ghi - POST -> khi an nut submit
		//url:index.php?controller=FinancialManagement&action=updatePost
		public function updatePost(){
			//lay bien id truyen tu url
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate($id);
			//quay tro lai trang user
			header("location:index.php?controller=financialmanagement");
		}
		//them ban ghi
		//url: index.php?controller=FinancialManagement&action=create
		public function create(){
			//tao bien $action de gan vao thuoc tinh action cua the form
			$action = "index.php?controller=financialmanagement&action=createPost";
			$this->loadView("FinancialManagementFormView.php",["action"=>$action]);
		}
		//them ban ghi - POST -> khi an nut submit
		//url:index.php?controller=FinancialManagement&action=createPost
		public function createPost(){
			//goi ham modelCreate de update ban ghi
			$this->modelCreate();
			//quay tro lai trang user
			header("location:index.php?controller=financialmanagement");
		}
		//xoa ban ghi
		//url: index.php?controller=FinancialManagement&action=delete&id=number
		public function delete(){
			//lay bien id truyen tu url
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			//xoa ban ghi
			$record = $this->modelDelete($id);
			//quay tro lai trang user
			header("location:index.php?controller=financialmanagement");
		}
		public function delivery(){
			$id = isset($_GET['ID']) ? $_GET['ID'] : 0;
			$this->modelDelivery($id);
			header("location:index.php?controller=financialmanagement");
		}
	}
 ?>