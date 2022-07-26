<?php  

//create a song class
class Song{
	public $songId;
	public $title;
}

//Instantiate an "Octopus's Garden" song using the new keyword

$octopusSong = new Song();
$octopusSong->songId = 1;
$octopusSong->title = 'Octopus Garden';

//var_dump($octopusSong);


class playList{

	public $name;
	public $songs = [];

	public function addSong($song){
		$this->songs[] = $song;
	}
}

//add new song with id and title 
$devil = new Song();
$devil->songId = 2;
$devil->title = "Devil May Cry";


$playL = new playList();
$playL->name = "Rock!";
$playL->addSong($octopusSong);
$playL->addSong($devil);
echo '<pre>';
var_dump($playL);
?>