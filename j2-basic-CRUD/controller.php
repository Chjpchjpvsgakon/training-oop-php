<?php  

// include 'model.php';
// include 'views/listSV.php';

// if(empty($_GET['mon'])){
// 	include 'menu.php';
// }else{
// 	$mon = $_GET['mon'];
// 	include 'model.php';
// 	include 'dia.php';
// }	

// CRUD
$action = '';

if(isset($_GET['action'])){
	$action = $_GET['action'];
}

switch($action){
	case '':
		require 'model.php';
		require 'views/listSV.php';
		break;
	case 'create':
		require 'views/create.php';	
		//echo 'create data';
		break; 
	case 'store':	
		$ma_sv = $_POST['codesv'];
		$ten_sv = $_POST['namesv'];
		require 'model.php';
		header('location:index.php');
		//echo 'store data';
		break; 
	case 'edit':	
		$ma_sv = $_GET['ma_sv'];
		require 'model.php';
		require 'views/edit.php';
		//header('location:index.php');
		//echo 'store data';
		break;	
	case 'update':	
		$hiddenmasv = $_POST['masv'];
		$ma_sv = $_POST['codesv'];
		$ten_sv = $_POST['namesv'];
		require 'model.php';
		header('location:index.php');
		//echo 'store data';
		break; 
	case 'delete':	
		$ma_sv = $_GET['ma_sv'];
		require 'model.php';
		header('location:index.php');
		//echo 'store data';
		break; 
	default :
		echo '404';		
}


?>