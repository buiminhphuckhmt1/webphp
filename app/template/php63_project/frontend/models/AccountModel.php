<?php 
	trait AccountModel{
		//dang ky
		public function modelRegister(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//kiem tra xem email nay da ton tai chua, neu chua ton tai thi moi insert vao csdl
			$conn = Connection::getInstance();
			$check = $conn->prepare("select email from customers where email=:var_email");
			$check->execute(["var_email"=>$email]);
			if($check->rowCount() == 0){
				//insert du lieu vao table customer
				$query = $conn->prepare("insert into customers set name=:var_name,email=:var_email,address=:var_address,phone=:var_phone,password=:var_password");
				$query->execute(["var_name"=>$name,"var_email"=>$email,"var_address"=>$address,"var_phone"=>$phone,"var_password"=>$password]);
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
			$check = $conn->prepare("select id,email,password from customers where email=:var_email");
			$check->execute(["var_email"=>$email]);
			if($check->rowCount() > 0){
				//lấy một bản ghi
				$record = $check->fetch(PDO::FETCH_OBJ);
				if($record->password == $password){
					//dang nhap thanh cong
					$_SESSION['customer_id'] = $record->id;
					$_SESSION['customer_email'] = $record->email;
					header("location:index.php");
				}
			}else{
				header("location:index.php?controller=account&action=login&notify=error");
			}
		}
	}
 ?>