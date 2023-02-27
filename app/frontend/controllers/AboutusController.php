<?php 
	include "models/AboutusModel.php";
	class AboutusController extends Controller{
		use AboutusModel;
		public function index(){
			$_SESSION['btnn'] = "display:block;";
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 3;
			//lay tong so bang hi
			$totalRecord = $this->modelTotalRecord();
			//tinh so trang: ham ceil(so) se lay tran. VD: ceil(3.6) = 4
			$numPage = ceil($totalRecord/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("AboutusView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//get fb
		public function getfb(){
			$id = isset($_GET['ID'])&&isset($_GET['ID']) ? $_GET['ID'] : 0;			
			$record = $this->modelGetRecord($id);
			$this->loadView("AboutusView.php",["record"=>$record,"ID"=>$id]);
		}
	}
 ?>