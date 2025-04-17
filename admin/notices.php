<?php include 'header.php' ?>
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
        <tr class="text-center">
            <td class="p-2 border">1</td>
            <td class="p-2 border">This is a notice</td>
            <td class="p-2 border">Edit Delete</td>
        </tr>
    </table>
<?php include 'footer.php' ?>