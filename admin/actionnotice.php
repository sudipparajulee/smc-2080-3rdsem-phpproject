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