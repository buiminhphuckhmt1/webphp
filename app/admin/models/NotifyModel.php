<?php 
	trait NotifyModel{
		//liệt kê các bản ghi có phân trang
		public function modelRead($recordPerPage){
			//lấy biến p truyền từ url
			$page = isset($_GET["p"])&&$_GET['p'] > 0 ? $_GET['p'] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from notify order by id desc limit $from,$recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from notify");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from notify where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		//update ban ghi
		public function modelUpdate($id){
			$title = $_POST['title'];
			$content = $_POST['content'];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update notify set title=:var_title,content=:var_content where id=:var_id");
			$query->execute(["var_title"=>$title,"var_id"=>$id,"var_content"=>$content]);
			//neu user chon anh de update thi tien hanh upload anh
		}
		//insert ban ghi
		public function modelCreate(){
			$title = $_POST['title'];
			$content = $_POST['content'];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into notify set title=:var_title,content=:var_content");
			$query->execute(["var_title"=>$title,"var_content"=>$content]);
			
		}
		//xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET["ID"]) && is_numeric($_GET["ID"]) ? $_GET["ID"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from notify where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>