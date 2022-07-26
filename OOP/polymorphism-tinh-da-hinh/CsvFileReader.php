<?php  

require_once 'FileReaderInterface.php';

class CsvFileReader implements FileReaderInterface{

	public function readFileAsAssociativeArray($filename):array{

		//Get the rows from the file as arrays
		$rows = array_map('str_getcsv', file($filename));

		//Separate the header
		$header =  array_shift($rows);

		$items = [];

		//Create an associate array, using header values as keys

		foreach ($rows as $row) {
			$items[] = array_combine($header, $rows);
		}

		//Return the associate array

		return $items;

	}

}

$fileReader = new CsvFileReader();
$items =  $fileReader->readFileAsAssociativeArray('inventory.csv');
print_r($items).PHP_EOL;
?>