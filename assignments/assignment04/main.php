<?
    require_once('nameProcessor.php');
    $processedRequest = empty($_REQUEST) ? "" : NameProcessor::processForm($_REQUEST);
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Assignment 04</title>
  </head>
    <body>
        <div class="container border m-4 mx-auto p-4">
            <h1>Assignment 04</h1>
            <p>
                <a href="https://github.com/SamKeim/CPS276/blob/master/assignments/assignment04/main.php" class="btn btn-outline-primary">GitHub Source Code (This Page)</a>
                <a href="https://github.com/SamKeim/CPS276/blob/master/assignments/assignment04/nameProcessor.php" class="btn btn-outline-primary">GitHub Source Code (nameProcessor)</a>
            </p>

            <form method="POST" action="main.php">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" value="">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="button" value="Submit" />
                    <input type="submit" class="btn btn-secondary" name="button" value="Clear Names" />
                </div>
                <div class="form-group">
                    <textarea id="nameList" name="nameList" rows="10" cols="50" class="form-control" readonly>
                        <?echo(empty($processedRequest) ? "" : $processedRequest["namesList"]);?>
                    </textarea>
                </div>
            </form>

        </div>
    </body>
</html>