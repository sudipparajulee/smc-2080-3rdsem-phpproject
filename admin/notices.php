<?php include 'header.php';
$qry = "SELECT * FROM notices"; 
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
include 'closeconnection.php';
?>
    <h2 class="text-3xl">Notices</h2>
    <hr class="mb-4 h-1 bg-red-600">
    <div class="flex mb-4 justify-end">
        <a href="createnotice.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md">Add Notice</a>
    </div>
    <table class="w-full">
        <tr class="bg-gray-200">
            <th class="p-2 border border-gray-300">S.N.</th>
            <th class="p-2 border border-gray-300">Notice</th>
            <th class="p-2 border border-gray-300">Action</th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr class="text-center">
            <td class="p-2 border"><?php echo $row['id']; ?></td>
            <td class="p-2 border"><?php echo $row['notice'];?></td>
            <td class="p-2 border">
                <a href="" class="bg-blue-600 text-white px-2 py-1 rounded-lg mx-1">Edit</a>
                <a href="" class="bg-red-600 text-white px-2 py-1 rounded-lg mx-1">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
<?php include 'footer.php' ?>