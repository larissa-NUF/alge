<?php

$server = "localhost";
$db = "alge";
$user = "root";
$password = "usbw";
/* $password = ""; */

$conn = new mysqli($server, $user, $password, $db);

if(!$conn){
    echo "deu ruim";
}