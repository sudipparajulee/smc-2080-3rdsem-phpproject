<?php include 'header.php' ?>
    <div class="flex h-screen items-center justify-center">
        <div class="w-96 bg-white shadow-md rounded-lg p-6 border">
            <h2 class="text-2xl font-bold text-center mb-4">Login</h2>
            <form action="" method="POST">
                <input type="text" name="username" placeholder="Username" class="w-full border border-gray-300 rounded-md p-2 mb-4" required>
                <input type="password" name="password" placeholder="Password" class="w-full border border-gray-300 rounded-md p-2 mb-4" required>
                <button type="submit" name="login" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">Login</button>
            </form>
        </div>

    </div>
<?php include 'footer.php' ?>

<?php 
if(isset($_POST['login']))
{
    header ('location: admin/dashboard.php');
}
?>