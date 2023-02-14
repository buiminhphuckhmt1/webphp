<?php 
	//include filde NewsModel.php
	include "models/NewsModel.php";
	class NewsController extends Controller{
		//ke thua class NewsModel
		use NewsModel;
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
			$this->loadView("NewsView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//sua ban ghi - GET
		//url: index.php?controller=news&action=update&id=number
		public function detail(){
			//lay bien id truyen tu url
			$id = isset($_GET['id'])&&isset($_GET['id']) ? $_GET['id'] : 0;			
			$record = $this->modelGetRecord($id);
			$this->loadView("NewsDetailView.php",["record"=>$record,"id"=>$id]);
		}		
	}
 ?>