<?php
session_start(); // Ensure session is started

include("./php/config.php");

if (!isset($_SESSION['valid'])) {
    header("Location: Admin/Login.php");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "InspireNest";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




// Fetch users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

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
                <i class="fas fa-user mr-3"></i> User List
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
        <button id="toggleSidebar" class="text-zinc-900 px-4 py-2 rounded-lg mb-4 md:hidden flex items-center">
            <i class="fas fa-bars mr-2"></i> 
        </button>
        <div class="mt-6">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">User List</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $photo = htmlspecialchars($row['photo']);
                        echo "
                        <div class='bg-gray-100 p-4 rounded-lg shadow-md'>
                            <img src='" .base64_encode($row['ProfilePhoto']) . "' alt='User Photo' class='w-16 h-16 rounded-full mb-2'>
                            <h4 class='text-gray-700 font-semibold'>Name: " . htmlspecialchars($row['Username']) . "</h4>
                            <p class='text-gray-600'>Email: " . htmlspecialchars($row['Email']) . "</p>
                            <p class='text-gray-600'>Age: " . htmlspecialchars($row['Age']) . "</p>
                        </div>";
                    }
                } else {
                    echo "<div>No users found</div>";
                }
                ?>
                    <?php
                $sql = "SELECT * FROM userdetails";
                $result = $conn->query($sql);
                
                $conn->close();
                
                 ?>
            </div>
        </div>
        <div class="mt-6">
            <h3 class="text-xl font-semibold">Boards</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h4 class="text-gray-700 font-semibold">Board 1</h4>
                    <p class="text-gray-600">Description of Board 1...</p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h4 class="text-gray-700 font-semibold">Board 2</h4>
                    <p class="text-gray-600">Description of Board 2...</p>
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
