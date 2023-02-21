<?php 
	//include filde NewsModel.php
	include "models/NotifyModel.php";
	class NotifyController extends Controller{
		//ke thua class NotifyModel
		use NotifyModel;
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
			$this->loadView("NotifyView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//sua ban ghi - GET
		//url: index.php?controller=notify&action=update&id=number
		public function update(){
			//lay bien id truyen tu url
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			//tao bien $action de gan vao thuoc tinh action cua the form
			$action = "index.php?controller=notify&action=updatePost&ID=$id";
			//lay mot ban ghi
			$record = $this->modelGetRecord($id);
			$this->loadView("NotifyFormView.php",["action"=>$action,"record"=>$record]);
		}
		//sua ban ghi - POST -> khi an nut submit
		//url:index.php?controller=notify&action=updatePost
		public function updatePost(){
			//lay bien id truyen tu url
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate($id);
			//quay tro lai trang user
			header("location:index.php?controller=notify");
		}
		//them ban ghi
		//url: index.php?controller=notify&action=create
		public function create(){
			//tao bien $action de gan vao thuoc tinh action cua the form
			$action = "index.php?controller=notify&action=createPost";
			$this->loadView("NotifyFormView.php",["action"=>$action]);
		}
		//them ban ghi - POST -> khi an nut submit
		//url:index.php?controller=notify&action=createPost
		public function createPost(){
			//goi ham modelCreate de update ban ghi
			$this->modelCreate();
			//quay tro lai trang user
			header("location:index.php?controller=notify");
		}
		//xoa ban ghi
		//url: index.php?controller=news&action=delete&id=number
		public function delete(){
			//lay bien id truyen tu url
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;
			//xoa ban ghi
			$record = $this->modelDelete($id);
			//quay tro lai trang user
			header("location:index.php?controller=notify");
		}
	}
 ?>