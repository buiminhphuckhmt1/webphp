<?php 
	trait TypicalfaceModel{
		//liet ke 6 san pham noi bat
		public function hotface(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from topmember limit 0,3");
			//lay tat ca cac ket qua tra ve
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
    }
?>