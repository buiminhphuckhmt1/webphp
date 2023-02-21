<?php 
	trait PersonalinformationModel{
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
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update member set Stu_Code=:var_Code,Stu_Name=:var_Name,BirthDate=:var_BirthDate,Class=:var_Class,Department=:var_Department,Addresss=:var_Address,Phone=:var_Phone,Email=:var_Email where id=:var_id");
			$query->execute(["var_Code"=>$code,"var_Name"=>$name,"var_BirthDate"=>$birthdate,"var_Class"=>$class,"var_Department"=>$department,"var_Address"=>$address,"var_Phone"=>$phone,"var_Email"=>$email,"var_id"=>$id]);
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
		public function modelUpdateimage($id){
			$conn = Connection::getInstance();
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
	}
 ?>