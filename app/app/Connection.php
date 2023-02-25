<?php 
	class Connection{
		//hàm sử dụng để kết nối csdl, trả về biến kết nối
		//từ khóa static: không cần khởi tạo object cho class Connection mà từ tên class có thể truy cập vào hàm này theo cú pháp: Connection::getInstance();
		public static function getInstance(){
			$server_name = "localhost";
			$database_name = "tntn_test2_final";
			$username = "root";
			$password = "";
			//kết nối csdl, trả kết quả về biến kết nối
			$conn = new PDO("mysql:host=$server_name;dbname=$database_name",$username,$password);
			//nếu muốn lấy được tiếng việt để hiển thị lên web thì cần có dòng lẹnh sau
			$conn->exec("set names utf8");
			//trả kết quả để sử dụng cho bên ngoài khi gọi hàm này
			return $conn;
		}
	}
 ?>