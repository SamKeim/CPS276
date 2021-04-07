<?
// if(!empty($_REQUEST)){
//     $path = "directories/" . $_REQUEST["path"];
//     $readMePath = $path . '/readme.txt';
//     $readMe = $_REQUEST["readMe"];
//     if(@mkdir($path, 0777) === false){
//         $result = false;
//     } else {
//         $result = true;
//         @file_put_contents($readMePath, $readMe);
//     }
// }

print_r($_FILES);
echo "<br>";
if(!empty($_FILES['file']['name'])){
    if(validFile($_FILES['file']['size'], $_FILES['file']['type'])){
        // TODO: move file from tmp to directory
        // TODO: Store file path and name into db
        // TODO: put this hunk of code in another .php and include
    }
}

function validFile($fileSize, $fileType){
    if($fileSize > 100000){
        echo("File too Large");
        return false;
    }
    if(strcmp($file, "application/pdf") !== 0){
        echo("File type invalid");
        return false;
    }
    return true;
}

?>