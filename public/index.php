
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
  
 if(empty($requested_day) || empty($requested_time) || empty($requested_email) || empty($request_status))
 {
     echo "You did not fill out the required fields.\n";
 }else {
   die;
 }
?>

<?php


include 'db_connection.php';
include 'verification.php';
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
<form action="reservation.php" method="post">
<div class="jumbotron text-center">
  <h1>Welcome Client</h1>
  <p>The best doctor is the one you run to and can't find. ...</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Step 1:</h3>
      <h4>Choose a day!</h4>
      <input type="date" name="requested_day">
    </div>
    <div class="col-sm-4">
      <h3>Step 2:</h3>
      <h4>Choose the Time</h4>
      <input type="time" name="requested_time">
    </div>
    <div class="col-sm-4">
      <h3>Step 3:</h3>        
      <h4>Please Put your E-mail so we can remind you</h4>
      <input type="email" name="requested_email">
    </div>
    <div class="col-sm-4">
      <h3>Step 4:</h3>        
      <h4>Setup your Status about your Sickness</h4>
      <input type="text" name="request_status">
    </div>

   
  </div>
</div>
<button type="submit" method="post" style="	display: flex;
	position: relative;
	text-align: center;
	padding: 20px 40px;
	border-color: #44bbff;
	border-radius: 3px;
	text-transform: uppercase;
	font-family: Montserrat, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 18px;
	font-weight: 700;
	margin-top: 30px;
	color: #fff;
	background-color: #44bbff;
	width: 100%;
	justify-content: center;
	zoom: 1;
  background-color: gray;
  color: white;
  font-size: 20px;">Send
</button>
</form>
</body>
</html>
