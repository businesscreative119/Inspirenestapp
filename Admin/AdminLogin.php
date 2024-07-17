<?php
// Database connection

session_start(); // Start the session

// Set the session timeout to 30 seconds
ini_set('session.gc_maxlifetime', 30);
session_set_cookie_params(30);

// Function to check if session is expired
function is_session_expired() {
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 30)) {
        return true;
    }
    return false;
}

// Update the last activity time stamp
$_SESSION['last_activity'] = time();

// Destroy the session if it is expired
if (is_session_expired()) {
    session_unset();
    session_destroy();
}

$error_message = ""; // Initialize the error message variable

if(isset($_POST['submit'])){
    include("../Admin/php/config.php");
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $result = mysqli_query($con, "SELECT * FROM `Admin` WHERE Email='$email' AND Password='$password'") or die("Select Error");
    $row = mysqli_fetch_assoc($result);

    if(is_array($row) && !empty($row)){
        $_SESSION['valid'] = $row['Email'];
        $_SESSION['username'] = $row['Username'];
        $_SESSION['contact'] = $row['Contact'];
        $_SESSION['age'] = $row['Age'];
        $_SESSION['id'] = $row['Id'];
        if(isset($_SESSION['valid'])){
            header("Location: Home.php");
            exit(); // Ensure no further code is executed after redirection
        }
    }else{
        $error_message = "Invalid Email or Password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>AdminLogin</title>
</head>
<body>
    <div class="mt-0 w-full min-h-screen bg-zinc-300 flex items-center justify-center">
        <div class="w-full max-w-md bg-zinc-100 px-10 py-8 rounded-2xl shadow-md">
            <h1 class="text-3xl font-bold text-[#FF1D8D] text-center mb-6">InspireNest Admin</h1>
            <h1 class="text-lg text-center font-semibold text-zinc-700 mb-4">Login Account</h1>
            <?php
            if (!empty($error_message)) {
                echo '<p style="color:red; text-align: center; padding-bottom: 25px">' . $error_message . '</p>';
            }
            ?>
            <form action="AdminLogin.php" method="post">
                <input class="border-2 rounded-md w-full px-3 py-2 mb-4" type="email" name="email" id="email" placeholder="Email" required>
                <input class="border-2 rounded-md w-full px-3 py-2 mb-4" type="password" name="password" id="password" placeholder="Password" required>
                <input class="w-full px-3 py-2 bg-red-600 text-white rounded-full cursor-pointer hover:bg-red-700 transition-colors" type="submit" name="submit" value="Login">
                <p class="text-xs font-semibold text-zinc-700 mt-4 text-center">By logging in, you agree to our <a href="#" class="text-blue-500">Terms of Service</a> and acknowledge that you have read our <a href="#" class="text-blue-500">Privacy Policy</a>.</p>
            </form>
        </div>
    </div>
</body>
</html>
