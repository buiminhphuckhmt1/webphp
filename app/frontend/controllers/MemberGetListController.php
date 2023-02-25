<?php 
    include "models/MemberGetListModel.php";
	class MemberGetListController extends Controller{
		//ke thua class HomeModel
    use MemberGetListModel;
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
			$this->loadView("ListMemberView.php",["data"=>$data,"numPage"=>$numPage]);
		}
}
?>