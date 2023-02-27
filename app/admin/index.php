<?php 
	//start session
	session_start();
	//include file Connection.php vào đây
	include "../app/Connection.php";
	//include file Controller.php vào đây
	include "../app/Controller.php";
 ?>
 <?php 
 	//lấy biến controller truyền từ url
 	$controller = isset($_GET["controller"]) ? $_GET["controller"] : "Home";
 	//lấy biến action truyền từ url
 	$action = isset($_GET["action"]) ? $_GET["action"] : "index";
 	//gán thêm các chuỗi để thành đường dẫn vật lý
 	//ham ucfirst viet hoa ky tu dau tien 	
 	$controllerFile = "controllers/".ucfirst($controller)."Controller.php";
 	//nếu tồn tại đường dẫn vật lý
 	if(file_exists($controllerFile)){
 		//include tên file vào đây
 		include $controllerFile;
 		//nối chuỗi để lấy tên class
 		$controllerClass = ucfirst($controller)."Controller";
 		//khoi tao object cua class
 		$obj = new $controllerClass();
 		//gọi đến action để lấy dữ liệu trả về
 		$obj->$action(); 		
 	}else{
		header("location:index.php?controller=home&action=page404");
	}
  ?>
  