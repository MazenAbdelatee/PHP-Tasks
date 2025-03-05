<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .nav-link {
            position: relative;
        }
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }
        .nav-link:hover:after {
            width: 100%;
        }
        
        .login-btn:hover, .cart-btn:hover {
            transform: translateY(-2px);
        }
        
        .signup-btn:hover {
            transform: scale(1.05);
        }
        
        .brand:hover {
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.6);
        }
        
        .cart-badge {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <nav class="bg-gradient-to-r from-blue-600 to-purple-700 px-4 py-3 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <a href="main.php" class="brand text-xl font-bold text-white transition-all duration-300">OnlineStore</a>
            </div>
            
            <div class="hidden md:flex space-x-8">
                <a href="main.php" class="nav-link text-blue-100 hover:text-white transition duration-300">Home</a>
                <a href="#" class="nav-link text-blue-100 hover:text-white transition duration-300">Products</a>
                <a href="#" class="nav-link text-blue-100 hover:text-white transition duration-300">About</a>
                <a href="#" class="nav-link text-blue-100 hover:text-white transition duration-300">Contact</a>
            </div>
            
            <div class="flex items-center space-x-4">
                <a href="#" class="cart-btn relative p-2 text-white hover:text-yellow-200 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="cart-badge absolute -top-2 -right-2 bg-yellow-400 text-blue-800 text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">3</span>
                </a>
                
                <a href="#" class="login-btn px-4 py-2 bg-white text-blue-700 font-medium rounded-lg hover:bg-blue-50 transition-all duration-300 shadow-md">Log In</a>
                <a href="role.php" class="signup-btn px-4 py-2 bg-yellow-400 text-blue-800 font-medium rounded-lg hover:bg-yellow-300 transition-all duration-300 shadow-md">Sign Up</a>
            </div>
        </div>
    </nav>
</html>