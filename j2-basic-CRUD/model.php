<?php  
$connect = mysqli_connect('localhost', 'root', 'halo1189', 'j2php_basic');
mysqli_set_charset($connect, 'utf8');

// $sql = "SELECT * FROM mon_an WHERE name='$mon'";

if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}

switch ($action) {
	case '':
		$sql = "SELECT * FROM sinh_vien";

		$results = mysqli_query($connect, $sql);
		break;

	case 'store':
		$sql = "INSERT INTO sinh_vien(ma_sv,ten_sv) VALUES ('$ma_sv', '$ten_sv')";

		$results = mysqli_query($connect, $sql);

		break;
	case 'edit':
		$sql = "SELECT * FROM sinh_vien WHERE ma_sv = '$ma_sv'";

		$listsv = mysqli_query($connect, $sql);

		$each_sv = mysqli_fetch_array($listsv);

		break;

	case 'update':	
		$sql = "UPDATE sinh_vien SET ten_sv='$ten_sv', ma_sv = '$ma_sv' WHERE ma_sv = '$hiddenmasv'";

		mysqli_query($connect, $sql);

		break;

	case 'delete':	
		$sql = "DELETE FROM sinh_vien WHERE ma_sv = '$ma_sv'";

		mysqli_query($connect, $sql);

		break;	
	
}



?>