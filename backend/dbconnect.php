<?php
session_start();
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="loginapp";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

?>