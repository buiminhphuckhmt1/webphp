<?php 
	trait NewsModel{
		//liệt kê các bản ghi có phân trang
		public function modelRead($recordPerPage){
			//lấy biến p truyền từ url
			$page = isset($_GET["p"])&&$_GET['p'] > 0 ? $_GET['p'] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from actitvity order by id desc limit $from,$recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from actitvity");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from actitvity where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		//update ban ghi
		public function modelUpdate($id){
			$title = $_POST['title'];
			$content = $_POST['content'];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update actitvity set title=:var_title,content=:var_content where id=:var_id");
			$query->execute(["var_title"=>$title,"var_id"=>$id,"var_content"=>$content]);
			//neu user chon anh de update thi tien hanh upload anh
			if($_FILES['photo']['name'] != ""){
				//lay ten anh
				$photo = time()."_".$_FILES['photo']['name'];
				//upload anh
				move_uploaded_file($_FILES['photo']['tmp_name'], "../assets/upload/news/$photo");
				//update cot photo trong table users
				$query = $conn->prepare("update actitvity set coverimage=:var_photo where id=:var_id");
				$query->execute(["var_photo"=>$photo,"var_id"=>$id]);
			}
		}
		//insert ban ghi
		public function modelCreate(){
			$title = $_POST['title'];
			$content = $_POST['content'];
			$image = "";
			//neu user chon anh de update thi tien hanh upload anh
			if($_FILES['image']['name'] != ""){
				//lay ten anh
				$photo = time()."_".$_FILES['image']['name'];
				//upload anh
				move_uploaded_file($_FILES['image']['tmp_name'], "../assets/upload/news/$photo");
			}
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into actitvity set title=:var_title,content=:var_content,image=:var_image");
			$query->execute(["var_title"=>$title,"var_content"=>$content,"var_image"=>$image]);
			
		}
		//xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET["ID"]) && is_numeric($_GET["ID"]) ? $_GET["ID"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from actitvity where id=:var_id");
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