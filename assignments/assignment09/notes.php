<?
require_once("notesHandler.php");
$notes = true;
if(!empty($_REQUEST)){
    $notes = NotesHandler::displayNotes();
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
            <h2>Display Notes</h2>
            <p>
                <a href="https://github.com/SamKeim/CPS276/tree/master/assignments/assignment09" class="btn btn-outline-primary">GitHub Source Code</a>
            </p>
            <p>
                <a href="main.php" class="btn btn-primary">Add Note</a>
            </p>
            <p>
                <?=($notes === false) ? "Please enter both a start and end date." : "" ?>
            </p>
            <form method="POST" action="notes.php">
                <div class="form-group">
                    <label for="start"><b>Starting Date</b></label>
                    <input type="date" class="form-control" name="start" value="">
                </div>
                <div class="form-group">
                    <label for="end"><b>Ending Date</b></label>
                    <input type="date" class="form-control" name="end" value="">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="button" value="Submit" />
                </div>
            </form>
            <div <?=(empty($notes) && $notes !== false) ? '' : 'style="display:none"'?>>
                No Results to Display.
            </div>
            <div <?=(!empty($_REQUEST) && !empty($notes)) ? '' : 'style="display:none"'?>>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?
                            foreach($notes as $note){
                                echo "<tr>";
                                echo "<td>" . date_format(DateTime::createFromFormat('Y-m-d H:i:s', $note['entered_at']), 'm/d/Y h:i A') . "</td>";
                                echo "<td>" . $note['note'] . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>