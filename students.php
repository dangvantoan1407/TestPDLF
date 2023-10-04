<?php
$s_name= $_POST["name"];
$s_age = $_POST["age"];
$s_address = $_POST["address"];
$s_telephone = $_POST["telephone"];
//1.connect db
$host = "127.0.0.1";
$dbname = "students";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host,$dbuser,$dbpass,$dbname);//host user pass name
if ($conn->connect_error) {
    die("Connect refused");
}

$sql = "INSERT INTO students (name, age, address, telephone) VALUES ('$s_name', $s_age, '$s_address', '$s_telephone')";
$conn->query($sql);

header("Location: list.php");

