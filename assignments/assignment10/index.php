<?php

/* WRITE THE NECESSARY PHP CODE HERE.
YOU WILL NEED TO RETURN AN ARRAY THAT CONTAINS TWO INDEXES.
FIRST INDEX IS A PLACE FOR A MESSAGE (MAYBE BLANK OR NOT DEPENDING ON THE SITUATION)
AND THE OTHER IS THE FORM OR THE TABLE DISPLAYING THE DATA (SEE $RESULT VARIABLE BELOW). */


if(!empty($_GET)){
	if($_GET['page'] === "form"){
		//CODE GOES HERE TO REQUIRE THE FORM.PHP PAGE AND CALL WHATEVER METHOD YOU WROTE
		$result[0] = "php/form.php";

	} else if($_GET['page'] === "display"){
		//CODE GOES HERE TO REQUIRE THE DISPLAYRECORDS.PHP PAGE AND CALL WHATEVER METHOD YOU WROTE
		$result[0] = "php/displayRecords.php";

	} else {
		//HEADER REDIRECT HERE
		$result[0] = "php/form.php";
	}
} else {
	//HEADER REDIRECT HERE
	$result[0] = "php/form.php";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.error {
			color: red;
			margin-left: 5px;
		}
		.space {
			margin-right: 30px;
		}
		nav ul li {
			list-style: none;
		}
		input[type=submit]{
			margin: 10px 0;
		}
	</style>
    <title>Assignment 10</title>
  </head>
    <body>
        <div class="container border m-4 mx-auto p-4">
            <h1>Assignment 10</h1>
            <p>
                <a href="https://github.com/SamKeim/CPS276/tree/master/assignments/assignment10" class="btn btn-outline-primary">GitHub Source Code</a>
            </p>
			<nav>
				<ul>
					<li><a href="index.php?page=form">Add Contact Information</a></li>
					<li><a href="index.php?page=display">Display All Contacts Information</a></li>
				</ul>
			</nav>
			<?php
				include($result[0]); 
			?>
        </div>
    </body>
</html>
