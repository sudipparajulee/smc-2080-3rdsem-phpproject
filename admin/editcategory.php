<?php include 'header.php'; 
$id = $_GET['id'];
$qry = "SELECT * FROM categories WHERE id=$id";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($result);
include 'closeconnection.php';
?>
    <h2 class="text-3xl">Edit Category</h2>
    <hr class="mb-4 h-1 bg-red-600">
    <form action="actioncategory.php" method="POST">
        <input type="text" name="priority" id="priority" class="border border-gray-300 p-2 w-full mb-4 rounded-lg" placeholder="Enter Priority" value="<?php echo $row['priority']; ?>">
        <input type="text" name="name" id="name" class="border border-gray-300 p-2 w-full mb-4 rounded-lg" placeholder="Enter Category Name" value="<?php echo $row['name']; ?>">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="flex justify-center">
            <button type="submit" name="update" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md">Update Category</button>
            <a href="categories.php" class="bg-red-600 text-white px-4 py-2 rounded-lg shadow-md ml-4">Cancel</a>
        </div>
    </form>
<?php include 'footer.php'; ?>