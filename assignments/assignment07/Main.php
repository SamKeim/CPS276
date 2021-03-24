<?
    require_once("../../.vscode/pdo.php");
    require_once("fileProcessor.php");
    $processedRequest = empty($_REQUEST) ? "" : FileProcessor::uploadFile();
    $files = execute("SELECT * FROM a7;");
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Assignment 07</title>
  </head>
    <body>
        <div class="container border m-4 mx-auto p-4">
            <h1>Assignment 07</h1>
            <p>
                <a href="https://github.com/SamKeim/CPS276/blob/master/assignments/assignment07/Main.php" class="btn btn-outline-primary">GitHub Source Code - Main.php</a>
                <a href="https://github.com/SamKeim/CPS276/blob/master/assignments/assignment07/FileProcessor.php" class="btn btn-outline-primary">GitHub Source Code - FileProcessor.php</a>
            </p>
            <p>Enter file name and upload a PDF. Valid files must be PDF and under 100KB.</p>
            <?
                // Message Handling
                if(!empty($processedRequest)) {
                    echo("<span style=\"font-size:1em\" class=\"badge badge-pill  badge-");
                    echo(strcmp("File was uploaded successfully.", $processedRequest) === 0 ? "success" : "danger");
                    echo("\">". $processedRequest . "</span>");
                }
            ?>
            <form method="POST" action="main.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fileName"><b>File Name</b></label>
                    <input type="text" class="form-control" name="fileName" value="">
                </div>
                <div class="form-group">
                    <label for="file"><b>File</b></label>
                    <input id="file" name="file" type="file" class="form-control-file" accept=".pdf" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="button" value="Submit" />
                </div>
            </form>
            <div class="list-group">
                <?
                    // Print result table
                    for($i = 0; $i < sizeof($files); $i++){
                        // print_r($files[$i]);
                        // echo $files[$i]['file_name'];
                        // echo "<br>";
                        echo "<a href=\"files/" . $files[$i]['file_name'] . "\" target=\"pdfview\" class=\"list-group-item list-group-item-action\">" . $files[$i]['file_name'] . "</a>";
                    }
                ?>
            </div>

                <?

                ?>
        </div>
    </body>
</html>