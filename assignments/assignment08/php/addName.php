<?php
require_once("../../../.vscode/pdo.php");
$userInputName = "";
$arr = [];
//* Homework

// The name the user input will be in the $_REQUEST superglobal.
// The 'data' key in the request will be a string that is a json encoded array with the key 'name'.

// So basically:
// $userInputName = json_decode($_REQUEST['data'],true)['name'];

// However, you can't simply do what I did on line 9. 
// You must first check to see if the 'data' key is in the request.
if(array_key_exists('data', $_REQUEST)){
    // You will then json decode that value, which gives you another array. 
    $result = json_decode($_REQUEST['data'], true);
    // You will now need to check to see if the 'name' key exists in that array.
    if(array_key_exists('name', $result)){
        $userInputName = $result['name'];
    }
    // Now that you have $userInputName, create a 'lastname, firstname' string like we did in the past using explode.
    // Make sure you have both the last name and the first name.

    // check for first and last name
    $sepName = explode(" ", $userInputName);
    if(count($sepName) != 2){
        $arr['msg'] = "Error in processing name, enter a two-part name separated by a space.";
        $arr['masterstatus'] = "error";
        echo(json_encode($arr));
        exit(0);
    } else {
        $userInputName =  $sepName[1] . ", " . $sepName[0];
    }
}


// If there are any errors {
if(empty($userInputName)){
//     create an array with two keys called 'msg', and 'masterstatus'.
//     set the value for the 'masterstatus' key to 'error'.
//     set the value of the 'msg' key to whatever your error is.
    $arr['msg'] = "Error in processing name, please try again.";
    $arr['masterstatus'] = "error";
} else {
//  insert the 'lastname, firstname' string into the 'names' table.
    $args = [];
    $args[] = $userInputName;
    $sql = "INSERT INTO names(name) VALUES(?);";
    execute($sql, $args);
//     create an array with one key called 'msg'.
//     set the value of the 'msg' key to some sort of success message.
    $arr['msg'] = "$userInputName added successfully.";
}

// Create a json encoded string from this array and echo it out.
echo(json_encode($arr));
// Make sure your first line is the php start tag, and DO NOT use a php end tag!