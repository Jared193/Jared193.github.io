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
    //Connect to mySQL server
    $conn = mysqli($servername, $user, $password);
    //Checks if connection is valid
    if ($conn->connect_error) {
      die("Connection to database failed" . $database->connect_error); 
    }
    else {
      echo "Successful Contection";
    }
    //Creates DB
    $createDB = "CREATE DATABASE myDB";
    //Checks if DB was succesfully created
    if ($conn->query($createDB) == TRUE) {
      echo "Databse Successfully Created"; 
    }
    else {
      echo "Error" . $conn->error; 
    }
    //Closes connection to server
    $conn->close;
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
