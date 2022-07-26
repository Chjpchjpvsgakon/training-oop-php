<?php  

switch ($action) {
	case '':
		require 'models/lop.php';

		require 'views/lop/index.php';
		break;
	case 'create':

		require 'views/lop/create.php';
		header('location:index.php');
		break;

	case 'store':
		$ten_lop = $_POST['ten_lop'];
		require 'models/lop.php';
		break;	

	case 'edit':
		$ma_lop = $_GET['ma_lop'];
		require 'models/lop.php';
		require 'views/lop/edit.php';
		break;

	case 'update':
		$ma_lop = $_POST['ma_lop'];	
		$ten_lop = $_POST['ten_lop'];
		require 'models/lop.php';
		header('location:index.php');
		break;
	default:
		echo "fail action lop";
		break;	

	
}


?>