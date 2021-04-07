<?
require_once("../../.vscode/pdo.php");
class NotesHandler{
    static function addNote(){
        // check contents
        if(empty($_REQUEST['note']) or empty($_REQUEST['datetime'])){
            return false;
        }
        // parse date
        $date = DateTime::createFromFormat('Y-m-d\TH:i', $_REQUEST['datetime']);

        // add to database
        $args = [];
        $args[] = $_REQUEST['note'];
        $args[] = date_format($date, 'Y-m-d H:i:s');
        $sql = 'INSERT INTO a9 (note, entered_at) VALUES(?, ?);';
        execute($sql, $args);
        return true;
    }
    static function displayNotes(){
        // check contents
        if(empty($_REQUEST['start']) or empty($_REQUEST['end'])){
            return false;
        }

        // parse start and end dates
        $startDate = DateTime::createFromFormat('Y-m-d', $_REQUEST['start']);
        $endDate = DateTime::createFromFormat('Y-m-d', $_REQUEST['end']);
        
        // create sql command
        $args = [];
        $args[] = date_format($startDate, 'Y-m-d H:i:s');
        $args[] = date_format($endDate, 'Y-m-d H:i:s');
        $sql = 'SELECT entered_at, note FROM a9 WHERE entered_at BETWEEN ? AND ? ORDER BY entered_at DESC;';
        return execute($sql, $args);
    }
}

?>