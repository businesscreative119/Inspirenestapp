<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InspireNest</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">See</a>
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Explore</a>
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Business News</a>
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Help</a>
                </div>
                <div class="hidden lg:flex gap-4">
                    <a href="php/logout.php" class="text-white bg-[#FF1D8D] hover:bg-gray-600 px-4 py-2 rounded-full flex items-center text-sm">Logout</a>
                </div>
            </div>
            <div class="mobile-menu flex-col gap-2 p-4 hidden lg:hidden" id="mobile-menu">
                    <a href="index.php" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Today</a>
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">See</a>
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Explore</a>
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Business News</a>
                    <a href="#" class="text-gray-800 hover:text-teal-600 px-3 py-2 rounded">Help</a>
                    <a href="php/logout.php" class="text-white bg-[#FF1D8D] hover:text-white px-3 py-2 rounded w-16" >Logout</a>
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
