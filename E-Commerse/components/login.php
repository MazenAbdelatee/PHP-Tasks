<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100  h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 flex items-center justify-center mx-auto mt-20">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        <form action="../handlers/login.php" method="post">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password" required class="w-full px-3 py-2 border border-gray-300 rounded-lg">
            </div>
            <div>
                <input type="submit" value="Login" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>
