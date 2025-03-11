<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adishesha Institute of Yogic Sciences</title>
    <meta name="description" content="Transform your life with our premier Yoga Teacher Training Program. Government recognized certification by Ministry of AYUSH.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap');
        
        :root {
            --primary-color: #E67E22;
            --primary-light: #F39C12;
            --primary-dark: #D35400;
            --accent-color: #FEF9E7;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }
        
        .logo-img {
            background-image: url('https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-1px);
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <nav class="navbar bg-white py-4" x-data="{ mobileMenuOpen: false }">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-3">
                    <div class="logo-img w-12 h-12 rounded-full overflow-hidden border-2 border-orange-400"></div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-semibold text-gray-800">
                            <span class="text-orange-500">Adishesha</span> Institute
                        </h1>
                        <p class="text-xs text-gray-500">Yogic Sciences</p>
                    </div>
                </a>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="nav-link text-gray-700 hover:text-orange-500 font-medium transition-colors duration-300">Home</a>
                    <a href="#" class="nav-link text-gray-700 hover:text-orange-500 font-medium transition-colors duration-300">Programs</a>
                    <a href="#" class="nav-link text-gray-700 hover:text-orange-500 font-medium transition-colors duration-300">Faculty</a>
                    <a href="#" class="nav-link text-gray-700 hover:text-orange-500 font-medium transition-colors duration-300">Testimonials</a>
                    <a href="#" class="nav-link text-gray-700 hover:text-orange-500 font-medium transition-colors duration-300">Resources</a>
                    <a href="#" class="nav-link text-gray-700 hover:text-orange-500 font-medium transition-colors duration-300">Contact</a>
                    <a href="#" class="btn-primary text-white px-6 py-2 rounded-md font-medium hover:shadow-md">Enroll Now</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="text-gray-700 focus:outline-none">
                        <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu Dropdown -->
            <div x-show="mobileMenuOpen" class="md:hidden mt-4 pb-2 space-y-3" style="display: none;">
                <a href="#" class="block py-2 text-gray-700 hover:text-orange-500 border-b border-gray-200">Home</a>
                <a href="#" class="block py-2 text-gray-700 hover:text-orange-500 border-b border-gray-200">Programs</a>
                <a href="#" class="block py-2 text-gray-700 hover:text-orange-500 border-b border-gray-200">Faculty</a>
                <a href="#" class="block py-2 text-gray-700 hover:text-orange-500 border-b border-gray-200">Testimonials</a>
                <a href="#" class="block py-2 text-gray-700 hover:text-orange-500 border-b border-gray-200">Resources</a>
                <a href="#" class="block py-2 text-gray-700 hover:text-orange-500 border-b border-gray-200">Contact</a>
                <a href="#" class="btn-primary text-white block text-center px-4 py-2 rounded-md font-medium mt-4">Enroll Now</a>
            </div>
        </div>
    </nav>
</body>
</html>