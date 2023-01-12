<?php 
	//include filde SearchModel.php
	include "models/SearchModel.php";
	class SearchController extends Controller{
		//ke thua class SearchModel
		use SearchModel;
		//hien thi danh sach cac ban ghi
		public function searchName(){
			$key = isset($_GET['key']) ? $_GET['key'] : '';
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 50;
			//lay tong so bang ghi
			$totalRecord = $this->modelTotalRecord();
			//tinh so trang: ham ceil(so) se lay tran. VD: ceil(3.6) = 4
			$numPage = ceil($totalRecord/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("SearchProductNameView.php",["data"=>$data,"numPage"=>$numPage,"key"=>$key]);
		}
		public function searchPrice(){
			$fromPrice = isset($_GET['fromPrice'])&&is_numeric($_GET['fromPrice']) ? $_GET['fromPrice'] : 0;
			$toPrice = isset($_GET['toPrice'])&&is_numeric($_GET['toPrice']) ? $_GET['toPrice'] : 0;
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 50;
			//lay tong so bang ghi
			$totalRecord = $this->modelSearchPriceTotalRecord();
			//tinh so trang: ham ceil(so) se lay tran. VD: ceil(3.6) = 4
			$numPage = ceil($totalRecord/$recordPerPage);
			//lay du lieu
			$data = $this->modelSearchPriceRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("SearchProductPriceView.php",["data"=>$data,"numPage"=>$numPage,"fromPrice"=>$fromPrice,"toPrice"=>$toPrice]);
		}
		//ajax search
		//url: index.php?controller=search&action=ajaxSearch&key=...
		public function ajaxSearch(){
			//goi ham modelAjaxSearch de lay du lieu
			$result = $this->modelAjaxSearch();
			echo $result;
		}
	}
 ?>