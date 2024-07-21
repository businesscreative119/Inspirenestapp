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
    </style>
    <style>
    /* Custom styles for shadow and other effects */
    .image-card {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .indicator-dot {
      height: 10px;
      width: 10px;
      margin: 0 4px;
      background-color: gray;
      border-radius: 50%;
      display: inline-block;
    }
    .active {
      background-color:#FF1D8D;
    }
  </style>
 
</head>
<body class=" text-white">
<?php include "Navbar/Nav.php"; ?>

<!-- Main container -->
<div class="container mx-auto text-center py-10">
    <!-- Headings -->
    <h1 class="text-4xl text-black font-bold mb-2">Discover your next</h1>
    <h2 class="text-3xl text-yellow-600 mb-10">1_Find inspiration for your next chai time snacks </h2>
    <h2 class="text-3xl text-yellow-600 mb-10">2_Explore new outfit inspirations</h2>
    
    <!-- Indicator -->
    <div class="flex justify-center mb-6">
      <span class="indicator-dot active"></span>
      <span class="indicator-dot"></span>
      <span class="indicator-dot"></span>
      <span class="indicator-dot"></span>
    </div>

    <!-- Image grid -->
    <div class="flex justify-center space-x-4 overflow-x-auto px-4">
      <!-- Example Image Cards -->
      <<div id="section1" class="flex flex-col space-y-4 animate">
        <div class="w-40 h-56 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://images.unsplash.com/photo-1573548500833-02035bc24fb6?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://plus.unsplash.com/premium_photo-1691854353831-bcc01370de49?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-32 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://plus.unsplash.com/premium_photo-1701192455496-a095e6e5f792?q=80&w=2400&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      </div>
      <div id="section2" class="flex flex-col space-y-4 animate">
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://images.unsplash.com/photo-1710398866835-4c4ce11fe997?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-56 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://plus.unsplash.com/premium_photo-1673716791347-adb8336e72fb?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://images.unsplash.com/photo-1721417264655-2ccbf19152c6?q=80&w=2730&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      </div>
      <div id="section3" class="flex flex-col space-y-4 animate">
        <div class="w-40 h-32 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://images.unsplash.com/photo-1719937050792-a6a15d899281?q=80&w=2396&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://images.unsplash.com/photo-1721382487676-f63a96b68281?q=80&w=2499&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-56 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://images.unsplash.com/photo-1721297014055-c62b769944c2?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      </div>
      <div id="section4" class="flex flex-col space-y-4 animate">
        <div class="w-40 h-32 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://images.unsplash.com/photo-1721297013620-0f98628bbe98?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://images.unsplash.com/photo-1721153225946-4b8e0b2b1af6?q=80&w=2728&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-56 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://images.unsplash.com/photo-1721207106230-f0284889cc07?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      </div>
      <div id="section5" class="flex flex-col space-y-4 animate">
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://plus.unsplash.com/premium_photo-1700830647950-6bba9ca2a957?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-56 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://images.unsplash.com/photo-1721265250433-3e478e48f0f7?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card" style="background-image: url('https://images.unsplash.com/photo-1721116858340-d955652c2fc8?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      </div>
    </div>
    
    
    <!-- Button -->
    <div class="mt-10">
      <button class="px-4 py-2 bg-yellow-600 text-white rounded-full">Here's how it works</button>
    </div>
  </div>



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

</body>
</html>
