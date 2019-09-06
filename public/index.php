
<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "doctor-jp";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>

<?php


include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Doctor Calendar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Welcome Client</h1>
  <p>The best doctor is the one you run to and can't find. ...</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Choose a day!</p>
      <input type="date">
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Choose the Time</p>
      <input type="time">
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Please Put your E-mail so we can remind you</p>
      <input type="email">
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Setup your Status about your Sickness</p>
      <input type="text">
    </div>
  </div>
</div>

</body>
</html>
