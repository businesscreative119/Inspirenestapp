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

// Handle Create
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (Username, Email, Age, password) VALUES ('$username', '$email', '$age', '$password')";
    if ($conn->query($sql) === TRUE) {
        header("Location: Admin/Home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle Update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'] ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $_POST['current_password'];

    $sql = "UPDATE users SET Username='$username', Email='$email', Age='$age', password='$password' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: Admin/Home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: Admin/Home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
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
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .hidden {
            display: none;
        }
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }
        .modal-content {
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            max-width: 100%;
            width: 100%;
            max-width: 500px;
            position: relative;
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
            <a href="index.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 text-white flex items-center">
                <i class="fas fa-home mr-3"></i> Home
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 p-6 background-img">
        <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded mb-6 flex items-center">
            <i class="fas fa-plus mr-2"></i> Add New User
        </button>

        <!-- Create User Form Modal -->
        <div id="userModal" class="modal hidden">
            <div class="modal-content">
                <button id="closeModal" class="absolute top-3 right-3 text-gray-600 hover:text-gray-900">
                    <i class="fas fa-times"></i>
                </button>
                <h2 class="text-2xl font-semibold mb-4">Add New User</h2>
                <form method="POST" action="">
                    <div class="mb-4">
                        <label class="block text-gray-700">Username</label>
                        <input type="text" name="username" class="w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Email</label>
                        <input type="email" name="email" class="w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Age</label>
                        <input type="number" name="age" class="w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="password" class="w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" name="create" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
                        <button type="button" id="cancelModal" class="bg-gray-300 text-gray-800 px-4 py-2 rounded">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Update User Form -->
        <?php if (isset($_GET['edit'])):
            $id = $_GET['edit'];
            $sql = "SELECT * FROM users WHERE id=$id";
            $result = $conn->query($sql);
            $user = $result->fetch_assoc();
        ?>
        <div class="bg-white p-6 rounded-lg shadow-lg bg-opacity-80 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Edit User</h2>
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                <input type="hidden" name="current_password" value="<?php echo $user['password']; ?>">
                <div class="mb-4">
                    <label class="block text-gray-700">Username</label>
                    <input type="text" name="username" class="w-full px-3 py-2 border rounded" value="<?php echo $user['Username']; ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full px-3 py-2 border rounded" value="<?php echo $user['Email']; ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Age</label>
                    <input type="number" name="age" class="w-full px-3 py-2 border rounded" value="<?php echo $user['Age']; ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Password (Leave empty to keep current)</label>
                    <input type="password" name="password" class="w-full px-3 py-2 border rounded">
                </div>
                <button type="submit" name="update" class="bg-yellow-500 text-white px-3 py-2 rounded">Update</button>
            </form>
        </div>
        <?php endif; ?>

        <!-- Display Users -->
        <div class="bg-white p-6 rounded-lg shadow-lg bg-opacity-80">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">Users List</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <div class='bg-gray-100 p-4 rounded-lg shadow-md'>
                            <h4 class='text-gray-700 font-semibold'>{$row['Username']}</h4>
                            <p class='text-gray-600'>Email: {$row['Email']}</p>
                            <p class='text-gray-600'>Age: {$row['Age']}</p>
                            <div class='mt-2'>
                                <a href='index.php?edit={$row['id']}' class='bg-yellow-500 text-white px-3 py-2 rounded'>Edit</a>
                                <a href='index.php?delete={$row['id']}' class='bg-red-500 text-white px-3 py-2 rounded' onclick=\"return confirm('Are you sure you want to delete this user?');\">Delete</a>
                            </div>
                        </div>";
                    }
                } else {
                    echo "<div>No users found</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script>
    // Open modal
    document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('userModal').classList.remove('hidden');
    });

    // Close modal
    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('userModal').classList.add('hidden');
    });

    // Close modal on click outside
    window.addEventListener('click', function(event) {
        if (event.target === document.getElementById('userModal')) {
            document.getElementById('userModal').classList.add('hidden');
        }
    });

    // Cancel button functionality
    document.getElementById('cancelModal').addEventListener('click', function() {
        document.getElementById('userModal').classList.add('hidden');
    });
</script>

</body>
</html>