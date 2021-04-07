<?
require_once("notesHandler.php");
$result = true;
if(!empty($_REQUEST)){
    $result = NotesHandler::addNote();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Assignment 09</title>
  </head>
    <body>
        <div class="container border m-4 mx-auto p-4">
            <h1>Assignment 09</h1>
            <h2>Add Note</h2>
            <p>
                <a href="https://github.com/SamKeim/CPS276/tree/master/assignments/assignment09" class="btn btn-outline-primary">GitHub Source Code</a>
            </p>
            <p>
                <a href="notes.php" class="btn btn-primary">Display Notes</a>
            </p>
            <p>
                <?=($result) ? "" : "Please enter both Date and Note."?>
            </p>
            <form method="POST" action="main.php">
                <div class="form-group">
                    <label for="datetime"><b>Date and Time</b></label>
                    <input type="datetime-local" class="form-control" name="datetime" value="">
                </div>
                <div class="form-group">
                    <label for="note"><b>Note</b></label>
                    <textarea id="note" name="note" rows="10" cols="50" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="button" value="Submit" />
                </div>
            </form>
        </div>
    </body>
</html>