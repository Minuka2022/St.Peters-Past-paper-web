<?php

$serverName = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname = "spcptalk_ecommerce";

$conn = new mysqli($serverName, $DBusername, $DBpassword, $DBname);
if ($conn->connect_error) {
    echo "Failed to connect: " .mysqli_connect_error();
}

