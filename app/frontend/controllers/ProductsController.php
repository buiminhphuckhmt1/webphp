<?php 
	//include filde ProductsModel.php
	include "models/ProductsModel.php";
	class ProductsController extends Controller{
		//ke thua class ProductsModel
		use ProductsModel;
		//hien thi danh sach cac ban ghi
		public function category(){
			$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 50;
			//lay tong so bang hi
			$totalRecord = $this->modelTotalRecord();
			//tinh so trang: ham ceil(so) se lay tran. VD: ceil(3.6) = 4
			$numPage = ceil($totalRecord/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("ProductsCategoryView.php",["data"=>$data,"numPage"=>$numPage,"category_id"=>$category_id]);
		}		
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$record = $this->modelGetRecord($id);
			//goi view, truyen du lieu ra view
			$this->loadView("ProductsDetailView.php",["record"=>$record]);
		}
		//đánh giá số sao sản phẩm
		public function rating(){
			$productId = isset($_GET["id"]) ? $_GET["id"] : 0;
			$this->modelRating();
			//di chuyển đến trang chi tiết sản phẩm
			header("location:index.php?controller=products&action=detail&id=$productId");
		}
	}
 ?>