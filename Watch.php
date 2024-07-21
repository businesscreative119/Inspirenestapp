<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InspireNest Watch</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-gray-800 text-white p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">InspireNest Watch</h1>
        <input type="text" placeholder="Search..." class="bg-gray-700 text-white rounded-md px-2 py-1">
    </header>
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            </div>
    </main>
    
    <script>
 const container = document.querySelector('.grid');
const pins = [
    {
        type: 'video',
        url: 'https://www.youtube.com/watch?v=coUY1kd8xFk', // Replace with a real video URL
        title: 'BOLD COLORS 12K HDR Video ULTRA HD 240 FPS - Dolby Vision',
        autoplay: true, // Set autoplay for videos
        muted: true, // Mute videos by default (optional)
    },
];

function createPin(pin) {
    const pinElement = document.createElement('div');
    pinElement.classList.add('w-full', 'rounded-lg', 'overflow-hidden', 'shadow-md');

    const contentElement = document.createElement('div');
    contentElement.classList.add('p-4');

    if (pin.type === 'image') {
        const imageElement = document.createElement('img');
        imageElement.classList.add('w-full', 'h-auto', 'object-cover');
        imageElement.src = pin.url;
        contentElement.appendChild(imageElement);
    } else if (pin.type === 'video') {
        const videoElement = document.createElement('video');
        videoElement.classList.add('w-full', 'h-auto');
        videoElement.src = pin.url;
        videoElement.autoplay = pin.autoplay;
        videoElement.muted = pin.muted; // Optional for muted videos

        // **Crucial for autoplay:**
        // Wait for the video metadata to be loaded before playing.
        // This ensures the video is ready and avoids potential errors.
        videoElement.addEventListener('loadedmetadata', () => {
            videoElement.play();
        });
    }

    const titleElement = document.createElement('h3');
    titleElement.classList.add('text-lg', 'font-medium', 'text-gray-800', 'mt-2');
    titleElement.textContent = pin.title;
    contentElement.appendChild(titleElement);

    pinElement.appendChild(contentElement);
    return pinElement;
}

pins.forEach(pin => {
    const pinElement = createPin(pin);
    container.appendChild(pinElement);
});

    </script>
</body>
</html>
