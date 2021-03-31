<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Display and Delete Names</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      #msg {
        margin: 10px 0 0 0;
      }
    </style>
  </head>
  <body>
      <div class="container">
        <h1>Add Display and Delete Names</h1>
        
        <input type="button" id="addName" class="btn btn-primary" value="Add Name">
        <input type="button" id="getNames" class="btn btn-primary" value="Display Names">
        <input type="button" id="clearNames" class="btn btn-primary" value="Clear Names">
        <a href="https://github.com/SamKeim/CPS276/tree/master/assignments/assignment08" class="btn btn-outline-primary">
            GitHub Source Code</a>

        <p id="msg"></p>
        <div class="form-group">
          <label for="flname">First and Last Name</label>
          <input type="text" class="form-control" id="flname">
        </div>
        <div id="displayNames"></div>

    </div>

    <script src="js/Util.js"></script>
    <script src="js/main.js"></script>
     
  </body>
</html>