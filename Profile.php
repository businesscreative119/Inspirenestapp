<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("php/config.php");
session_start();

if(!isset($_SESSION['valid'])){
    header("Location: Login.php");
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

$uploadMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['photo'])) {
    if ($_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photo = $_FILES['photo']['tmp_name'];
        $AboutName = $_FILES['photo']['name'];
        $photoData = addslashes(file_get_contents($photo));

        $sql = "INSERT INTO userdetails (ProfilePhoto, About) VALUES ('$photoData', '$AboutName')";

        if ($conn->query($sql) === TRUE) {
            $uploadMessage = "New record created successfully";
        } else {
            $uploadMessage = "Error: " . $conn->error;
            error_log("SQL Error: " . $conn->error); // Log error
        }
    } else {
        $uploadMessage = "Upload failed with error code: " . $_FILES['photo']['error'];
    }
}

$sql = "SELECT * FROM userdetails";
$result = $conn->query($sql);

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Change Profile</title>
</head>
<body>
<?php include "Navbar/LogoutNav.php"; ?>
    <div class="max-w-4xl mx-auto mt-10 p-4">
    <div class="bg-white shadow-md rounded-lg p-6">
        <form id="photoUploadForm" action="Profile.php" method="post" enctype="multipart/form-data">
            <input type="file" name="profilePhoto" id="profilePhotoInput" hidden>
            <input type="file" name="backgroundPhoto" id="backgroundPhotoInput" hidden>
        </form>
        <div class="relative">
            
            <img id="userProfileImage" src="https://cdn.pixabay.com/photo/2024/03/19/16/46/key-west-8643631_1280.jpg" alt="Profile Picture" class="w-full h-64 object-cover rounded-lg"/>
            <button id="profileUploadIcon" class="absolute bottom-4 right-4 text-white">
                <i class="fas fa-camera text-sm bg-black p-2 rounded-full"></i>
            </button>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-between mt-6">
            <div class="relative flex items-center">
                <div class="ml-0 md:ml-6 mt-4 md:mt-0">
                    <div class="relative">
                        <span id="backgroundUploadIcon" class="w-10 h-10 absolute bottom-0 right-0 rounded-full flex items-center justify-center bg-white cursor-pointer">
                            <i class="fa-solid fa-pencil"></i>
                        </span>
                        <div class="w-32 h-32 bg-zinc-200 rounded-full overflow-hidden">
                            <!-- images -->
                            <?php
                          if ($result->num_rows > 0) {
                           while($row = $result->fetch_assoc()) {
                           echo '<img src="data:image/jpeg;base64,'.base64_encode($row['ProfilePhoto']).'" alt="Photo" class="w-full h-full object-cover">';
                            echo '<p class="mt-2 text-center">'.$row['About'].'</p>';
                             }
                             } else {
                                    echo "<p>No photos uploaded yet.</p>";
                              }
                              ?>
                            <!-- <img class="w-full h-full object-cover" src="uploads/" alt="Background Picture"> -->
                        </div>
                    </div>
                </div>
                <div class="p-2 mt-4 md:mt-0 text-center md:text-left">
                    <h2 class="text-2xl font-semibold text-black">full name</h2>
                    <h3 class="text-sm text-black">hii</h3>
                </div>
            </div>
            <button id="editProfileButton" class="bg-black text-white px-4 py-2 rounded mt-4 md:mt-0">Edit</button>
        </div>
        <p class="mt-4">
            <h1 class="text-bold">About</h1>
            There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
        </p>
        <!-- Reviews Section -->
        <div class="mt-6">
            <h3 class="text-lg font-semibold">Rating & Reviews</h3>
            <div class="mt-2">
                <div class="bg-gray-50 p-4 rounded-lg shadow mb-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/50" alt="Annette Black" class="w-10 h-10 rounded-full mr-4">
                            <div>
                                <h4 class="font-semibold">Annette Black</h4>
                                <p class="text-gray-600">Student</p>
                            </div>
                        </div>
                        <div class="text-yellow-500">
                            <span class="text-xl font-bold">5.0</span>
                        </div>
                    </div>
                    <p class="mt-2">
                        There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg shadow mb-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/50" alt="Cody Fisher" class="w-10 h-10 rounded-full mr-4">
                            <div>
                                <h4 class="font-semibold">Cody Fisher</h4>
                                <p class="text-gray-600">Student</p>
                            </div>
                        </div>
                        <div class="text-yellow-500">
                            <span class="text-xl font-bold">5.0</span>
                        </div>
                    </div>
                    <p class="mt-2">
                        There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Popup -->

<div id="profileEditPopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
<div class="bg-gray-100 ">
    <div class="flex justify-end">
            <button id="profileCloseButton" class="bg-gray-300 text-gray-700 px-2 py-1 mt-8 rounded mr-2">X</button>
        </div>
    <div class=" p-8 rounded-lg  w-full mb-8 mt-8">
        <h1 class="text-2xl font-bold mb-4">Upload a Photo</h1>
        <?php if ($uploadMessage) { echo "<p class='text-green-500'>$uploadMessage</p>"; } ?>
        <form action="" method="POST" enctype="multipart/form-data" class="space-y-4">
            <div>
                <label class="block text-gray-700">Choose a photo:</label>
                <input type="file" name="photo" required class="border border-gray-300 p-2 w-full rounded-lg">
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-700">Upload</button>
        </form>
    </div>
    </div>
    </div>
<!-- Profile photo -->
<script>
    document.querySelector("#profileUploadIcon").addEventListener("click", function () {
        document.querySelector("#profilePhotoInput").click();
    });
    document.querySelector("#profilePhotoInput").addEventListener("change", function(){
        document.querySelector("#photoUploadForm").submit();
    });
</script>
<!-- Background photo -->
<script>
    document.querySelector("#backgroundUploadIcon").addEventListener("click", function () {
        document.querySelector("#backgroundPhotoInput").click();
    });
    document.querySelector("#backgroundPhotoInput").addEventListener("change", function(){
        document.querySelector("#photoUploadForm").submit();
    });
</script>

<!-- Edit popup functionality -->
<script>
    const editProfileButton = document.getElementById('editProfileButton');
    const profileEditPopup = document.getElementById('profileEditPopup');
    const profileCloseButton = document.getElementById('profileCloseButton');

    editProfileButton.addEventListener('click', () => {
        profileEditPopup.classList.remove('hidden');
    });

    profileCloseButton.addEventListener('click', () => {
        profileEditPopup.classList.add('hidden');
    });

    window.addEventListener('click', (event) => {
        if (event.target === profileEditPopup) {
            profileEditPopup.classList.add('hidden');
        }
    });
</script>
<?php include "footer.php"; ?>
</body>
</html>