<!-- self usage -->
<?php  

define('YEAR', 2022);

class Calender{

	//Regular properties
	//Value should vary between objects
	public string $name;
	//public $seasons = ['Spring', 'Summer', 'Autumn', 'Winter'];
	public float $weekinyear =  365/7;

	public int $year = YEAR;


	//static properties
	//Value can change but remains same (static) for class and instances
	public static $daysinFebruary = 28;

	public static $count=0;

	public function __construct(){
		self::$count++;
	}

	//class constants 
	//Fix value associated with this class 
	private const MONTHS_IN_YEAR = 12;

	public function getMonthsInYear(){
		return self::MONTHS_IN_YEAR;
	}
}

$calender = new Calender();
$cald = new Calender();
$calender->name = "Year Planner";

print $calender->name . PHP_EOL;

//Fatal error
//print Calender::MONTHS_IN_YEAR . PHP_EOL;

print $calender->getMonthsInYear(). PHP_EOL;

print Calender::$daysinFebruary.PHP_EOL;
Calender::$daysinFebruary++;
print $calender::$daysinFebruary . PHP_EOL;

//print_r($cald->seasons);


$calender->weekinyear = 50.123;
print $calender->weekinyear.PHP_EOL;
?>