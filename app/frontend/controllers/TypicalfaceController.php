<?php 
	include "models/TypicalfaceModel.php";
	class TypicalfaceController extends Controller{
		use TypicalfaceModel;
		public function index(){
			$this->loadView("TypicalfaceView.php");
		}
	}
 ?>