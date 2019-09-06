<?php

$requested_day = $_POST['requested_day'];
$requested_time = $_POST['requested_time'];
$requested_email = $_POST['requested_email'];
$request_status = $_POST['request_status'];


if(empty($requested_day) || empty($requested_time) || empty($requested_email) || empty($request_status))
{
    echo "You did not fill out the required fields.\n";
}

if(empty($requested_time)){
    echo "You didn't choose a TIME! How does THE DOCTOR know ?\n";

}

if(empty($requested_email)){
    echo "You must give us your E-MAIL ! How does THE DOCTOR know ?\n";

}

if(empty($request_status)){
    echo "You didn't Tell us what is your problem! How does THE DOCTOR know ?\n";

}

?>