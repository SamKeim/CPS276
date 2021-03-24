<?
class FileProcessor{
    function uploadFile(){
        // Check if empty
        if(empty($_FILES['file']['name']) || empty($_REQUEST['fileName'])){
                return 'Please complete the form.';
        }

        // isValidFileName validates and returns correct file name, or false if invalid
        $fileName = FileProcessor::isValidFileName($_REQUEST['fileName']);
        if($fileName === false){
            return 'Invalid file name, please enter a name with no spaces or invalid characters.';
        }

        // Check size and mime type
        if(!FileProcessor::isValidFile($_FILES['file']['size'], $_FILES['file']['type'])){
            return 'Please upload a PDF that is under 100KB';
        }

        // File is assumed to be valid if code reaches this point
        // Move file from tmp to directory
        $tempFilePath = $_FILES['file']['tmp_name'];
        $destFilePath = getcwd() . '/files/' . $fileName;
        if(!copy($tempFilePath, $destFilePath)){
            return 'Error, please try again.';
        } else {
            // Store file path and name into db
            $args = [];
            $args[] = $destFilePath;
            $args[] = $fileName;
            $sql = 'INSERT INTO a7 (file_path, file_name) VALUES(?, ?);';
            execute($sql, $args);
            return "File was uploaded successfully.";
        }
    }

    function isValidFileName($fileName){
        // If file name does not end in .pdf, append .pdf
        if(strcmp(substr($fileName,-4), ".pdf") !== 0){
            $fileName = $fileName . ".pdf";
        }
        // Check for invalid characters
        if (preg_match('/^([-\.\w]+)$/', $fileName) === 0){
            return false;
        }
        return $fileName;
    }


    function isValidFile($fileSize, $fileType){
        // Returns false if file is too large or mime type is invalid, returns true if file is valid
        if($fileSize > 100000 || strcmp($fileType, "application/pdf") !== 0){
            return false;
        }
        return true;
    }
}
?>