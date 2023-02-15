<?php 
	class ContactController extends Controller{
		//ke thua class HomeModel
    public function index(){
        $this->loadView("ContactView.php");
    }
}
?>