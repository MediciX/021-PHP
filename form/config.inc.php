<?php

$servername = "localhost"; //ip server
$username = "root"; //username
$password = ""; //password
$dbname = "db_basic_php"; //ชื่อ database

//สร้าง connection
$connection = new mysqli($servername, $username, $password, $dbname);

//ทำให้รองรับ utf8
$connection -> set_charset("utf8");

//เช็คการเชื่อมต่อ
if ($connection -> connect_error) {
    die ("connection failed: " . $connection -> connect_error);
}
else {
    echo "Connection Successfully!";
}

?>