<?php 
	trait SearchModel{
		//liệt kê các bản ghi có phân trang
		public function modelRead($recordPerPage){
			$key = isset($_GET['key']) ? $_GET['key'] : '';
			//lấy biến p truyền từ url
			$page = isset($_GET["p"])&&$_GET['p'] > 0 ? $_GET['p'] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where name like '%$key%' order by id desc limit $from,$recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord(){
			$key = isset($_GET['key']) ? $_GET['key'] : '';
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where name like '%$key%'");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}	
		//liệt kê các bản ghi có phân trang
		public function modelSearchPriceRead($recordPerPage){
			$fromPrice = isset($_GET['fromPrice'])&&is_numeric($_GET['fromPrice']) ? $_GET['fromPrice'] : 0;
			$toPrice = isset($_GET['toPrice'])&&is_numeric($_GET['toPrice']) ? $_GET['toPrice'] : 0;
			//lấy biến p truyền từ url
			$page = isset($_GET["p"])&&$_GET['p'] > 0 ? $_GET['p'] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where (price-price*discount/100) >= $fromPrice and (price-price*discount/100) <= $toPrice order by id desc limit $from,$recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelSearchPriceTotalRecord(){
			$fromPrice = isset($_GET['fromPrice'])&&is_numeric($_GET['fromPrice']) ? $_GET['fromPrice'] : 0;
			$toPrice = isset($_GET['toPrice'])&&is_numeric($_GET['toPrice']) ? $_GET['toPrice'] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where (price-price*discount/100) >= $fromPrice and (price-price*discount/100) <= $toPrice");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}	
		//ajax search
		public function modelAjaxSearch(){
			$key = isset($_GET['key']) ? $_GET['key'] : '';
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where name like '%$key%' order by id desc limit 0,20");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			$str = "";
			foreach($result as $row){
				$str = $str . "<li><img src='../assets/upload/products/{$row->photo}'> <a href='index.php?controller=products&action=detail&id={$row->id}'>{$row->name}</a></li>";
			}
			return $str;
		}
	}
 ?>