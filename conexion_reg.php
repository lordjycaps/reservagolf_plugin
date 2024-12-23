<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservasgolftest";

$conexion = new mysqli($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
    echo "No conectado", mysqli_connetc_error();
    exit();
}else{
   // echo "conectado";
}