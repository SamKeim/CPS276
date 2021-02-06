<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Assignment 02 - Exercise 01</title>
  </head>
    <body>
        <div class="container border m-4 mx-auto p-4">
            <h1>Assignment 02</h1>
            <h2>Exercise 01</h2>
            <p><a href="https://github.com/SamKeim/CPS276/blob/master/assignments/assignment02/exercise01.php" class="btn btn-outline-primary">GitHub Source Code</a></p>
            <p>
                <a href="exercise01.php" class="btn btn-sm btn-outline-primary disabled">Exercise 01</a>
                <a href="exercise02.php" class="btn btn-sm btn-outline-primary">Exercise 02</a>
                <a href="exercise03.php" class="btn btn-sm btn-outline-primary">Exercise 03</a>
            </p>


            <? 
                $out = 4;
                $in = 5;
            ?>
            <ul>
                <? for ($i = 1; $i <= $out; $i++){ ?>
                    <li><?=$i?>
                    <ul>
                        <? for ($j = 1; $j <= $in; $j++){?>
                            <li><?=$j?>
                        <?}?>            
                    </ul>
                <? } ?>
            </ul>
        </div>
    </body>
</html>
