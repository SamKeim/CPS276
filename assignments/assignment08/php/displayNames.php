<?php
require_once("../../../.vscode/pdo.php");
$arr = [];


// read all the records from the 'names' table in name order.
$names = execute("SELECT name FROM names ORDER BY name;");
$singleName = [];
foreach($names as $val){
    $singleName[] = $val['name'];
}

//  if no data is found (
if(empty($names)){
    // Create an array with two keys called 'msg' and 'masterstatus'
    // set the value for the 'masterstatus' key to error'
    // set the value of the 'msg' key to something like 'no data'
    $arr['msg'] = "No data to display.";
    $arr['masterstatus'] = "error";
} else {
    // Create an array with 1 key called 'names'
    $arr['names'] = "";
    // create a string that represents all the names in the table using implode (<br> as delimiter)
    $namesString = implode("<br>", $singleName);
    // set the value of the 'names' key to be the string you created in the line above
    $arr['names'] = $namesString;
}
//  create a json encoded string from this array and echo it out
echo(json_encode($arr));

//  make sure your first line is the php start tag, and do NOT use a php end tag!
