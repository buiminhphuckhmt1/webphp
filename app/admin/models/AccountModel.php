<?php 
	trait AccountModel{
		//liệt kê các bản ghi có phân trang
		public function modelRead($recordPerPage){
			//lấy biến p truyền từ url
			$page = isset($_GET["p"])&&$_GET['p'] > 0 ? $_GET['p'] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from account order by id desc limit $from,$recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from account");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from account where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		//update ban ghi
		public function modelUpdate($id){
			$name = $_POST['name'];
			$password = $_POST['password'];
			$role = $_POST['role'];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update account set name=:var_name,role=:var_role where id=:var_id");
			$query->execute(["var_name"=>$name,"var_role"=>$role,"var_id"=>$id]);
			//neu password khong rong thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				$query = $conn->prepare("update account set password=:var_password where id=:var_id");
				$query->execute(["var_password"=>$password,"var_id"=>$id]);
			}
		}
		//insert ban ghi
		public function modelCreate(){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$role = $_POST['role'];


			$password = md5($password);
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into account set name=:var_name,password=:var_password,email=:var_email,role=:var_role");
			$query->execute(["var_name"=>$name,"var_email"=>$email,"var_password"=>$password,"var_role"=>$role]);
		}
		//xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET["ID"]) && is_numeric($_GET["ID"]) ? $_GET["ID"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from account where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>