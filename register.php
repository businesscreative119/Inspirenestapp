<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SignUp</title>
</head>
<body>
        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button>";
         
         }
         }else{
         
        ?>
<?php include "Navbar/Nav.php"; ?>
<div class="w-full min-h-screen bg-zinc-300 flex items-center justify-center">
  <div class="w-full max-w-lg bg-zinc-100 px-10 py-8 rounded-2xl">
    <h1 class="text-3xl font-bold text-[#FF1D8D] text-center mb-6">InspireNest</h1>
    <h2 class="text-sm text-center font-semibold text-zinc-700 tracking-tight capitalize leading-tight mb-6">Create New Account</h2>
    <form action="registration.php" method="post">
      <input class="border-2 rounded-md block w-full px-3 py-2 mb-4 outline-none" type="text" name="username" id="username" placeholder="Username"  required>
      <input class="border-2 rounded-md block w-full px-3 py-2 mb-4 outline-none" type="email" name="email" id="email" placeholder="Email" required>
      <input class="border-2 rounded-md block w-full px-3 py-2 mb-4 outline-none" type="text" name="age" id="age" placeholder="Age" required>
      <input class="border-2 rounded-md block w-full px-3 py-2 mb-4 outline-none" type="number" name="Contact" placeholder="Contact" required>
      <input class="border-2 rounded-md block w-full px-3 py-2 mb-4 outline-none" type="password" name="password" id="password" placeholder="Password" required>
      <input class="block w-full px-3 py-2 bg-red-600 text-white rounded-full cursor-pointer" type="submit" name="submit" value="Sign In">
      <p class="text-xs font-semibold text-zinc-700 mt-6 text-center">By signing up, you agree to our <a href="#" class="underline">Terms of Service</a> and acknowledge you've read our <a href="#" class="underline">Privacy Policy</a>.</p>
      <a class="mt-6 block text-sm font-semibold text-center text-zinc-700" href="Login.php">Login Existing Account?</a>
    </form>
  </div>
  <?php } ?>
</div>
<?php include "footer.php"; ?>
</body>
</html>