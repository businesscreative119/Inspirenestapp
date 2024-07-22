<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .category-card, .interest-card, .idea-card {
      position: relative;
    }
    .category-card img, .interest-card img, .idea-card img {
      border-radius: 0.5rem;
    }
    .category-overlay, .interest-overlay {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(0, 0, 0, 0.4);
      border-radius: 0.5rem;
    }
    .category-text, .interest-text {
      color: white;
      font-size: 1.25rem;
      font-weight: 600;
    }
  </style>
</head>
<body class="bg-gray-100">
<?php include "Navbar/Nav.php"; ?>
  <!-- Main Container -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Header Section -->
    <header class="text-center mb-10">
      <h1 class="text-4xl  font-bold">Explore the best of inspireNest</h1>
    </header>

    <!-- Categories Section -->
    <section class="mb-10 items-center mr-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        <div class="category-card">
          <img src="https://cdn.pixabay.com/photo/2022/08/29/07/44/port-7418239_1280.jpg" alt="Shipping Container House" class="w-full h-48 object-cover">
          <div class="category-overlay">
            <div class="category-text">
              <p>Shipping Container House</p>
              <button class="mt-2 px-3 py-1 bg-white text-black rounded-full">View more</button>
            </div>
          </div>
        </div>
        <div class="category-card">
          <img src="https://cdn.pixabay.com/photo/2015/04/25/20/20/woman-739663_1280.jpg" alt="Nail Stamping" class="w-full h-48 object-cover">
          <div class="category-overlay">
            <div class="category-text">
              <p>Nail Stamping</p>
              <button class="mt-2 px-3 py-1 bg-white text-black rounded-full">Make</button>
            </div>
          </div>
        </div>
        <div class="category-card">
          <img src="https://cdn.pixabay.com/photo/2016/11/29/05/01/lights-1867437_1280.jpg" alt="Hanging Plants" class="w-full h-48 object-cover">
          <div class="category-overlay">
            <div class="category-text">
              <p>Hanging Plants</p>
              <button class="mt-2 px-3 py-1 bg-white text-black rounded-full">Try</button>
            </div>
          </div>
        </div>
        <!-- Add more category items as needed -->
      </div>
    </section>

    <!-- Interests Section -->
    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4">Discover interests</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4">
        <div class="interest-card">
          <img src="https://cdn.pixabay.com/photo/2024/03/01/16/25/costa-rica-8606850_1280.jpg" alt="Animals" class="w-full h-24 object-cover">
          <div class="interest-overlay">
            <p class="interest-text">Animals</p>
          </div>
        </div>
        <div class="interest-card">
          <img src="https://cdn.pixabay.com/photo/2018/01/31/09/57/coffee-3120750_1280.jpg" alt="Food And Drink" class="w-full h-24 object-cover">
          <div class="interest-overlay">
            <p class="interest-text">Food And Drink</p>
          </div>
        </div>
        <div class="interest-card">
          <img src="https://cdn.pixabay.com/photo/2021/08/31/11/58/woman-6588614_1280.jpg" alt="Art" class="w-full h-24 object-cover">
          <div class="interest-overlay">
            <p class="interest-text">Art</p>
          </div>
        </div>
        <div class="interest-card">
          <img src="https://cdn.pixabay.com/photo/2016/05/19/17/09/woman-1403418_1280.jpg" alt="Beauty" class="w-full h-24 object-cover">
          <div class="interest-overlay">
            <p class="interest-text">Beauty</p>
          </div>
        </div>
        <div class="interest-card">
          <img src="https://cdn.pixabay.com/photo/2023/03/11/12/26/gaiazoo-7844381_1280.jpg" alt="Design" class="w-full h-24 object-cover">
          <div class="interest-overlay">
            <p class="interest-text">Design</p>
          </div>
        </div>
        <div class="interest-card">
          <img src="https://cdn.pixabay.com/photo/2016/11/19/10/01/art-1838414_1280.jpg" alt="DIY And Crafts" class="w-full h-24 object-cover">
          <div class="interest-overlay">
            <p class="interest-text">DIY And Crafts</p>
          </div>
        </div>
        <!-- Add more interest items as needed -->
      </div>
    </section>

    <!-- Popular Ideas Section -->
    <section>
      <h2 class="text-2xl font-semibold mb-4">Explore popular ideas</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4">
        <div class="idea-card bg-white p-4 rounded-lg shadow-md">
          <img src="https://i.pinimg.com/564x/03/13/93/031393d5e8cbf4462579e97062a1e4d6.jpg" alt="Matching Best Friend Hoodies" class="w-full h-32 object-cover mb-2">
          <p class="text-sm font-medium">Matching Best Friend Hoodies</p>
        </div>
        <div class="idea-card bg-white p-4 rounded-lg shadow-md">
          <img src="https://i.pinimg.com/564x/60/27/d5/6027d54db0c64db49cf30e0ffb42b8be.jpg" alt="Drive Safe Keychain" class="w-full h-32 object-cover mb-2">
          <p class="text-sm font-medium">Drive Safe Keychain</p>
        </div>
        <div class="idea-card bg-white p-4 rounded-lg shadow-md">
          <img src="https://i.pinimg.com/564x/9b/f7/4c/9bf74cc8bbd979bd30a8a2587a72b159.jpg" alt="DIY Gift Ideas" class="w-full h-32 object-cover mb-2">
          <p class="text-sm font-medium">DIY Gift Ideas</p>
        </div>
        <div class="idea-card bg-white p-4 rounded-lg shadow-md">
          <img src="https://i.pinimg.com/564x/33/7d/4e/337d4e4ac6e2e4b558bf4f2b8a2c7ae3.jpg" alt="Gift Ideas For Boyfriends" class="w-full h-32 object-cover mb-2">
          <p class="text-sm font-medium">Gift Ideas For Boyfriends</p>
        </div>
        <div class="idea-card bg-white p-4 rounded-lg shadow-md">
          <img src="https://i.pinimg.com/564x/90/2f/66/902f66c40f4a56e8db9c1c1673e3a0e4.jpg" alt="Best Friend Ideas" class="w-full h-32 object-cover mb-2">
          <p class="text-sm font-medium">Best Friend Ideas</p>
        </div>
        <div class="idea-card bg-white p-4 rounded-lg shadow-md">
          <img src="https://i.pinimg.com/564x/5e/25/48/5e2548310e4a7f0d82669d205db5e964.jpg" alt="Roblox Dress" class="w-full h-32 object-cover mb-2">
          <p class="text-sm font-medium">Roblox Dress</p>
        </div>
        <!-- Add more popular idea items as needed -->
      </div>
    </section>

  </div>

  <!-- Tailwind CSS Script -->
  <script src="https://cdn.tailwindcss.com"></script>
  <?php include "footer.php"; ?>
</body>
</html>