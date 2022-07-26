<?php  
require 'Connection.php';

//__construct called behind the scenes
$conn1 = new Connection();
// $conn2 = new Connection();
// unset($conn2);

$conn1->setConnectionId('127.0.0.1');
print $conn1;


echo "The number of connection is ".$conn1->getCount().PHP_EOL;
echo "The conference Id is : ".$conn1->conferenceId.PHP_EOL;
echo "The connection ID is : ".$conn1->connectionId.PHP_EOL;
?>
<h3>Magic methods</h3>
<p>All methods names starting with __ are reserved by PHP. Therefore, it is not recommended to use such method names unless overriding PHP's behavior.

The following method names are considered magical: __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone(), and __debugInfo().</p>
<ul>
	<li></li>
</ul>