<?php 
	trait NewsModel{
		//liệt kê các bản ghi có phân trang
		public function modelRead($recordPerPage){
			//lấy biến p truyền từ url
			$page = isset($_GET["p"])&&$_GET['p'] > 0 ? $_GET['p'] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news order by id desc limit $from,$recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from news where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		//update ban ghi
		public function modelUpdate($id){
			$name = $_POST['name'];
			$description = $_POST['description'];
			$content = $_POST['content'];
			$hot = isset($_POST['hot']) ? 1 : 0;
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update news set name=:var_name,description=:var_description,content=:var_content,hot=:var_hot where id=:var_id");
			$query->execute(["var_name"=>$name,"var_id"=>$id,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot]);
			//neu user chon anh de update thi tien hanh upload anh
			if($_FILES['photo']['name'] != ""){
				//lay ten anh
				$photo = time()."_".$_FILES['photo']['name'];
				//upload anh
				move_uploaded_file($_FILES['photo']['tmp_name'], "../assets/upload/news/$photo");
				//update cot photo trong table users
				$query = $conn->prepare("update news set photo=:var_photo where id=:var_id");
				$query->execute(["var_photo"=>$photo,"var_id"=>$id]);
			}
		}
		//insert ban ghi
		public function modelCreate(){
			$name = $_POST['name'];
			$description = $_POST['description'];
			$content = $_POST['content'];
			$hot = isset($_POST['hot']) ? 1 : 0;
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
			$query = $conn->prepare("insert into news set name=:var_name,description=:var_description,content=:var_content,hot=:var_hot,photo=:var_photo");
			$query->execute(["var_name"=>$name,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot,"var_discount"=>$discount,"var_photo"=>$photo]);
			
		}
		//xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from news where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
		//lay ten danh muc san pham
		public function getCategory($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from categories where id=:var_category_id");
			$query->execute(["var_category_id"=>$category_id]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
	}
 ?>