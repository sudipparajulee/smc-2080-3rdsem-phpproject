<?php
if(isset($_POST['store']))
{
    $priority = $_POST['priority'];
    $name = $_POST['name'];
    $qrycheck = "SELECT * FROM categories WHERE priority=$priority";
    $qry = "INSERT INTO categories (priority, name) VALUES ('$priority', '$name')";
    include 'dbconnection.php';
    $resultcheck = mysqli_query($conn,$qrycheck);
    if(mysqli_num_rows($resultcheck) > 0)
    {
        echo "<script>alert('Priority Already Exist');</script>";
        echo "<script>window.location.href='createcategory.php';</script>";
        exit();
    }
    $result = mysqli_query($conn, $qry);
    if($result)
    {
        echo "<script>alert('Category Created Successfully');</script>";
        echo "<script>window.location.href='categories.php';</script>";
    }
    else
    {
        echo "Failed to create category";
    }
    include 'closeconnection.php';
}

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $priority = $_POST['priority'];
    $name = $_POST['name'];
    $qry = "UPDATE categories SET priority='$priority', name='$name' WHERE id=$id";
    include 'dbconnection.php';
    $result = mysqli_query($conn,$qry);
    if($result)
    {
        echo "<script>alert('Category Updated Successfully');</script>";
        echo "<script>window.location.href='categories.php';</script>";
    }
    else
    {
        echo "Failed to update category";
    }
    include 'closeconnection.php';
}

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $qry = "DELETE FROM categories WHERE id=$id";
    include 'dbconnection.php';
    $result = mysqli_query($conn,$qry);
    if($result)
    {
        echo "<script>alert('Category Deleted Successfully');</script>";
        echo "<script>window.location.href='categories.php';</script>";
    }
    else
    {
        echo "Failed to delete category";
    }
    include 'closeconnection.php';
}