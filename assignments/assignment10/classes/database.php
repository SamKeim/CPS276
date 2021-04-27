<?
require_once("../../.vscode/pdo.php");
class Database{
    static function addEntry(){
        // upload to database
        $args = array();
        $args[] = $_REQUEST['name'];
        $args[] = $_REQUEST['address'];
        $args[] = $_REQUEST['city'];
        $args[] = $_REQUEST['state'];
        $args[] = $_REQUEST['phone'];
        $args[] = $_REQUEST['email'];
        $args[] = $_REQUEST['dob'];
        $args[] = $_REQUEST['age'];
        $args[] = implode(", ", $_REQUEST['contact']);

        $sql = 'INSERT INTO a10 (name, address, city, state, phone, email, dob, age, contact) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);';
        execute($sql, $args);
        return true;
    }
    static function displayEntries(){
        // create sql command
        $sql = 'SELECT * FROM a10;';
        return execute($sql);
    }
    static function deleteEntries($ids){
        foreach($ids as $id){
            $sql = 'DELETE FROM a10 WHERE id = ?';
            execute($sql, array($id));
        }
    }
}

?>