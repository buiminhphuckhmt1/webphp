<?php 
	trait UserRegisterModel{
		//liệt kê các bản ghi có phân trang
		public function modelRead($recordPerPage){
			//lấy biến p truyền từ url
			$page = isset($_GET["p"])&&$_GET['p'] > 0 ? $_GET['p'] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from user order by id desc limit $from,$recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from user");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from user where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		//insert ban ghi
		//insert ban ghi
		public function modelCreate(){
			$name = $_POST['name'];
			$birthdate = $_POST["birthdate"];
			$code = $_POST['code'];
            $class = $_POST["class"];
            $department = $_POST["department"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
			$time = $_POST['timejoin'];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into member set Stu_Name=:var_Name,Stu_Code=:var_Code,BirthDate=:var_BirthDate,Class=:var_Class,Department=:var_Department,Addresss=:var_Address,Phone=:var_Phone,Email=:var_Email,TimeJoin=:var_TimeJoin");
			$query->execute(["var_Name"=>$name,"var_BirthDate"=>$birthdate,"var_Code"=>$code,"var_Class"=>$class,"var_Department"=>$department,"var_Address"=>$address,"var_Phone"=>$phone,"var_Email"=>$email,"var_TimeJoin"=>$time]);
			
		}
		public function modelDelivery($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("update user set status = 1 where id = $id");
		}
		//xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET["ID"]) && is_numeric($_GET["ID"]) ? $_GET["ID"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from user where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>