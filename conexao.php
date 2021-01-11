<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "loc_carros";

// Create connection
$conn = new mysqli($servidor, $usuario, $senha, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

?>