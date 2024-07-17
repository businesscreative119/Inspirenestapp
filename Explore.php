<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pinterest Clone</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .grid-cols-auto {
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Main Container -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Header Section -->
    <header class="text-center mb-10">
      <h1 class="text-4xl font-bold">Explore the best of inspireNest</h1>
    </header>

    <!-- Categories Section -->
    <section class="mb-10">
      <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class="relative">
          <img src="https://via.placeholder.com/300" alt="Category Image" class="w-full h-48 object-cover rounded-lg">
          <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg">
            <span class="text-white text-xl font-semibold">Shipping Container House</span>
          </div>
        </div>
        <!-- Add more category items as needed -->
      </div>
    </section>

    <!-- Interests Section -->
    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4">Discover interests</h2>
      <div class="grid grid-cols-auto gap-4">
        <div class="relative">
          <img src="https://via.placeholder.com/150" alt="Interest Image" class="w-full h-32 object-cover rounded-lg">
          <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg">
            <span class="text-white text-lg font-semibold">Animals</span>
          </div>
        </div>
        <!-- Add more interest items as needed -->
      </div>
    </section>

    <!-- Popular Ideas Section -->
    <section>
      <h2 class="text-2xl font-semibold mb-4">Explore popular ideas</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
        <div class="bg-white p-4 rounded-lg shadow-md">
          <img src="https://via.placeholder.com/200" alt="Idea Image" class="w-full h-32 object-cover rounded-lg mb-2">
          <p class="text-sm font-medium">Matching Best Friend Hoodies</p>
        </div>
        <!-- Add more popular idea items as needed -->
      </div>
    </section>

  </div>
  <script>
    document.addEventListener('scroll', () => {
  if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
    // Load more content
  }
});
  </script>
  <!-- Tailwind CSS Script -->
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
