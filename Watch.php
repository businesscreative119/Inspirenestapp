<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Watch</title>
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
    .animate {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.7s ease-out;
      }

      .animate-show {
        opacity: 1;
        transform: translateY(0);
      }
  </style>
</head>
<body>
<?php include "Navbar/Nav.php"; ?>
     <!-- Image grid -->
     <div class="flex justify-center space-x-4 overflow-x-auto px-4">
     <!-- Example Image Cards -->
     <div id="section1" class="flex flex-col space-y-4 ">
        <div class="w-40 h-56 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://images.unsplash.com/photo-1573548500833-02035bc24fb6?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://plus.unsplash.com/premium_photo-1691854353831-bcc01370de49?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-32 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://plus.unsplash.com/premium_photo-1701192455496-a095e6e5f792?q=80&w=2400&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      </div>
      <div id="section2" class="flex flex-col space-y-4 mt-20">
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://images.unsplash.com/photo-1710398866835-4c4ce11fe997?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-56 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://plus.unsplash.com/premium_photo-1673716791347-adb8336e72fb?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://images.unsplash.com/photo-1721417264655-2ccbf19152c6?q=80&w=2730&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      </div>
      <div id="section3" class="flex flex-col space-y-4 mt-32">
        <div class="w-40 h-32 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://images.unsplash.com/photo-1719937050792-a6a15d899281?q=80&w=2396&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://images.unsplash.com/photo-1721382487676-f63a96b68281?q=80&w=2499&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-56 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://images.unsplash.com/photo-1721297014055-c62b769944c2?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      </div>
      <div id="section4" class="flex flex-col space-y-4  mt-20">
        <div class="w-40 h-32 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://images.unsplash.com/photo-1721297013620-0f98628bbe98?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://images.unsplash.com/photo-1721153225946-4b8e0b2b1af6?q=80&w=2728&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-56 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://images.unsplash.com/photo-1721207106230-f0284889cc07?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      </div>
      <div id="section5" class="flex flex-col space-y-4 ">
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://plus.unsplash.com/premium_photo-1700830647950-6bba9ca2a957?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-56 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://images.unsplash.com/photo-1721265250433-3e478e48f0f7?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="w-40 h-40 bg-cover bg-center rounded-lg image-card animate" style="background-image: url('https://images.unsplash.com/photo-1721116858340-d955652c2fc8?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      </div>


<?php include "footer.php"; ?>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
      threshold: 0.2
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