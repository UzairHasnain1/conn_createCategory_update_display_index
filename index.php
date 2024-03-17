<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

<div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Category Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php">Category Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <?php
    if (isset($_SESSION['SuccessMessage'])) {
    ?>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['SuccessMessage'];
                                                session_unset();
                                                ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>


    <?php
    if (isset($_SESSION['ErrorMessage'])) {
    ?>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['ErrorMessage'];
                                                session_unset();
                                                ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>



    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6 card shadow">
                <form action="createCategory.php" method="POST" enctype="multipart/form-data">
                    <div class="my-3 text-center">
                        <h1 class="text-primary text-uppercase">Add Category</h1>
                    </div>
                    <div class="my-3">
                        <label for="">Enter Category Name</label>
                        <input type="text" name="cat_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Enter Category Image</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="my-3 text-center">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary w-75">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>