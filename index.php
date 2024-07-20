<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InspireNest</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
      ::placeholder {
        text-align: left;
        text:white;
      }
      <style>
        .blur-image {
            filter: blur(5px);
        }

        .animate-text-up {
            animation: text-up 1s forwards;
        }

        @keyframes text-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
 
</head>
<body class="bg-gray-900 text-white">
<?php include "Navbar/Nav.php"; ?>

<!-- Header Section -->
<header class="text-center p-10 ">
    <h1 class="text-3xl md:text-4xl font-bold animate">Discover your next</h1>
    <p class="mt-4 text-sm md:text-base animate"> 1_Find inspiration for your next chai time snacks  , 2_Explore new outfit inspirations, 3_</p>
    <div class="mt-6">
        <button class="bg-[#FF1D8D] text-white font-bold py-2 px-4 rounded animate">Get Started</button>
    </div>
</header>


<div class="relative w-64 p-4 bg-white rounded-lg shadow-lg">
        <div id="images-container" class="absolute right-4 top-4 space-y-4"></div>
        <div id="texts-container" class="mt-4 text-gray-800 space-y-2"></div>
    </div>
    <script>
        const images = [
            { src: 'path-to-your-image1.jpg', text: 'First animated text' },
            { src: 'path-to-your-image2.jpg', text: 'Second animated text' },
            { src: 'path-to-your-image3.jpg', text: 'Third animated text' },
        ];

        const imagesContainer = document.getElementById('images-container');
        const textsContainer = document.getElementById('texts-container');

        function animateItems() {
            images.forEach((item, index) => {
                // Add image
                const img = document.createElement('img');
                img.src = item.src;
                img.alt = `Image ${index + 1}`;
                img.className = 'w-16 h-16 blur-image rounded-full';
                imagesContainer.appendChild(img);

                // Add text with animation
                const textDiv = document.createElement('div');
                textDiv.textContent = item.text;
                textDiv.className = 'animate-text-up';
                textDiv.style.animationDelay = `${index * 0.5}s`; // Delay for each text
                textsContainer.appendChild(textDiv);
            });
        }

        // Simulate a delay before showing the text animation
        setTimeout(animateItems, 1000);
    </script>


<!-- Trust Section -->
<section class="text-center mt-10 ">
    <p class="text-lg md:text-xl animate">+450,000 companies trust us</p>
    <div class="flex flex-col md:flex-row justify-center mt-4 space-y-4 md:space-y-0 md:space-x-8">
        <div class="mx-4 animate">
            <span class="text-xl md:text-2xl font-bold">4.7</span>
            <span class="block">On App Store</span>
        </div>
        <div class="mx-4 animate">
            <span class="text-xl md:text-2xl font-bold">4.5</span>
            <span class="block">On Play Store</span>
        </div>
        <div class="mx-4 animate">
            <span class="text-xl md:text-2xl font-bold">4.6</span>
            <span class="block">On Trustpilot</span>
        </div>
    </div>
</section>

<!-- first Advantages Section -->
<section class="mt-16 bg-[#FEFD97] p-6 md:p-10 ">
    <h2 class="text-2xl text-[#FF1D8D] md:text-3xl font-bold text-center">Search for an idea</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
        <div class="flex items-center">
            <div class="p-6 rounded-lg w-full animate">
                <img id="profileImage" src="https://images.unsplash.com/photo-1567629307995-b9f33097bd30?q=80&w=3174&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile Picture" class="w-full h-auto object-cover rounded-lg"/>
            </div>
        </div>
        <div class="flex items-center animate">
            <div class="p-6 rounded-lg w-full animate">
                <h1 class="animate text-3xl text-bold text-[#FF1D8D] text-center p-4">Search for an idea</h1>
                <div class="mt-6 relative w-full p-3">
                    <input type="text" placeholder=" Search here..." class="bg-[#900C3F] w-full p-2 rounded-full text-white pr-10 text-right outline-[#FF1D8D] outline-none">
                    <span class="absolute right-5 top-2/4 transform -translate-y-2/4 text-[#FF1D8D]">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <h3 class="animate text-lg text-[#FF1D8D] text-center md:text-xl font-semibold">What do you want to try next? Think of something you’re into – such as 'easy chicken dinner' – and see what you find.</h3>
                <div class="p-4 text-center m-8">
                    <button class="animate bg-[#FF1D8D] text-white rounded-full cursor-pointer p-4">EXPLORE</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->

<!-- Advantages Section -->
<section class="bg-[#E5FFF6] p-6 md:p-10 ">
    <h2 class="animate text-2xl text-[#FF1D8D] md:text-3xl font-bold text-center">Watch</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
        <div class="flex items-center">
            <div class="p-6 rounded-lg w-full">
                <h1 class="animate text-3xl text-[#FF1D8D] text-bold p-4 text-center">Save ideas you like</h1>
                <h3 class="animate text-lg text-[#FF1D8D] text-center md:text-xl font-semibold">Collect your favourites so you can get back to them later.</h3>
                <div class="p-4 text-center m-8">
                    <button class="animate bg-[#FF1D8D] text-white p-4 rounded-full">EXPLORE</button>
                </div>
            </div>
        </div>
        <div class="flex items-center animate">
            <div class="p-6 rounded-lg w-full">
                <img id="profileImage" src="https://cdn.pixabay.com/photo/2024/02/27/14/00/chrysanthemum-8600210_1280.jpg" alt="Profile Picture" class="w-full h-auto object-cover rounded-lg"/>
            </div>
        </div>
    </div>
</section>

<!-- third Advantages Section -->
<section class="bg-[#F7E1EA] p-6 md:p-10 ">
    <h2 class="animate text-2xl text-[#FF1D8D] md:text-3xl font-bold text-center">Watch</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
        <div class="flex items-center">
            <div class="p-6 rounded-lg w-full animate">
                <img id="profileImage" src="https://images.unsplash.com/photo-1643536768014-0756fa85ca4f?q=80&w=2976&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile Picture" class="w-full h-auto object-cover rounded-lg"/>
            </div>
        </div>
        <div class="flex items-center animate">
            <div class="p-6 rounded-lg w-full">
                <h1 class="animate text-3xl text-[#FF1D8D] text-bold p-4">See it, make it, try it, do it</h1>
                <h3 class="animate text-lg text-[#FF1D8D] md:text-xl font-semibold">The most exciting aspect of inspireNets is learning about new ideas and innovations from people across the globe.</h3>
                <div class="p-4 text-center m-8">
                    <button class="animate bg-[#FF1D8D] text-white p-4">EXPLORE</button>
                </div>
            </div>
        </div>
        <div class="flex items-center animate ">
            <div class="p-6 rounded-lg w-full">
                <h1 class="animate text-3xl text-[#FF1D8D] text-bold p-4">See it, make it, try it, do it</h1>
                <h3 class="animate text-lg text-[#FF1D8D] md:text-xl font-semibold">The most exciting aspect of inspireNets is learning about new ideas and innovations from people across the globe.</h3>
                <div class="p-4 text-center m-8">
                    <button class="animate bg-[#FF1D8D] text-white p-4">EXPLORE</button>
                </div>
            </div>
        </div>
        <div class="animate flex items-center">
            <div class="p-6 rounded-lg w-full animate">
                <img id="profileImage" src="https://cdn.pixabay.com/photo/2024/02/27/14/00/chrysanthemum-8600210_1280.jpg" alt="Profile Picture" class="w-full h-auto object-cover rounded-lg"/>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="mt-16 ">
    <h2 class="text-2xl md:text-3xl font-bold text-center animate">Elevate your idea</h2>
    <p class="text-center mt-4 text-sm md:text-base animate">Experience a community where creativity and innovation thrive.</p>
    <div class="animate grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10 px-6 md:px-10">
        <div class="bg-gray-800 p-6 rounded-lg text-center">
            <p class="italic text-sm md:text-base animate">"The experience was very conclusive and enjoyable, very efficient and pleasant."</p>
            <p class="mt-4 font-bold">Ayushi</p>
        </div>
        <div class=" animate bg-gray-800 p-6 rounded-lg text-center animate">
            <p class="italic text-sm md:text-base">"Personalized  and an outstanding product. Great design, but for collaboration, I highly recommend it."</p>
            <p class="mt-4 font-bold animate">Vikash kumar</p>
        </div>
        <div class="animate bg-gray-800 p-6 rounded-lg text-center animate">
            <p class="italic text-sm md:text-base animate">"I've been using it for months. It's a great addition to my Design toolkit, and the pricing plan is affordable."</p>
            <p class="mt-4 font-bold animate">Lucky Mishra</p>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="mt-16 bg-gray-800 p-6 md:p-10 rounded-lg text-center animate">
    <h2 class="animate ext-2xl md:text-3xl font-bold animate">Join InspireNest to bring your ideas to life</h2>
    <p class="animate mt-4 text-sm md:text-base animate">Sign up to get your ideas off the ground with InspireNest, where creativity meets community and innovation thrives.</p>
</section>
<?php include "footer.php"; ?>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-show');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    document.querySelectorAll('.animate').forEach(el => {
      observer.observe(el);
    });
  });
</script>

<script>
        const carousel = document.getElementById('carousel');
        const indicators = document.querySelectorAll('.indicator');
        let currentIndex = 0;

        function moveSlide(index) {
            carousel.style.transform = `translateX(-${index * 100}%)`;
            indicators[currentIndex].classList.remove('bg-gray-800');
            indicators[index].classList.add('bg-gray-800');
            currentIndex = index;
        }
    </script>
</body>
</html>
