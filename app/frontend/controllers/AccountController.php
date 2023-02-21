<?php 
	//include file AccountModel.php
	include "models/AccountModel.php";
	class AccountController extends Controller{
		//ke thua class AccountModel
		use AccountModel;
		//dang ky
		public function register(){
			$this->loadView("RegisterView.php");
		}
		//dang ky khi an nut submit
		public function registerPost(){
			$this->modelRegister();
			header("location:index.php?controller=account&action=login");
		}
		//dang nhap
		public function login(){
			$this->loadView("LoginView.php");
		}
		//dang nhap khi an nut submit
		public function loginPost(){
			$this->modelLogin();
		}
		//dang xuat
		public function logout(){
			//huy cac bien session
			unset($_SESSION['email']);
			unset($_SESSION['id']);
			header("location:index.php?controller=account&action=login");
		}
	}
 ?>