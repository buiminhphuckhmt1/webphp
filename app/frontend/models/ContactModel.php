<?php 
	trait ContactModel{
		
		//insert ban ghi
		public function modelCreate(){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$content = $_POST['content'];
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into userfeedback set name=:var_name,email=:var_email,content=:var_content");
			$query->execute(["var_name"=>$name,"var_email"=>$email,"var_content"=>$content]);
		}
	}
 ?>