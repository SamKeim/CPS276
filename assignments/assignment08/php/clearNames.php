<?php
require_once("../../../.vscode/pdo.php");
//* Homework

// Delete all the records from the 'names' table.
execute('DELETE FROM names;');

// Create an array with one key called 'msg'.
// Set the value of your 'msg' key to some sore of success message.
$arr = [];
$arr['msg'] = "Success, all names were cleared.";

// Create a json encoded string from this array and echo it out.
echo(json_encode($arr));

// Make sure your first line is the php start tag, and DO NOT use a php end tag!
