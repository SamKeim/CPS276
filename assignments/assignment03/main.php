<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Assignment 03</title>
  </head>
    <body>
        <div class="container border m-4 mx-auto p-4">
            <h1>Assignment 03</h1>
            <p>
                <a href="https://github.com/SamKeim/CPS276/blob/master/assignments/assignment03/main.php" class="btn btn-outline-primary">GitHub Source Code (This Page)</a>
                <a href="https://github.com/SamKeim/CPS276/blob/master/assignments/assignment03/Calculator.php" class="btn btn-outline-primary">GitHub Source Code (Calculator)</a>
            </p>
            <?
                require_once "calculator.php";
                $calculator = new Calculator();
                echo $calculator->calc("/", 10, 0)."<br>"; //will output Cannot divide by zero
                echo $calculator->calc("*", 10, 2)."<br>"; //will output The product of the numbers is 20
                echo $calculator->calc("/", 10, 2)."<br>"; //will output The division of the numbers is 5
                echo $calculator->calc("-", 10, 2)."<br>"; //will output The difference of the numbers is 8
                echo $calculator->calc("+", 10, 2)."<br>"; //will output The sum of the numbers is 12
                echo $calculator->calc("*", 10)."<br>"; //will output You must enter a string and two numbers
                echo $calculator->calc(10)."<br>"; //will output You must enter a string and two numbers
                echo $calculator->calc("add", 10, 2); //will output Operand not found
            ?>
        </div>
    </body>
</html>