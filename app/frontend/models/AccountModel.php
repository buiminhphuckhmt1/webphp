<?php 
	trait AccountModel{
		//dang ky
		public function modelRegister(){
			$name = $_POST["name"];
            $birthdate = $_POST["birthdate"];
			$code = $_POST["code"];
            $class = $_POST["class"];
            $department = $_POST["department"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $desire = $_POST["desire"];

			//kiem tra xem email nay da ton tai chua, neu chua ton tai thi moi insert vao csdl
			$conn = Connection::getInstance();
			$check = $conn->prepare("select email from user where email=:var_email");
			$check->execute(["var_email"=>$email]);
			if($check->rowCount() == 0){
				//insert du lieu vao table customer
				$query = $conn->prepare("insert into user set Name=:var_Name,Stu_Code=:var_code,BirthDate=:var_BirthDate,Class=:var_Class,Department=:var_Department,Address=:var_Address,Phone=:var_Phone,Email=:var_Email,Desire=:var_Desire");
				$query->execute(["var_Name"=>$name,"var_BirthDate"=>$birthdate,"var_Class"=>$class,"var_Department"=>$department,"var_Address"=>$address,"var_Phone"=>$phone,"var_Email"=>$email,"var_Desire"=>$desire,"var_code"=>$code]);
			}else{
				header("location:index.php?controller=account&action=register&notify=error");
			}
		}
		//dang nhap
		public function modelLogin(){
			$email = $_POST['email'];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			$conn = Connection::getInstance();
			$check = $conn->prepare("select id,email,password,name from account where email=:var_email");
			$check->execute(["var_email"=>$email]);
			if($check->rowCount() > 0){
				//lấy một bản ghi
				$record = $check->fetch(PDO::FETCH_OBJ);
				if($record->password == $password){
					//dang nhap thanh cong
					$_SESSION['id'] = $record->id;
					$_SESSION['email'] = $record->email;
					$_SESSION['name'] = $record->name;
					header("location:index.php");
				}
				else{
				$_SESSION['status'] = "block";
				header("location:index.php?controller=account&action=login&notify=error");
				$_SESSION['btnn'] = "display:none;";
				}
			}
		}
	}
 ?>