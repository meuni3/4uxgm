<?php
$servername="localhost";
$username="root";
$password="";
$dbname="search for gamers";
$conn= new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_errno)
{
    die("connection failed:" . $conn->connect_error);

}
?>