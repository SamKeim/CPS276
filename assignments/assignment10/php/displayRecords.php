<?php
include_once("classes/database.php");
if(isset($_REQUEST['entries'])){
    Database::deleteEntries($_REQUEST['entries']);
}
$contacts = Database::displayEntries();
?>

<form method="POST" action="index.php?page=display">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">State</th>
            <th scope="col">Phone</th>
            <th scope="col">E-Mail</th>
            <th scope="col">DOB</th>
            <th scope="col">Contact</th>
            <th scope="col">Age</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?
                if(empty($contacts)){
                    echo "<tr><td colspan=\"9\">No Data to Display</td></tr>";
                } else {
                    foreach($contacts as $contact){
                        echo "<tr>";
                        echo "<td scope=\"row\">" . $contact['name'] . "</td>";
                        echo "<td>" . $contact['address'] . "</td>";
                        echo "<td>" . $contact['city'] . "</td>";
                        echo "<td>" . $contact['state'] . "</td>";
                        echo "<td>" . $contact['phone'] . "</td>";
                        echo "<td>" . $contact['email'] . "</td>";
                        echo "<td>" . $contact['dob'] . "</td>";
                        echo "<td>" . $contact['contact'] . "</td>";
                        echo "<td>" . $contact['age'] . "</td>";
                        echo "<td style=\"text-align: center;\"><input name=\"entries[]\" class=\"form-check-input\" type=\"checkbox\" id=\"checkboxNoLabel\" value=\"" . $contact['id'] . "\" aria-label=\"...\"></td>";
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
    <button type="submit" class="btn btn-danger" value="submit">Delete Selected Entries</button>
</form>