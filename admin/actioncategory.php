<?php
if(isset($_POST['store']))
{
    $priority = $_POST['priority'];
    $name = $_POST['name'];
    $qry = "INSERT INTO categories (priority, name) VALUES ('$priority', '$name')";
    include 'dbconnection.php';
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