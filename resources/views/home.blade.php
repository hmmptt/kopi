<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Coffee Toffee
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style> --}}
 </head>
 <body class="bg-gray-100">
  <!-- Navbar -->
  @include('navbar')
  

  <!-- Hero Section -->
  <section class="bg-cover bg-center h-screen" style="background-image: url('https://placehold.co/1920x1080');">
   <div class="container mx-auto h-full flex items-center justify-center">
    <div class="text-center text-white">
     <h1 class="text-5xl font-bold mb-4">
      Welcome to Coffee Toffee
     </h1>
     <p class="text-xl mb-8">
      The best coffee in town
     </p>
     <a class="bg-yellow-500 text-white px-6 py-3 rounded-full text-lg" href="#">
      Explore Menu
     </a>
    </div>
   </div>
  </section>


  <div class="carousel w-full">
    <div id="slide1" class="carousel-item relative w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
        class="w-full" />
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide4" class="btn btn-circle">❮</a>
        <a href="#slide2" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide2" class="carousel-item relative w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
        class="w-full" />
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide1" class="btn btn-circle">❮</a>
        <a href="#slide3" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide3" class="carousel-item relative w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
        class="w-full" />
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide2" class="btn btn-circle">❮</a>
        <a href="#slide4" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide4" class="carousel-item relative w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
        class="w-full" />
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide3" class="btn btn-circle">❮</a>
        <a href="#slide1" class="btn btn-circle">❯</a>
      </div>
    </div>
  </div>
  <!-- About Section -->
  <section class="py-16 bg-white">
   <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row items-center">
     <div class="md:w-1/2">
      <img alt="A cozy coffee shop interior with wooden furniture and warm lighting" class="rounded-lg shadow-lg" height="400" src="https://storage.googleapis.com/a1aa/image/vG78qkicTeSPYiN3Gf1JG9PN8AzlpqMhQJEmxZzArW74kOwTA.jpg" width="600"/>
     </div>
     <div class="md:w-1/2 md:pl-12 mt-8 md:mt-0">
      <h2 class="text-3xl font-bold mb-4">
       About Us
      </h2>
      <p class="text-gray-700 mb-4">
       At Coffee Toffee, we believe in serving the best coffee made from the finest beans. Our cozy atmosphere and friendly staff make it the perfect place to relax and enjoy a cup of coffee.
      </p>
      <a class="bg-yellow-500 text-white px-6 py-3 rounded-full text-lg" href="#">
       Learn More
      </a>
     </div>
    </div>
   </div>
  </section>
  <!-- Menu Section -->
  <section class="py-16 bg-gray-100">
   <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">
     Our Menu
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <img alt="A cup of espresso with a rich crema" class="w-full h-48 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/dpDK7XpHtKp9Bp5fT9nBtRVEvUBpHrwYamS2BoX5y9kdSH4JA.jpg" width="300"/>
      <h3 class="text-xl font-bold mb-2">
       Espresso
      </h3>
      <p class="text-gray-700 mb-4">
       A strong and rich coffee made by forcing hot water through finely-ground coffee beans.
      </p>
      <p class="text-yellow-500 font-bold">
       $3.00
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <img alt="A cup of cappuccino with a frothy milk foam" class="w-full h-48 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/SmYFBF2KUeWLVyhHd97S0r7dfeZoTpfwXxkjVfQ4XvLWn0BeE.jpg" width="300"/>
      <h3 class="text-xl font-bold mb-2">
       Cappuccino
      </h3>
      <p class="text-gray-700 mb-4">
       A classic coffee drink made with espresso, steamed milk, and topped with frothy milk foam.
      </p>
      <p class="text-yellow-500 font-bold">
       $4.00
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <img alt="A cup of latte with a beautiful latte art" class="w-full h-48 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/zFv8jfXBvP3ra6s4l5pJWNWE4hVR9VlR1SFmPgJQ9ERfkOwTA.jpg" width="300"/>
      <h3 class="text-xl font-bold mb-2">
       Latte
      </h3>
      <p class="text-gray-700 mb-4">
       A smooth and creamy coffee made with espresso and steamed milk, often topped with latte art.
      </p>
      <p class="text-yellow-500 font-bold">
       $4.50
      </p>
     </div>
    </div>
   </div>
  </section>
  <!-- Contact Section -->
  <section class="py-16 bg-white">
   <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">
     Contact Us
    </h2>
    <div class="flex flex-col md:flex-row items-center">
     <div class="md:w-1/2">
      <img alt="A map showing the location of the coffee shop" class="rounded-lg shadow-lg" height="400" src="https://storage.googleapis.com/a1aa/image/Rp9N4TnkMWJBNxiExqTsqLYlpTVd1UqMtlWH2t2PXxNPpD8E.jpg" width="600"/>
     </div>
     <div class="md:w-1/2 md:pl-12 mt-8 md:mt-0">
      <h3 class="text-xl font-bold mb-4">
       Get in Touch
      </h3>
      <p class="text-gray-700 mb-4">
       We'd love to hear from you! Whether you have a question about our menu, want to provide feedback, or just want to say hello, feel free to reach out to us.
      </p>
      <form action="#" class="space-y-4" method="POST">
       <div>
        <label class="block text-gray-700" for="name">
         Name
        </label>
        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" id="name" name="name" type="text"/>
       </div>
       <div>
        <label class="block text-gray-700" for="email">
         Email
        </label>
        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" id="email" name="email" type="email"/>
       </div>
       <div>
        <label class="block text-gray-700" for="message">
         Message
        </label>
        <textarea class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" id="message" name="message" rows="4"></textarea>
       </div>
       <button class="bg-yellow-500 text-white px-6 py-3 rounded-full text-lg" type="submit">
        Send Message
       </button>
      </form>
     </div>
    </div>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-8">
   <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row justify-between items-center">
     <p class="text-center md:text-left mb-4 md:mb-0">
      © 2023 Coffee Toffee. All rights reserved.
     </p>
     <div class="flex space-x-4">
      <a class="text-white hover:text-yellow-500" href="#">
       <i class="fab fa-facebook-f">
       </i>
      </a>
      <a class="text-white hover:text-yellow-500" href="#">
       <i class="fab fa-twitter">
       </i>
      </a>
      <a class="text-white hover:text-yellow-500" href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
     </div>
    </div>
   </div>
  </footer>
 </body>
</html>
