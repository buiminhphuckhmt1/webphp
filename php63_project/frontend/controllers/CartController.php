<?php 
	include "models/CartModel.php";
	class CartController extends Controller{
		use CartModel;
		//hàm tạo sử dụng để kiểm tra và khởi tạo giỏ hàng
		public function __construct(){
			//kiểm tra nếu giỏ hàng chưa tồn tại thì khởi tạo nó
			if(isset($_SESSION['cart']) == false)
				$_SESSION['cart'] = array();
		}
		//hiển thị danh sách giỏ hàng
		public function index(){
			$this->loadView("CartView.php");
		}
		//thêm sản phẩm vào giỏ hàng
		public function create(){
			$id = isset($_GET['id']) ? $_GET['id'] : 0;
			//gọi hàm trong CartModel để thêm phần tử vào giỏ hàng
			$this->cartAdd($id);
			//quay lại trang giỏ hàng
			header("location:index.php?controller=cart");
		}
		//xóa sản phẩm khỏi giỏ hàng
		public function remove(){
			$id = isset($_GET['id']) ? $_GET['id'] : 0;
			//gọi hàm trong CartModel để xóa phần tử khỏi giỏ hàng
			$this->cartDelete($id);
			//quay lại trang giỏ hàng
			header("location:index.php?controller=cart");
		}
		//cập nhật số lượng sản phẩm trong giỏ hàng
		public function update(){
			foreach ($_SESSION['cart'] as $product) {
				$name = "product_".$product["id"];
				$number = $_POST[$name];
				$this->cartUpdate($product["id"],$number);
			}
			//quay lại trang giỏ hàng
			header("location:index.php?controller=cart");
		}
		//xóa toàn bộ sản phẩm khỏi giỏ hàng
		public function destroy(){
			//gọi hàm trong CartModel để xóa giỏ hàng
			$this->cartDestroy();
			//quay lại trang giỏ hàng
			header("location:index.php?controller=cart");
		}
		//thanh toán giỏ hàng
		public function checkout(){
			//kiểm tra nếu user chưa đăng nhập thì yêu cầu đăng nhập
			if(isset($_SESSION['customer_email']) == false)
				header("location:index.php?controller=account&action=login");
			else{
				//gọi hàm cartCheckout trong CartModel
				$this->cartCheckOut();
				header("location:index.php?controller=cart&notify=order-success");
			}
		}
	}
 ?>