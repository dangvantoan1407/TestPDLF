<?php
$id = $_GET['id'];

//1.connect db
$host = "127.0.0.1";
$dbname = "students";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host,$dbuser,$dbpass,$dbname);//host user pass name
if ($conn->connect_error) {
    die("Connect refused");
}

$sql = "select * from students where id = $id";
$result = $conn->query($sql);
$student = null;
if ($result->num_rows >0) {
    $new_name = $_POST["name"];
    $new_age = $_POST["age"];
    $new_address= $_POST["address"];
    $new_telephone = $_POST["telephone"];
    $update_sql = "update students set name='$new_name',age=$new_age,address=$new_address, telephone = '$new_telephone' where id = $id";
    $conn->query($update_sql);
    header("Location: list.php");
} else{
    die("404 NOT FOUND");
}
?>

