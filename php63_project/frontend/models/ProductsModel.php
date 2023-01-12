<?php 
	trait ProductsModel{
		//liệt kê các bản ghi có phân trang
		public function modelRead($recordPerPage){
			//lấy biến p truyền từ url
			$page = isset($_GET["p"])&&$_GET['p'] > 0 ? $_GET['p'] - 1 : 0;
			//---
			$order = isset($_GET['order']) ? $_GET['order'] : "";
			$sqlOrder = "order by id desc";
			switch ($order) {
				case 'nameAsc':
					$sqlOrder = "order by name asc";
					break;
				case 'nameDesc':
					$sqlOrder = "order by name desc";
					break;	
				case 'priceAsc':
					$sqlOrder = "order by price asc";
					break;	
				case 'priceDesc':
					$sqlOrder = "order by price desc";
					break;
			}
			//---
			$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id=$category_id $sqlOrder limit $from,$recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord(){
			$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id=$category_id");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from products where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
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
		//đánh số sao sản phẩm
		public function modelRating(){
			$productsId = isset($_GET['productId']) ? $_GET['productId'] : 0;
			$star = isset($_GET['star']) ? $_GET['star'] : 0;
			//insert 1 bản ghi vào bảng rating
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into rating(product_id,star) values(:var_id,:var_star)");
			//thực thi truy vấn, có truyền tham số vào câu lệnh sql
			$query->execute(["var_id"=>$productsId,"var_star"=>$star]);
		}
		//lấy số sao sản phẩm để hiển thị lên view
		public function modelGetStar($product_id,$star){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from rating where product_id=$product_id and star=$star");
			//trả về tổng số bản ghi
			return $query->rowCount();
		}
	}
 ?>