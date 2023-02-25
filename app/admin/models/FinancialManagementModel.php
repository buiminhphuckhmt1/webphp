<?php 
	trait FinancialManagementModel{
		//liệt kê các bản ghi có phân trang
		public function modelRead($recordPerPage){
			//lấy biến p truyền từ url
			$page = isset($_GET["p"])&&$_GET['p'] > 0 ? $_GET['p'] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from finance order by id desc limit $from,$recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from finance");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from finance where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		//update ban ghi
		public function modelUpdate($id){
			$content = $_POST['content'];
            $total = $_POST['total'];
            $colecter = $_POST['collecter'];
            $collectiondate = $_POST['collectiondate'];
            $action = $_POST["action"];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update finance set total=:var_total,content=:var_content,collecter=:var_collecter,collectiondate=:var_collectiondate,action=:var_action where id=:var_id");
			$query->execute(["var_total"=>$total,"var_id"=>$id,"var_content"=>$content,"var_collecter"=>$colecter,"var_collectiondate"=>$collectiondate,"var_action"=>$action]);
		}
		//insert ban ghi
		public function modelCreate(){
			$content = $_POST['content'];
            $total = $_POST['total'];
            $colecter = $_POST['collecter'];
			$collectiondate = $_POST['collectiondate'];
            $action = $_POST["action"];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into finance set total=:var_total,content=:var_content,collecter=:var_collecter,collectiondate=:var_collectiondate,action=:var_action");
			$query->execute(["var_total"=>$total,"var_content"=>$content,"var_collecter"=>$colecter,"var_collectiondate"=>$collectiondate,"var_action"=>$action]);
			
		}
		//xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET["ID"]) && is_numeric($_GET["ID"]) ? $_GET["ID"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from finance where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
        public function modelDelivery($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("update finance set status = 1 where id = $id");
		}
	}
 ?>