<?php include 'header.php'; ?>
    <h2 class="text-3xl">Create Category</h2>
    <hr class="mb-4 h-1 bg-red-600">
    <form action="actioncategory.php" method="POST">
        <input type="text" name="priority" id="priority" class="border border-gray-300 p-2 w-full mb-4 rounded-lg" placeholder="Enter Priority">
        <input type="text" name="name" id="name" class="border border-gray-300 p-2 w-full mb-4 rounded-lg" placeholder="Enter Category Name">
        <div class="flex justify-center">
            <button type="submit" name="store" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md">Create Category</button>
            <a href="categories.php" class="bg-red-600 text-white px-4 py-2 rounded-lg shadow-md ml-4">Cancel</a>
        </div>
    </form>
<?php include 'footer.php'; ?>