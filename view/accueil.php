<?php

session_start();

// Storing session data
$_SESSION["requested_day"] = "Peter";
$_SESSION["requested_time"] = "Parker";
$_SESSION["requester_email"] = "Peter";
$_SESSION["request_status"] = "Parker";




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
</head>
<body>
    <h1>Welcome to Doctor's Calendar </h1>
</body>
</html>