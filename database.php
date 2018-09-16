<?php

$hostName='localhost'; // host name
$dbName='insert_image'; // database name
$dbUserName='root'; // database user name
$dbPassword=''; // database password

// create connection in database
$connect=new PDO("mysql:host=$hostName;dbname=$dbName","$dbUserName","$dbPassword");

?>