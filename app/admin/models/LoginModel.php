<?php 
	trait LoginModel{
		public function modelLogin(){
			$email = $_POST['email'];
			$password = $_POST['password'];
			//ma hoa password
			$password = md5($password);
			//lay chuoi ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from account where email=:var_email and password=:var_password");
			//truyen cac tham sao vao bien truy cap
			$query->execute(["var_email"=>$email,"var_password"=>$password]);
			if($query->rowCount() > 0){echo "ok";
				//dang nhap thanh cong
				$_SESSION['admin_email'] = $email;
				header("location:index.php?controller=home");
			}else
				header("location:index.php?controller=login&notify=invalid");
		}
	}
 ?>