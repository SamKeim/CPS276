<?
if(!empty($_REQUEST)){
    $path = "directories/" . $_REQUEST["path"];
    $readMePath = $path . '/readme.txt';
    $readMe = $_REQUEST["readMe"];
    if(@mkdir($path, 0777) === false){
        $result = false;
    } else {
        $result = true;
        @file_put_contents($readMePath, $readMe);
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Assignment 05</title>
  </head>
    <body>
        <div class="container border m-4 mx-auto p-4">
            <h1>Assignment 05</h1>
            <p>
                <a href="https://github.com/SamKeim/CPS276/blob/master/assignments/assignment05/main.php" class="btn btn-outline-primary">GitHub Source Code</a>
            </p>
            <p>Enter folder name and file contents.</p>
            <p>Folder names should contain alpha-numeric characters only.</p>
            <?
                if(!empty($_REQUEST)){
                    if(!$result){
                        echo("<p><a target=\"readme\" class=\"btn btn-danger\" href=\"" . $readMePath . "\">File Already Exists</a></p>");
                    } else {
                        echo("<p><a target=\"readme\" class=\"btn btn-success\" href=\"" . $readMePath . "\">" . $readMePath . "</a></p>");
                    }
                }
            ?>
            <form method="POST" action="main.php">
                <div class="form-group">
                    <label for="path"><b>Path</b></label>
                    <input type="text" class="form-control" name="path" value="">
                </div>
                <div class="form-group">
                    <label for="readMe"><b>Contents</b></label>
                    <textarea id="readMe" name="readMe" rows="10" cols="50" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="button" value="Submit" />
                </div>
            </form>
        </div>
    </body>
</html>