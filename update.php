<?php

include 'conn.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `tbl_category` WHERE `cat_id` = '$id'";
$run = mysqli_query($con, $sql);
$row = mysqli_fetch_array($run);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    
<div class="container pt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-6 card shadow">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="my-3 text-center">
                        <h1 class="text-primary text-uppercase">Update Category</h1>
                    </div>
                    <div class="my-3">
                        <label for="">Enter Category Name</label>
                        <input type="text" name="cat_name" value="<?php echo $row[1]; ?>" class="form-control">
                    </div>
                    <img src="<?php echo $row[2];  ?>" width="120" height="80" alt="">
                    <div class="mb-3">
                        <label for="">Enter Category Image</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="my-3 text-center">
                        <input type="submit" name="updatebtn" value="Update" class="btn btn-primary w-75">
                    </div>
                </form>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>