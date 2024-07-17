<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest Clone Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Sidebar -->
<div class="flex flex-col md:flex-row">
    <aside id="sidebar" class="w-full md:w-64 bg-gray-800 md:h-screen">
        <div class="p-6">
            <div class="flex items-center">
                <span class="text-white ml-4 text-2xl font-bold">InspireNest</span>
            </div>
        </div>
        <nav class="mt-6">
            <a href="Home.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 text-white flex items-center">
                <i class="fas fa-home mr-3"></i> Home
            </a>
            <a href="Userlist.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 text-white flex items-center">
                <i class="fas fa-user mr-3"></i> User_list
            </a>
            <a href="inbox.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 text-white flex items-center">
                <i class="fas fa-inbox mr-3"></i> Inbox
            </a>
            <a href="Feedback.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 text-white flex items-center">
                <i class="fas fa-compass mr-3"></i> Feedback
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 p-6 background-img">
        <button id="toggleSidebar" class=" text-zinc-900 px-4 py-2 rounded-lg mb-4 md:hidden flex items-center">
            <i class="fas fa-bars mr-2"></i> 
        </button>
            <div class="mt-6">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">Inbox List</h2>
            </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <img class=" rounded-full w-10 h-10" src="https://cdn.pixabay.com/photo/2024/06/21/08/21/hut-8843868_1280.jpg" alt="Pin 1" class="rounded-lg mb-2">
                        <h4 class="text-gray-700 font-semibold text-sm">username</h4>
                        <p class="text-gray-600">Massage</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <img class=" rounded-full w-10 h-10" src="https://images.unsplash.com/photo-1720649718712-dff5514d5534?q=80&w=2487&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Pin 1" class="rounded-lg mb-2">
                        <h4 class="text-gray-700 font-semibold text-sm">Username</h4>
                        <p class="text-gray-600">Massage</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <img class=" rounded-full w-10 h-10" src="https://cdn.pixabay.com/photo/2024/02/15/15/46/cat-8575641_1280.jpg" alt="Pin 1" class="rounded-lg mb-2">
                        <h4 class="text-gray-700 font-semibold text-sm">Username</h4>
                        <p class="text-gray-600">Massage</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <img class=" rounded-full w-10 h-10" src="https://cdn.pixabay.com/photo/2024/02/27/14/00/chrysanthemum-8600210_1280.jpg" alt="Pin 1" class="rounded-lg mb-2">
                        <h4 class="text-gray-700 font-semibold text-sm">Username</h4>
                        <p class="text-gray-600">Massage</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <img class=" rounded-full w-10 h-10" src="https://cdn.pixabay.com/photo/2023/11/01/11/24/path-8357201_1280.jpg" alt="Pin 1" class="rounded-lg mb-2">
                        <h4 class="text-gray-700 font-semibold text-sm">Username</h4>
                        <p class="text-gray-600">Massage</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('toggleSidebar').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('hidden');
    });
</script>

</body>
</html>
