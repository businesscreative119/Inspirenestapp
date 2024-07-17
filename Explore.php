<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pinterest Explore Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .card {
      transition: transform 0.3s ease-in-out;
    }
    .card:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body class="bg-gray-100 p-6">

  <div class="container mx-auto">
    <div id="card-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <?php
        // Simulated data fetching
        $pins = [
          ["id" => 1, "title" => "Title 1", "description" => "Description 1", "image" => "https://via.placeholder.com/300"],
          ["id" => 2, "title" => "Title 2", "description" => "Description 2", "image" => "https://via.placeholder.com/300"],
          // Add more pin objects as needed
        ];

        foreach ($pins as $pin) {
          echo '
          <div class="card bg-white rounded-lg shadow-md overflow-hidden">
            <img src="'.$pin["image"].'" alt="'.$pin["title"].'" class="w-full h-56 object-cover">
            <div class="p-4">
              <h2 class="text-lg font-semibold">'.$pin["title"].'</h2>
              <p class="text-gray-600">'.$pin["description"].'</p>
            </div>
          </div>';
        }
      ?>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script>
    // Animation
    gsap.from(".card", {
      duration: 1,
      opacity: 0,
      y: 30,
      stagger: 0.2,
      ease: "power3.out"
    });
  </script>

</body>
</html>
