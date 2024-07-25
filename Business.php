<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Page - InspireNest</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<?php include "Navbar/Nav.php"; ?>
    <div class="min-h-screen p-4 md:p-8">
        <div class="max-w-4xl mx-auto p-6 rounded-lg ">
            <h1 class="text-3xl font-bold mb-4 text-center">InspireNest Business</h1>
            <p class="text-gray-700 mb-6 text-center">Welcome to the InspireNest Business . We connect people through visual inspiration.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="flex items-center p-4 bg-gray-200 rounded-lg shadow-md">
                    <i class="fas fa-briefcase text-3xl text-indigo-500 mr-4"></i>
                    <div>
                        <h2 class="text-xl font-bold">Our Mission</h2>
                        <p class="text-gray-700">To inspire and connect people through creative visual content.</p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-gray-200 rounded-lg shadow-md">
                    <i class="fas fa-phone text-3xl text-green-500 mr-4"></i>
                    <div>
                        <h2 class="text-xl font-bold">Contact Us</h2>
                        <p class="text-gray-700">Phone: +91 7318036119</p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-gray-200 rounded-lg shadow-md">
                    <i class="fas fa-envelope text-3xl text-red-500 mr-4"></i>
                    <div>
                        <h2 class="text-xl font-bold">Email Us</h2>
                        <p class="text-gray-700">Email: support@inspirenest.com</p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-gray-200 rounded-lg shadow-md">
                    <i class="fas fa-map-marker-alt text-3xl text-blue-500 mr-4"></i>
                    <div>
                        <h2 class="text-xl font-bold">Our Location</h2>
                        <p class="text-gray-700">221202 InspireNest , Creativity City</p>
                    </div>
                </div>
            </div>

            <h2 class="text-2xl font-bold mb-4">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="p-4 bg-gray-200 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Content Creation</h3>
                    <p class="text-gray-700">We help you create visually appealing content that engages and inspires your audience.</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Brand Promotion</h3>
                    <p class="text-gray-700">Boost your brand's visibility with our tailored promotional strategies.</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Creative Consultation</h3>
                    <p class="text-gray-700">Get expert advice on how to enhance your creative projects and campaigns.</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Market Analysis</h3>
                    <p class="text-gray-700">Understand your market and audience with our comprehensive analysis services.</p>
                </div>
            </div>

            <h2 class="text-2xl font-bold mb-4">Meet Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="p-4 bg-gray-200 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="https://cdn.pixabay.com/photo/2017/06/09/23/22/avatar-2388584_1280.png" alt="Team Member 1" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h3 class="text-xl font-bold">Lucky Mishra</h3>
                            <p class="text-gray-700">CEO & Founder</p>
                        </div>
                    </div>
                    <p class="text-gray-700">John is the visionary behind InspireNest, leading the team with passion and creativity.</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="https://cdn.pixabay.com/photo/2017/06/09/23/22/avatar-2388584_1280.png" alt="Team Member 2" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h3 class="text-xl font-bold">Manibhadra Singh</h3>
                            <p class="text-gray-700">Chief Marketing Officer</p>
                        </div>
                    </div>
                    <p class="text-gray-700">Jane brings her extensive marketing experience to help promote and grow our brand.</p>
                </div>
            </div>

            <h2 class="text-2xl font-bold mb-4">Client Testimonials</h2>
            <div class="space-y-4">
                <div class="p-4 bg-gray-200 rounded-lg shadow-md">
                    <p class="text-gray-700 mb-2">"InspireNest has transformed our content strategy. Their creativity and dedication are unmatched!"</p>
                    <p class="text-gray-700 font-bold">- Client A</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg shadow-md">
                    <p class="text-gray-700 mb-2">"The team at InspireNest is fantastic. They understand our needs and deliver beyond expectations."</p>
                    <p class="text-gray-700 font-bold">- Client B</p>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
