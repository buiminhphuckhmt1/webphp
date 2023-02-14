<?php 
	trait CategoriesModel{
		//liệt kê các bản ghi có phân trang
		public function modelRead($recordPerPage){
			//lấy biến p truyền từ url
			$page = isset($_GET["p"])&&$_GET['p'] > 0 ? $_GET['p'] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id=0 order by id desc limit $from,$recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id=0");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from categories where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		//update ban ghi
		public function modelUpdate($id){
			$name = $_POST['name'];
			$parent_id = $_POST['parent_id'];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update categories set name=:var_name,parent_id=:var_parent_id where id=:var_id");
			$query->execute(["var_name"=>$name,"var_id"=>$id,"var_parent_id"=>$parent_id]);
		}
		//insert ban ghi
		public function modelCreate(){
			$name = $_POST['name'];
			$parent_id = $_POST['parent_id'];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into categories set name=:var_name,parent_id=:var_parent_id");
			$query->execute(["var_name"=>$name,"var_parent_id"=>$parent_id]);
		}
		//xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//khi xoa danh muc cap cha thi se xoa luong cap con
			$query = $conn->prepare("delete from categories where id=:var_id or parent_id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
		//lấy các danh mục cấp 1
		public function getCategoriesSub($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id=$category_id order by id desc");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
	}
 ?>