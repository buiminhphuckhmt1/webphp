<?php 
	trait HomeModel{
		//liet ke 6 san pham noi bat
		public function hotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 1 order by id desc limit 0,6");
			//lay tat ca cac ket qua tra ve
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
		//liet ke 6 tin tuc noi bat
		public function hotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot = 1 order by id desc limit 0,6");
			//lay tat ca cac ket qua tra ve
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
		//lay cac danh muc co san pham ben trong
		public function categories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id in (select category_id from products where categories.id=products.category_id) order by id desc");
			//lay tat ca cac ket qua tra ve
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
		//liet ke 6 san pham thuoc danh muc
		public function productsInCategory($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id = $category_id order by id desc limit 0,6");
			//lay tat ca cac ket qua tra ve
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
	}
 ?>