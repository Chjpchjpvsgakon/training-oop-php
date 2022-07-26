<?php  

$connect = mysqli_connect('localhost', 'root', 'halo1189', 'j2php_basic');
mysqli_set_charset($connect, 'utf8');

// $sql = "SELECT * FROM mon_an WHERE name='$mon'";

if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}



switch ($action) {
	case '':
		$sql = "SELECT * FROM lop";

		$results = mysqli_query($connect, $sql); 
		break;
	

	case 'store':
		$sql = "INSERT INTO lop(ten_lop) VALUES ('$ten_lop')";
		mysqli_query($connect, $sql); 
		break;	

	case 'edit':
		$sql = "SELECT * FROM lop WHERE ma_lop='$ma_lop'";

		$results = mysqli_query($connect, $sql); 
		$each = mysqli_fetch_array($results);
		break;
	
	case 'update':
		$sql = "UPDATE lop SET ten_lop = '$ten_lop' WHERE ma_lop = '$ma_lop'";

		$results = mysqli_query($connect, $sql); 
		break;
	
}
mysqli_close($connect);

?>
