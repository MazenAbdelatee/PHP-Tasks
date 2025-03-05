<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php require_once './components/nav.php';?>    

<section class="bg-gradient-to-r from-blue-600 to-purple-700 text-white">
  <div class="container mx-auto px-4 py-16 md:py-24">
    <div class="flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 mb-8 md:mb-0">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Shop the Latest Trends</h1>
        <p class="text-xl mb-6">Discover our premium collection with free shipping on all orders.</p>
        <div class="flex flex-wrap gap-4">
          <a href="#" class="px-6 py-3 bg-yellow-400 text-blue-800 font-medium rounded-lg hover:bg-yellow-300 transition-all duration-300 transform hover:scale-105">Shop Now</a>
          <a href="#" class="px-6 py-3 bg-transparent border-2 border-white text-white font-medium rounded-lg hover:bg-white hover:text-blue-700 transition-all duration-300">View Deals</a>
        </div>
      </div>
      <div class="md:w-1/2">
        <img src="/api/placeholder/600/400" alt="Featured Products" class="rounded-lg shadow-2xl transform transition-all duration-500 hover:rotate-1 hover:scale-105">
      </div>
    </div>
  </div>
</section>



<!-- Featured Products -->
<section class="py-12 bg-white">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-8">
      <h2 class="text-3xl font-bold">Best Sellers</h2>
      <a href="#" class="text-blue-600 hover:underline">View All</a>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Product Card 1 -->
      <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
        <div class="relative">
          <img src="/api/placeholder/400/300" alt="Product Name" class="w-full h-56 object-cover">
          <div class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full">20% OFF</div>
        </div>
        <div class="p-4">
          <h3 class="font-medium text-gray-900 mb-1">Wireless Headphones</h3>
          <p class="text-gray-500 text-sm mb-2">Premium Sound Quality</p>
          <div class="flex items-center mb-3">
            <div class="flex text-yellow-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            </div>
            <span class="text-xs text-gray-500 ml-1">(42)</span>
          </div>
          <div class="flex justify-between items-center">
            <div>
              <span class="text-gray-900 font-bold">$79.99</span>
              <span class="text-gray-500 text-sm line-through ml-1">$99.99</span>
            </div>
            <button class="p-2 rounded-full bg-blue-500 text-white hover:bg-blue-600 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      
      <!-- Product Card 2 -->
      <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
        <div class="relative">
          <img src="/api/placeholder/400/300" alt="Product Name" class="w-full h-56 object-cover">
          <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">NEW</div>
        </div>
        <div class="p-4">
          <h3 class="font-medium text-gray-900 mb-1">Smart Watch</h3>
          <p class="text-gray-500 text-sm mb-2">Fitness & Health Tracking</p>
          <div class="flex items-center mb-3">
            <div class="flex text-yellow-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            </div>
            <span class="text-xs text-gray-500 ml-1">(128)</span>
          </div>
          <div class="flex justify-between items-center">
            <div>
              <span class="text-gray-900 font-bold">$149.99</span>
            </div>
            <button class="p-2 rounded-full bg-blue-500 text-white hover:bg-blue-600 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      
      <!-- Product Card 3 -->
      <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
        <div class="relative">
          <img src="/api/placeholder/400/300" alt="Product Name" class="w-full h-56 object-cover">
        </div>
        <div class="p-4">
          <h3 class="font-medium text-gray-900 mb-1">Coffee Maker</h3>
          <p class="text-gray-500 text-sm mb-2">Programmable Brewing</p>
          <div class="flex items-center mb-3">
            <div class="flex text-yellow-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg>
            </div>
            <span class="text-xs text-gray-500 ml-1">(76)</span>
          </div>
          <div class="flex justify-between items-center">
            <div>
              <span class="text-gray-900 font-bold">$89.99</span>
              <span class="text-gray-500 text-sm line-through ml-1">$109.99</span>
            </div>
            <button class="p-2 rounded-full bg-blue-500 text-white hover:bg-blue-600 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      
      <!-- Product Card 4 -->
      <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
        <div class="relative">
          <img src="/api/placeholder/400/300" alt="Product Name" class="w-full h-56 object-cover">
          <div class="absolute top-2 right-2 bg-purple-500 text-white text-xs px-2 py-1 rounded-full">BESTSELLER</div>
        </div>
        <div class="p-4">
          <h3 class="font-medium text-gray-900 mb-1">Bluetooth Speaker</h3>
          <p class="text-gray-500 text-sm mb-2">Waterproof & Portable</p>
          <div class="flex items-center mb-3">
            <div class="flex text-yellow-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            </div>
            <span class="text-xs text-gray-500 ml-1">(204)</span>
          </div>
          <div class="flex justify-between items-center">
            <div>
              <span class="text-gray-900 font-bold">$59.99</span>
            </div>
            <button class="p-2 rounded-full bg-blue-500 text-white hover:bg-blue-600 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Features Section -->
<section class="py-12 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Feature 1 -->
      <div class="flex flex-col items-center text-center p-6">
        <div class="bg-blue-100 p-3 rounded-full mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Free Shipping</h3>
        <p class="text-gray-600">On all orders over $50. International shipping available on select products.</p>
      </div>
      
      <!-- Feature 2 -->
      <div class="flex flex-col items-center text-center p-6">
        <div class="bg-blue-100 p-3 rounded-full mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Secure Payments</h3>
        <p class="text-gray-600">All transactions are secure and encrypted. We accept all major credit cards and PayPal.</p>
      </div>
      
      <!-- Feature 3 -->
      <div class="flex flex-col items-center text-center p-6">
        <div class="bg-blue-100 p-3 rounded-full mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Easy Returns</h3>
        <p class="text-gray-600">30-day hassle-free return policy. Not satisfied? Get a full refund with no questions asked.</p>
      </div>
    </div>
  </div>
</section>

    <?php require_once './components/footer.php';?>

</body>
</html>