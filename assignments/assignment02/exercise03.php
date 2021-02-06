<?
function printTable($row = 15, $col = 5){
    echo("<table class=\"table table-bordered\">");
    for($i = 1; $i <= $row; $i++){
        echo("<tr>");
        for($j = 1; $j <= $col; $j++){
            echo("<td>Row " . $i . " Cell " . $j . "</td>");
        }
        echo("</tr>");
    }
    echo("</table>");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Assignment 02 - Exercise 03</title>
  </head>
    <body>
        <div class="container border m-4 mx-auto p-4">
            <h1>Assignment 02</h1>
            <h2>Exercise 03</h2>
            <p><a href="https://github.com/SamKeim/CPS276/blob/master/assignments/assignment02/exercise03.html" class="btn btn-outline-primary">GitHub Source Code</a></p>
            <p>
                <a href="exercise01.php" class="btn btn-sm btn-outline-primary">Exercise 01</a>
                <a href="exercise02.php" class="btn btn-sm btn-outline-primary">Exercise 02</a>
                <a href="exercise03.php" class="btn btn-sm btn-outline-primary disabled">Exercise 03</a>
            </p>
            <?
            printTable(); 
            ?>
        </div>
    </body>
</html>
