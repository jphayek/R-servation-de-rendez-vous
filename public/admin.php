<?php 
session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Admin</title>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Welcome Doctor</h1>
  <p>Here they are comming to see you </p>
</div>
<form action="reservation.php" method="get">
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Patient 1</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Patient 2</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Patient 3</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
</div>
</form>
</body>
</html>

