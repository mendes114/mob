<?php
$servername = "localhost";
$database = "u453424427_login";
$username = "u453424427_root";
$password = "8F/!~|?uNx!";
// Create connection
$conexao = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
/*echo "Connected successfully";/*
