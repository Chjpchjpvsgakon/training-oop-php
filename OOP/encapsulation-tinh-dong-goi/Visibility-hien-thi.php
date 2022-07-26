<label style="color: red;">Private</label>
<ul>
	<li>- chỉ có thể được truy cập trong $this Class</li>
	<li>- Không thể truy cập trong các lớp con</li>
	<li>- không thể được truy cập từ các phiên bản đối tượng di chuyển phạm vi ra bên ngoài </li>
</ul>
<br>
<label for="" style="color: red;">Protected</label>
<ul>
	<li>- Chỉ có thể được truy cập trong $this class và các lớp con</li>
	<li>- Không thể truy cập vào các cá thể đối tượng ở bất kỳ đâu(Tức là chúng không thể truy cập ở bất kì đâu bên ngoài lớp)</li>
</ul>
<br>
<label for="" style="color: red;">Public</label>
<ul>
	<li>Có thể truy cập ở bất kì class và bất kì vị trí bnaof trong cpode</li>
</ul>

<?php  
require 'FileReader.php';
require 'CsvFileReader.php';

$filereader = new FileReader();
$csvfilereader = new CsvFileReader();
?>
<p><?php echo $filereader->data; ?></p>

<!-- Protected data -->
<p><?php 
	//cant get data protect by below code
	//echo $filereader->prot_data; 

	//can get from func getdata in class
	echo $filereader->getProtData();

	//can get from func of class extends
	echo $csvfilereader->fromextclasscallfuncgetdata();

?>
</p>


<!-- Private data -->
<p>
	<?php 
		//cant get data private by below code and subclass
		//echo $filereader->priv_data; 

		//can get from func in origin class 
		echo $filereader->getPrivData(); 
	?>
</p>


<!-- setter and getter -->

<?php  
require 'Bid.php';
$bidprice = new Bid();

$bidprice->setBidAmount(10);

?>
<p><?php echo 'price :'.$bidprice->getBidAmount(); ?></p>