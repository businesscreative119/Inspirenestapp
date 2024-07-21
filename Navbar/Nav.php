
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InspireNest</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans">
    <nav class="sticky top-0 z-50 bg-gray-100 border-b border-gray-300">
        <div class="container mx-auto px-4 max-w-screen-xl">
            <div class="flex justify-between items-center h-16">
                <button class="menu-button p-2 focus:outline-none lg:hidden" onclick="toggleMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" class="text-black"/>
                    </svg>
                </button>
                <div class="logo">
                    <h1 class="text-xl font-bold text-[#FF1D8D]">InspireNest</h1>
                </div>
                <div class="hidden lg:flex gap-2">
                    <a href="index.php" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Today</a>
                    <a href="Watch.php" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Watch</a>
                    <a href="Explore.php" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Explore</a>
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Business</a>
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">News</a>
                </div>
                <div class="hidden lg:flex gap-4">
                    <a href="Login.php" class="text-white bg-[#FF1D8D] hover:bg-gray-600 px-4 py-2 rounded-full flex items-center text-sm">LogIn</a>
                    <a href="register.php" class="text-white bg-gray-800 hover:bg-gray-600 px-4 py-2 rounded-full flex items-center text-sm">SignUp</a>
                </div>
            </div>
            <div class="mobile-menu flex-col gap-2 p-4 hidden lg:hidden" id="mobile-menu">
                    <a href="index.php" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Today</a>
                    <a href="Watch.php" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Watch</a>
                    <a href="Explore.php" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Explore</a>
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Business</a>
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">News</a>
                    <a href="Login.php" class="text-white bg-[#FF1D8D] hover:text-white px-3 py-2 rounded w-16" >Login</a>
                    <a href="register.php" class="text-white bg-gray-800 hover:text-teal-600 px-3 py-2 rounded w-16" >SignUp</a>
            </div>
        </div>
    </nav>

    <script>
        let isOpen = false;

        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            isOpen = !isOpen;
            menu.style.display = isOpen ? 'flex' : 'none';
            menuIcon.setAttribute('d', isOpen ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16m-7 6h7');
        }

        function handleOpen() {
            // Sign-in functionality
            alert("Sign-in clicked!");
        }
    </script>
    
</body>
</html>
