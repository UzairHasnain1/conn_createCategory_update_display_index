<?php
session_start();
include 'conn.php';
if(isset($_POST['submit']))
{
    $cat_name = $_POST['cat_name'];
    $image_name = $_FILES['image']['name'];
    $image_temp_name = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $folder = "Images/";
    if(strtolower($image_type) == "image/jpg" || strtolower($image_type) == "image/png" || strtolower($image_type) == "image/jpeg")
    {
        if($image_size <= 1000000)
        {
            $folder = $folder . $image_name;
            $sql = "INSERT INTO `tbl_category` (`cat_name`, `cat_image`) VALUES ('$cat_name', '$folder')";
            $query = mysqli_query($con, $sql);
            if($query)
            {
                move_uploaded_file($image_temp_name, $folder);
                $_SESSION['SuccessMessage'] = "Data Inserted Successfully";
                header('Location: index.php');
            }
            else
            {
                $_SESSION['ErrorMessage'] =  "Data not Inserted";
                header('Location: index.php');
            }
        }
        else
        {
            $_SESSION['ErrorMessage'] = "Image Size Should be less than 1MB";
            header('Location: index.php');
        }
    }
    else
    {
        $_SESSION['ErrorMessage'] = "Image formate Not Supported";
        header('Location: index.php');
    }


}


?>