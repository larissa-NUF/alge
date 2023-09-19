<?php

$server = "localhost";
$db = "alge_db";
$user = "root";
$password = "usbw";

$conn = new mysqli($server, $user, $password, $db);

if(!$conn){
    echo "deu ruim";
}