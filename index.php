<!doctype html>
<html lang="en">
<head>
    <?php include("head.php")?>
</head>
<body>
<div class="container">
    <form method="post" action="students.php">
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input  name="name" type="text" class="form-control" placeholder="Enter Name" required/>

        </div>
        <div class="mb-3">
            <label  class="form-label">Age</label>
            <input  name="age" type="number" class="form-control" placeholder="Enter Age" required/>

        </div>
        <div class="mb-3">
            <label  class="form-label">Address</label>
            <textarea name="address" type="text" class="form-control" placeholder="Enter address"></textarea>

        </div>
        <div class="mb-3">
            <label  class="form-label">Telephone</label>
            <input  name="telephone" type="number" class="form-control" placeholder="Enter Telephone" required/>

        </div>

        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>

