<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>OOP Constructors</title>

		
	</head>
	<body>
		<?php  
			require 'Comment.php';

			$comment = new Comment('This iss some comment text', 10);

			//echo $comment->text;


			//Create a second attribute for $userId

			//Add $userId to the comment Constructor as a second parameter

			//Update the comment instantiation in constructors.php to include a random userId

			//remove the echo statement and create a paragraph


		?>

		<p><?php echo $comment->text ?> updated by userId :<?php echo $comment->userId ?></p>
	</body>
</html>