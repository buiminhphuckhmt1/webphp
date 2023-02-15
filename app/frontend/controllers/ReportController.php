<?php 
	//include filde UsersModel.php
	include "models/ReportModel.php";
	class ReportController extends Controller{
		//ke thua class UsersModel
		use ReportModel;
		//hien thi danh sach cac ban ghi
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 4;
			//lay tong so bang hi
			$totalRecord = $this->modelTotalRecord();
			//tinh so trang: ham ceil(so) se lay tran. VD: ceil(3.6) = 4
			$numPage = ceil($totalRecord/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("ReportView.php",["data"=>$data,"numPage"=>$numPage]);
		}
	}
 ?>