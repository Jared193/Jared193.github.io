<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Auldra</title>
  </head>
  <body>
  <?php
    //Placeholder values
    $servername = 'localhost';
    $user = 'root';
    $password = 'admin';
    //Connect to mySQL database
    $database = mysqli($servername, $user, $password);
    //Checks if connection is valid
    if ($database->connect_error) {
      die("Connection to database failed" . $database->connect_error); 
    }
    else {
      echo "Successful Contection";
    }
    
    //Closes connection to database
    $databse->close;
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-9">
       
      </div>
      <div class="col-xs-3">
      
      </div>
    </div>
  </div>
  </body>
</html>
