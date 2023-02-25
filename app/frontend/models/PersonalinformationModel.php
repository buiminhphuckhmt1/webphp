<?php 
	trait PersonalinformationModel{
		public function modelGetRecord($email){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from member where email=:var_email");
			$query->execute(["var_email"=>$email]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		//update ban ghi
		public function modelUpdate($email){
			$code = $_POST['code'];
			$name = $_POST['name'];
			$birthdate = $_POST["birthdate"];
            $class = $_POST["class"];
            $department = $_POST["department"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update member set Stu_Code=:var_Code,Stu_Name=:var_Name,BirthDate=:var_BirthDate,Class=:var_Class,Department=:var_Department,Addresss=:var_Address,Phone=:var_Phone,Email=:var_Email where Email=:var_Email");
			$query->execute(["var_Code"=>$code,"var_Name"=>$name,"var_BirthDate"=>$birthdate,"var_Class"=>$class,"var_Department"=>$department,"var_Address"=>$address,"var_Phone"=>$phone,"var_Email"=>$email]);
			//neu user chon anh de update thi tien hanh upload anh
			if($_FILES['photo']['name'] != ""){
				//lay ten anh
				$photo = time()."_".$_FILES['photo']['name'];
				//upload anh
				move_uploaded_file($_FILES['photo']['tmp_name'], "../assets/upload/news/$photo");
				//update cot photo trong table users
				$query = $conn->prepare("update member set image=:var_photo where email=:var_email");
				$query->execute(["var_photo"=>$photo,"var_email"=>$email]);
			}
		}
		public function modelUpdateimage($email){
			$conn = Connection::getInstance();
			if($_FILES['photo']['name'] != ""){
				//lay ten anh
				$photo = time()."_".$_FILES['photo']['name'];
				//upload anh
				move_uploaded_file($_FILES['photo']['tmp_name'], "../assets/upload/news/$photo");
				//update cot photo trong table users
				$query = $conn->prepare("update member set image=:var_photo where email=:var_email");
				$query->execute(["var_photo"=>$photo,"var_email"=>$email]);
			}
		}

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
	}
 ?>