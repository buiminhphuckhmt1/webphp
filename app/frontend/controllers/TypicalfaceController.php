<?php 
	include "models/TypicalfaceModel.php";
	class TypicalfaceController extends Controller{
		use TypicalfaceModel;
		public function index(){
			$_SESSION['btnn'] = "display:block;";
			$this->loadView("TypicalfaceView.php");
		}
	}
 ?>