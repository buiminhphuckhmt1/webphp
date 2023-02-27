<?php 
	trait LoginModel{
		public function modelLoginadmin(){
			$email = $_POST['admin_email'];
			$password = $_POST['password'];
			$role = "Admin";
			//ma hoa password
			$password = md5($password);
			//lay chuoi ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from account where email=:var_email and password=:var_password and role=:var_role");
			//truyen cac tham sao vao bien truy cap
			$query->execute(["var_email"=>$email,"var_password"=>$password,"var_role"=>$role]);
			if($query->rowCount() > 0){echo "ok";
				$record = $query->fetch(PDO::FETCH_OBJ);
				//dang nhap thanh cong
				$_SESSION['admin_email'] = $email;
				$_SESSION['name'] = $record->Name;
				header("location:index.php?controller=home");
			}else
				header("location:index.php?controller=login&notify=invalid");
		}
	}
 ?>