<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once './components/nav.php';?>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-3xl font-bold mb-4 text-gray-800 text-center">Create Account</h2>
            <p class="text-gray-700 mb-4 text-center">Choose the type of account you want to create</p>
            <div class="flex space-x-4 justify-center">
                <a href="./users/customer/signup.php?role=customer" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 text-center">Customer Account</a>
                <a href="./seller/seller.php?role=seller" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700 text-center">Seller Account</a>
            </div>
        </div>
    </div>
    <?php require_once './components/footer.php';?>
</body>
</html>