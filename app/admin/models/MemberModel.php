<?php 
	trait MemberModel{
		//liệt kê các bản ghi có phân trang
		public function modelRead($recordPerPage){
			//lấy biến p truyền từ url
			$page = isset($_GET["p"])&&$_GET['p'] > 0 ? $_GET['p'] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from member order by id desc limit $from,$recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from member");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from member where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		//update ban ghi
		public function modelUpdate($id){
			$code = $_POST['code'];
			$name = $_POST['name'];
			$birthdate = $_POST["birthdate"];
            $class = $_POST["class"];
            $department = $_POST["department"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
			$time = $_POST['timejoin'];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update member set Stu_Code=:var_Code,Stu_Name=:var_Name,BirthDate=:var_BirthDate,Class=:var_Class,Department=:var_Department,Addresss=:var_Address,Phone=:var_Phone,Email=:var_Email,TimeJoin=:var_TimeJoin where id=:var_id");
			$query->execute(["var_Code"=>$code,"var_Name"=>$name,"var_BirthDate"=>$birthdate,"var_Class"=>$class,"var_Department"=>$department,"var_Address"=>$address,"var_Phone"=>$phone,"var_Email"=>$email,"var_TimeJoin"=>$time,"var_id"=>$id]);
			//neu user chon anh de update thi tien hanh upload anh
			if($_FILES['photo']['name'] != ""){
				//lay ten anh
				$photo = time()."_".$_FILES['photo']['name'];
				//upload anh
				move_uploaded_file($_FILES['photo']['tmp_name'], "../assets/upload/news/$photo");
				//update cot photo trong table users
				$query = $conn->prepare("update member set image=:var_photo where id=:var_id");
				$query->execute(["var_photo"=>$photo,"var_id"=>$id]);
			}
		}
		//insert ban ghi
		public function modelCreate(){
			$code = $_POST['code'];
			$name = $_POST['name'];
			$birthdate = $_POST["birthdate"];
            $class = $_POST["class"];
            $department = $_POST["department"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
			$time = $_POST['timejoin'];
			$photo = "";
			//neu user chon anh de update thi tien hanh upload anh
			if($_FILES['photo']['name'] != ""){
				//lay ten anh
				$photo = time()."_".$_FILES['photo']['name'];
				//upload anh
				move_uploaded_file($_FILES['photo']['tmp_name'], "../assets/upload/news/$photo");
			}
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into member set Stu_Code=:var_Code,Stu_Name=:var_Name,BirthDate=:var_BirthDate,Class=:var_Class,Department=:var_Department,Addresss=:var_Address,Phone=:var_Phone,Email=:var_Email,Image=:var_Image,TimeJoin=:var_TimeJoin");
			$query->execute(["var_Code"=>$code,"var_Name"=>$name,"var_BirthDate"=>$birthdate,"var_Class"=>$class,"var_Department"=>$department,"var_Address"=>$address,"var_Phone"=>$phone,"var_Email"=>$email,"var_Image"=>$photo,"var_TimeJoin"=>$time]);
			
		}
		//xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET["ID"]) && is_numeric($_GET["ID"]) ? $_GET["ID"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from member where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
		//lay ten danh muc san pham
		// public function getCategory($category_id){
		// 	//lay bien ket noi csdl
		// 	$conn = Connection::getInstance();
		// 	$query = $conn->prepare("select * from categories where id=:var_category_id");
		// 	$query->execute(["var_category_id"=>$category_id]);
		// 	//tra ve mot ban ghi
		// 	return $query->fetch(PDO::FETCH_OBJ);
		// }
	}
 ?>