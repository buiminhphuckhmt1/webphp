<?php 
    include "models/ContactModel.php";
	class ContactController extends Controller{
		//ke thua class HomeModel
    use ContactModel;
    public function index(){
        $this->loadView("ContactView.php");
    }

    public function sendfb(){
        $this->modelCreate();
        header("location:index.php?controller=home");
    }
}
?>