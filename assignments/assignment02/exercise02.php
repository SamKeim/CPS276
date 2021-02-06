
<?
$header = "My Web Page";
$name = "Sam Keim";
$footer = $header . " ©" . date('Y');

function printLorem($counter){
	$paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat mollis dolor at bibendum. In congue maximus ligula, ut faucibus mi accumsan at. Vestibulum sagittis tortor eget dui ultricies, a vulputate lacus faucibus. Fusce aliquet bibendum erat, sed bibendum eros cursus eu. Nulla at neque rhoncus, ultricies odio at, accumsan elit. Proin in turpis eu leo dapibus pulvinar. Vivamus viverra massa ut enim fringilla ultricies. Donec in enim blandit, iaculis nulla quis, egestas elit. Nullam ut enim id erat bibendum finibus nec ac eros. Nulla malesuada ex facilisis ultrices rhoncus. Nullam in euismod nisl. Donec pulvinar ex sit amet aliquet egestas.";
	for($i = 0; $i < $counter; $i++){
		echo("<p>" . $paragraph . "</p>");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
	<title>Assignment 02 - Exercise 02</title>
	<style>
		* {margin: 0; padding: 0;}
		body {font: 120%/1.5 sans-serif;}
		#wrapper {width: 1000px; margin: 0 auto; border: 1px solid black;}
		header {background: green; height: 200px; padding: 20px;}
		header h1 {color: white;}
		main {padding: 10px;}
		main h2 {margin: 15px 0;}
		main p {margin-bottom: 15px;}
		footer {background: #eee; padding: 10px 0; text-align: center}
		footer p {font-size: .8em;}
	</style>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1><?=$header?></h1>
			<p><a href="https://github.com/SamKeim/CPS276/blob/master/assignments/assignment02/exercise02.php" class="btn btn-outline-light">GitHub Source Code</a></p>
			<p>
                <a href="exercise01.php" class="btn btn-sm btn-outline-light">Exercise 01</a>
                <a href="exercise02.php" class="btn btn-sm btn-outline-light disabled">Exercise 02</a>
                <a href="exercise03.php" class="btn btn-sm btn-outline-light">Exercise 03</a>
            </p>
		</header>
		<main>
			<h2>My name is <?=$name?></h2>
			<?printLorem(3);?>
		</main>
		<footer>
			<p><?=$footer?></p>
		</footer>
	</div>
	
</body>
</html>