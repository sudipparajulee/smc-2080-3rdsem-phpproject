<?php 
$qry = "SELECT * FROM categories ORDER BY priority";
include 'admin/dbconnection.php';
$resultcat = mysqli_query($conn, $qry);
include 'admin/closeconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="flex items-center justify-between px-20 py-4 shadow-md">
        <h2 class="font-bold text-2xl">LOGO</h2>
        <div class="flex gap-4">
            <a href="index.php" class="text-gray-600">Home</a>
            <?php while($rowcat = mysqli_fetch_assoc($resultcat)){ ?>
            <a href="" class="text-gray-600"><?php echo $rowcat['name'] ?></a>
            <?php } ?>
            <a href="login.php" class="text-gray-600">Login</a>
        </div>
    </nav>
