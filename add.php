<?php

include "conn.php";

$YourName=$_POST['YourName'];
$YourId=$_POST['YourId'];
$YourEmali=$_POST['YourEmali'];
$PlayerLevel=$_POST['PlayerLevel'];
$account=$_POST['account'];
$GameName=$_POST['GameName'];
$YourBio=$_POST['YourBio'];

mysqli_query($conn,"insert into `account` (YourName,YourId,YourEmali,PlayerLevel,account,GameName,YourBio) 
values ('$YourName','$YourId','$YourEmali','$PlayerLevel','$account','$GameName','$YourBio')");

header ('location:index.php');


?>