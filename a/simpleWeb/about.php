<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>About Us</title>
</head>
<body class="w-screen px-4 bg-slate-950 text-white">

 
  <?php include_once("header.php"); ?>

  
  <section class="w-full text-center py-16">
    <h1 class="text-4xl md:text-5xl font-extrabold text-red-500 mb-4">
      About Us
    </h1>
    <p class="text-gray-300 max-w-3xl mx-auto text-lg">
      We build modern, fast, and user-friendly web experiences using clean design and powerful technologies.
    </p>
  </section>

  
  <section class="max-w-5xl mx-auto py-12 grid grid-cols-1 md:grid-cols-2 gap-10">

    <div>
      <h2 class="text-2xl font-bold text-red-400 mb-4">
        Who We Are
      </h2>
      <p class="text-gray-300 leading-relaxed">
        MyBrand is a modern web-focused company dedicated to building beautiful and scalable digital products.
        We focus on performance, clean UI, and great user experience.
      </p>
    </div>

    <div>
      <h2 class="text-2xl font-bold text-red-400 mb-4">
        Our Mission
      </h2>
      <p class="text-gray-300 leading-relaxed">
        Our mission is to deliver high-quality solutions that help businesses grow and stand out in the digital world.
      </p>
    </div>

  </section>

 
  <section class="max-w-5xl mx-auto py-12 grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
    <div class="bg-slate-800 p-6 rounded-lg">
      <h3 class="text-3xl font-bold text-red-400">5+</h3>
      <p class="text-gray-400 mt-2">Years Experience</p>
    </div>
    <div class="bg-slate-800 p-6 rounded-lg">
      <h3 class="text-3xl font-bold text-red-400">100+</h3>
      <p class="text-gray-400 mt-2">Projects Completed</p>
    </div>
    <div class="bg-slate-800 p-6 rounded-lg">
      <h3 class="text-3xl font-bold text-red-400">50+</h3>
      <p class="text-gray-400 mt-2">Happy Clients</p>
    </div>
  </section>

  
  <section class="text-center py-16">
    <h2 class="text-3xl font-bold mb-4">Want to work with us?</h2>
    <a href="contact.php"
       class="inline-block bg-red-500 hover:bg-red-600 px-8 py-3 rounded-lg font-semibold transition">
      Contact Us
    </a>
  </section>

  
  <footer class="w-full bg-slate-900 text-gray-400 text-center py-6 mt-12">
    &copy; <?= date("Y") ?> MyBrand. All rights reserved.
  </footer>

</body>
</html>
