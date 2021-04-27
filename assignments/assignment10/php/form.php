<?php
    if(count($_REQUEST) > 1){
        include_once("classes/database.php");
        include_once("classes/Validation.php");
        $validator = new Validation();
        $returnVals = $validator->checkFormats($_REQUEST);
        $message = !$validator->checkErrors();
        if(!$validator->checkErrors() && count($_REQUEST) === 9){
            $message = Database::addEntry();
        }
    }
    if(isset($message)){
        echo "<div class=\"alert alert-";
        echo ($message) ? "success" : "danger";
        echo "\" role=\"alert\">";
        echo ($message) ? "Entry added successfully." : "Error, please try again.";
        echo "</div>";
    }
?>
<form method="POST" action="index.php">
    <div class="form-group">
        <label for="name">Name 
            <?=(isset($_REQUEST['name']) && $returnVals['name']) ? "<small class=\"form-text text-danger\">Name cannot be blank and cannot contain numbers.</small>" : ""?>
        </label>
        <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?=(isset($_REQUEST['name'])) ? $_REQUEST['name'] : ""?>">
    </div>
    <div class="form-group">
        <label for="address">Street Address
            <?=(isset($_REQUEST['address']) && $returnVals['address']) ? "<small class=\"form-text text-danger\">Address cannot be blank, must start with a number, and contain two parts (ex. 301 4th).</small>" : ""?>
        </label>
        <input type="text" class="form-control" name="address" placeholder="Enter street address" value="<?=(isset($_REQUEST['address'])) ? $_REQUEST['address'] : ""?>">
    </div>
    <div class="form-group">
        <label for="city">City
            <?=(isset($_REQUEST['city']) && $returnVals['city']) ? "<small class=\"form-text text-danger\">City cannot be blank and cannot contain numbers.</small>" : ""?>
        </label>
        <input type="text" class="form-control" name="city" placeholder="Enter city" value="<?=(isset($_REQUEST['city'])) ? $_REQUEST['city'] : ""?>">
    </div>
    <div class="form-group">
        <label for="state">State
            <?=(count($_REQUEST) > 1 && !isset($_REQUEST['state'])) ? "<small class=\"form-text text-danger\">State cannot be blank.</small>" : ""?>
            </label>
        <select class="form-control" name="state">
            <option disabled selected value> -- Select a State -- </option>
            <option value="AL" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "AL") === 0) ? "selected=\"selected\"" : "" ?>>Alabama</option>
            <option value="AK" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "AK") === 0) ? "selected=\"selected\"" : "" ?>>Alaska</option>
            <option value="AZ" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "AZ") === 0) ? "selected=\"selected\"" : "" ?>>Arizona</option>
            <option value="AR" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "AR") === 0) ? "selected=\"selected\"" : "" ?>>Arkansas</option>
            <option value="CA" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "CA") === 0) ? "selected=\"selected\"" : "" ?>>California</option>
            <option value="CO" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "CO") === 0) ? "selected=\"selected\"" : "" ?>>Colorado</option>
            <option value="CT" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "CT") === 0) ? "selected=\"selected\"" : "" ?>>Connecticut</option>
            <option value="DE" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "DE") === 0) ? "selected=\"selected\"" : "" ?>>Delaware</option>
            <option value="DC" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "DC") === 0) ? "selected=\"selected\"" : "" ?>>District Of Columbia</option>
            <option value="FL" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "FL") === 0) ? "selected=\"selected\"" : "" ?>>Florida</option>
            <option value="GA" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "GA") === 0) ? "selected=\"selected\"" : "" ?>>Georgia</option>
            <option value="HI" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "HI") === 0) ? "selected=\"selected\"" : "" ?>>Hawaii</option>
            <option value="ID" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "ID") === 0) ? "selected=\"selected\"" : "" ?>>Idaho</option>
            <option value="IL" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "IL") === 0) ? "selected=\"selected\"" : "" ?>>Illinois</option>
            <option value="IN" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "IN") === 0) ? "selected=\"selected\"" : "" ?>>Indiana</option>
            <option value="IA" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "IA") === 0) ? "selected=\"selected\"" : "" ?>>Iowa</option>
            <option value="KS" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "KS") === 0) ? "selected=\"selected\"" : "" ?>>Kansas</option>
            <option value="KY" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "KY") === 0) ? "selected=\"selected\"" : "" ?>>Kentucky</option>
            <option value="LA" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "LA") === 0) ? "selected=\"selected\"" : "" ?>>Louisiana</option>
            <option value="ME" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "ME") === 0) ? "selected=\"selected\"" : "" ?>>Maine</option>
            <option value="MD" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "MD") === 0) ? "selected=\"selected\"" : "" ?>>Maryland</option>
            <option value="MA" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "MA") === 0) ? "selected=\"selected\"" : "" ?>>Massachusetts</option>
            <option value="MI" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "MI") === 0) ? "selected=\"selected\"" : "" ?>>Michigan</option>
            <option value="MN" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "MN") === 0) ? "selected=\"selected\"" : "" ?>>Minnesota</option>
            <option value="MS" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "MS") === 0) ? "selected=\"selected\"" : "" ?>>Mississippi</option>
            <option value="MO" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "MO") === 0) ? "selected=\"selected\"" : "" ?>>Missouri</option>
            <option value="MT" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "MT") === 0) ? "selected=\"selected\"" : "" ?>>Montana</option>
            <option value="NE" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "NE") === 0) ? "selected=\"selected\"" : "" ?>>Nebraska</option>
            <option value="NV" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "NV") === 0) ? "selected=\"selected\"" : "" ?>>Nevada</option>
            <option value="NH" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "NH") === 0) ? "selected=\"selected\"" : "" ?>>New Hampshire</option>
            <option value="NJ" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "NJ") === 0) ? "selected=\"selected\"" : "" ?>>New Jersey</option>
            <option value="NM" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "NM") === 0) ? "selected=\"selected\"" : "" ?>>New Mexico</option>
            <option value="NY" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "NY") === 0) ? "selected=\"selected\"" : "" ?>>New York</option>
            <option value="NC" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "NC") === 0) ? "selected=\"selected\"" : "" ?>>North Carolina</option>
            <option value="ND" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "ND") === 0) ? "selected=\"selected\"" : "" ?>>North Dakota</option>
            <option value="OH" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "OH") === 0) ? "selected=\"selected\"" : "" ?>>Ohio</option>
            <option value="OK" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "OK") === 0) ? "selected=\"selected\"" : "" ?>>Oklahoma</option>
            <option value="OR" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "OR") === 0) ? "selected=\"selected\"" : "" ?>>Oregon</option>
            <option value="PA" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "PA") === 0) ? "selected=\"selected\"" : "" ?>>Pennsylvania</option>
            <option value="RI" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "RI") === 0) ? "selected=\"selected\"" : "" ?>>Rhode Island</option>
            <option value="SC" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "SC") === 0) ? "selected=\"selected\"" : "" ?>>South Carolina</option>
            <option value="SD" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "SD") === 0) ? "selected=\"selected\"" : "" ?>>South Dakota</option>
            <option value="TN" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "TN") === 0) ? "selected=\"selected\"" : "" ?>>Tennessee</option>
            <option value="TX" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "TX") === 0) ? "selected=\"selected\"" : "" ?>>Texas</option>
            <option value="UT" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "UT") === 0) ? "selected=\"selected\"" : "" ?>>Utah</option>
            <option value="VT" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "VT") === 0) ? "selected=\"selected\"" : "" ?>>Vermont</option>
            <option value="VA" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "VA") === 0) ? "selected=\"selected\"" : "" ?>>Virginia</option>
            <option value="WA" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "WA") === 0) ? "selected=\"selected\"" : "" ?>>Washington</option>
            <option value="WV" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "WV") === 0) ? "selected=\"selected\"" : "" ?>>West Virginia</option>
            <option value="WI" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "WI") === 0) ? "selected=\"selected\"" : "" ?>>Wisconsin</option>
            <option value="WY" <?=(isset($_REQUEST['state']) && strcmp($_REQUEST['state'], "WY") === 0) ? "selected=\"selected\"" : "" ?>>Wyoming</option>
        </select>
    </div>
    <div class="form-group">
        <label for="phone">Phone
            <?=(isset($_REQUEST['phone']) && $returnVals['phone']) ? "<small class=\"form-text text-danger\">Phone cannot be blank, cannot contain letters, and should follow the format 999.999.9999.</small>" : ""?>
        </label>
        <input type="text" class="form-control" name="phone" placeholder="999.999.9999" value="<?=(isset($_REQUEST['phone'])) ? $_REQUEST['phone'] : ""?>">
    </div>
    <div class="form-group">
        <label for="email">E-Mail Address
            <?=(isset($_REQUEST['phone']) && $returnVals['email']) ? "<small class=\"form-text text-danger\">E-Mail cannot be blank and must be a valid e-mail address.</small>" : ""?>
        </label>
        <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?=(isset($_REQUEST['email'])) ? $_REQUEST['email'] : ""?>">
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth
            <?=(isset($_REQUEST['dob']) && empty($_REQUEST['dob'])) ? "<small class=\"form-text text-danger\">Date of Birth cannot be blank.</small>" : ""?>
        </label>
        <input type="date" class="form-control" name="dob" placeholder="01/01/1970" value="<?=(isset($_REQUEST['dob'])) ? $_REQUEST['dob'] : ""?>">
    </div>
    <div class="form-group">
        Please check all contact types you would like (optional):<br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="contact[]" id="newsletter" value="newsletter"
                <?=(isset($_REQUEST['contact']) && in_array("newsletter", $_REQUEST['contact'])) ? "checked" : ""?>
            >
            <label class="form-check-label" for="newsletter">Newsletter</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="contact[]" id="emailupdates" value="email"
                <?=(isset($_REQUEST['contact']) && in_array("email", $_REQUEST['contact'])) ? "checked" : ""?>
            >
            <label class="form-check-label" for="emailupdates">Email Updates</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="contact[]" id="textupdates" value="text"
                <?=(isset($_REQUEST['contact']) && in_array("text", $_REQUEST['contact'])) ? "checked" : ""?>
            >
            <label class="form-check-label" for="textupdates">Text Updates</label>
        </div>
    </div>
    <div class="form-group">
        Please select an age range (You must select one):
            <?=(count($_REQUEST) > 1 && !isset($_REQUEST['age'])) ? "<small class=\"form-text text-danger\">Age cannot be blank.</small>" : ""?><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="age" id="10-18" value="10-18"<?=(isset($_REQUEST['age']) && strcmp("10-18", $_REQUEST['age']) === 0) ? "checked" : ""?>>
            <label class="form-check-label" for="10-18">10-18</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="age" id="19-30" value="19-30" <?=(isset($_REQUEST['age']) && strcmp("19-30", $_REQUEST['age']) === 0) ? "checked" : ""?>>
            <label class="form-check-label" for="19-30">19-30</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="age" id="30-50" value="30-50" <?=(isset($_REQUEST['age']) && strcmp("30-50", $_REQUEST['age']) === 0) ? "checked" : ""?>>
            <label class="form-check-label" for="30-50">30-50</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="age" id="51+" value="51+" <?=(isset($_REQUEST['age']) && strcmp("51+", $_REQUEST['age']) === 0) ? "checked" : ""?>>
            <label class="form-check-label" for="51+">51+</label>
        </div>

    </div>
    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
    </p>
</form>


