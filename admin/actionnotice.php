<?php
if(isset($_POST['store']))
{
    $notice = $_POST['notice'];
    $qry = "INSERT INTO notices (notice) VALUES ('$notice')";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    if($result)
    {
        echo "<script>alert('Notice Created Successfully');</script>";
        echo "<script>window.location.href='notices.php';</script>";
    }
    else
    {
        echo "Failed to create notice";
    }
    include 'closeconnection.php';
}

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $notice = $_POST['notice'];
    $qry = "UPDATE notices SET notice='$notice' WHERE id=$id";
    include 'dbconnection.php';
    $result = mysqli_query($conn,$qry);
    if($result)
    {
        echo "<script>alert('Notice Updated Successfully');</script>";
        echo "<script>window.location.href='notices.php';</script>";
    }
    else
    {
        echo "Failed to update notice";
    }
    include 'closeconnection.php';
}

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $qry = "DELETE FROM notices WHERE id=$id";
    include 'dbconnection.php';
    $result = mysqli_query($conn,$qry);
    if($result)
    {
        echo "<script>alert('Notice Deleted Successfully');</script>";
        echo "<script>window.location.href='notices.php';</script>";
    }
    else
    {
        echo "Failed to delete notice";
    }
    include 'closeconnection.php';
}