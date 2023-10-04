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
    $product = $result->fetch_assoc();
} else{
    die("404 NOT FOUND");
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php include("head.php")?>
</head>
<body>
<div class="container">
    <form method="post" action="update.php?id=<?php echo $id;?> ">

        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input value="<?php echo $student['name']?>" name="name" type="text" class="form-control" placeholder="Enter Name">

        </div>
        <div class="mb-3">
            <label  class="form-label">Age</label>
            <input  name="age" type="number" class="form-control" placeholder="Enter age" value="<?php echo $student['age']?>">

        </div>
        <div class="mb-3">
            <label  class="form-label">Address</label>
            <input  name="address" type="text" class="form-control" placeholder="Enter Address" value="<?php echo $student['address']?>">

        </div>
        <div class="mb-3">
            <label  class="form-label">Telephone</label>
            <input  name="telephone" type="number" class="form-control" placeholder="Enter telephone" value="<?php echo $student['telephone']?>">

        </div>

        <button name="submit" type="submit" class="btn btn-primary" >Submit</button>
    </form>
</div>

</body>
</html>
