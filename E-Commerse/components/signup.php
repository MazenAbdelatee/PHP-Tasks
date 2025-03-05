<?php
require_once '../../handlers/signUp.php';
$externalValue = isset($_GET['role']) ? htmlspecialchars($_GET['role']) : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 justify-center mx-auto mt-20">
        <h2 class="text-2xl font-bold mb-6 text-center">Sign Up</h2>
        <form action="C:\xampp\htdocs\Tasks\E-Commerse\handlers\signUp.php" method="post">
        <input type="hidden" name="externalValue" value="<?php echo $externalValue;?>">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" required class="w-full px-3 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
                <input type="password" id="password" name="password" required class="w-full px-3 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-bold mb-2">Phone:</label>
                <input type="text" id="phone" name="phone" required class="w-full px-3 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2 font-bold mb-2">Address:</label>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="country" class="block text-gray-700  mb-2">Country:</label>
                        <input type="text" id="country" name="country" required class="w-full px-3 py-2 border border-gray-300 rounded-lg">
                    </div>
                    <div>
                        <label for="city" class="block text-gray-700  mb-2">City:</label>
                        <input type="text" id="city" name="city" required class="w-full px-3 py-2 border border-gray-300 rounded-lg">
                    </div>
                    <div>
                        <label for="street" class="block text-gray-700  mb-2">Street:</label>
                        <input type="text" id="street" name="street" required class="w-full px-3 py-2 border border-gray-300 rounded-lg">
                    </div>
                </div>
            </div>
            <div>
                <input type="submit" name='submit' value="SignUp" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>