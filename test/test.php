<?
/*
    $first = "Use a . to concat strings<br>";
    echo($first . 33);
    echo("a + or a . will attempt to convert data on both sides to match data type (. converts to string, + to numeric(int or double))<br>");
    $var1 = 0;
    if($var1){
        echo("True!");
    } else {
        echo("False!");
    }
    echo('overloading functions - Function signature \' function addit($a, $b, $c =10)\' default value of c if not fed a parameter is 10');


    echo("<br>");
    echo("Cannot overload via multiple parameters in two different functions, optional argument must be at end of signature");
    echo("<br>");

    
    echo("");
    echo("<br>");
    
  */  
?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Project</title>
  </head>
    <body>
        <div class="container border m-4 mx-auto p-4">
            <h1>Assignment 01</h1>
            <form method="POST" action="#">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="state">State</label>
                            <select id="state" class="form-control">
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI" selected>Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                            </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check-inline">
                    <label for="gender">Gender: 
                                <label><input type="radio" name="gender" value="male" class="form-check-input">Male</label>
                                <label><input type="radio" name="gender" value="female" class="form-check-input">Female</label>
                                <label><input type="radio" name="gender" value="nonbinary" class="form-check-input">Non-Binary</label>
                                <label><input type="radio" name="gender" value="other" class="form-check-input">Other</label>
                            </label>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </body>
</html>