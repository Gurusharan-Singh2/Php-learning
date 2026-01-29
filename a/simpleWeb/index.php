<?php
include_once('data.php');

function Product($product){
  return '
  <div class="w-full max-w-sm mx-auto bg-slate-800 rounded-xl shadow-lg overflow-hidden
              transition-transform duration-300 hover:scale-105">

    <img 
      src="'.$product['thumbnail'].'"
      alt="'.$product['title'].'"
      class="w-full h-48 sm:h-52 object-cover"
    >

    <div class="p-4 space-y-2">
      <h2 class="text-lg sm:text-xl font-bold text-white">
        '.$product['title'].'
      </h2>

      <p class="text-gray-400 text-sm line-clamp-2">
        '.$product['description'].'
      </p>

      <div class="flex justify-between items-center mt-3">
        <span class="text-green-400 font-bold text-lg">
          $'.$product['price'].'
        </span>

        <button class="bg-red-500 hover:bg-red-600 px-4 py-1 rounded text-sm font-semibold transition">
          Buy Now
        </button>
      </div>
    </div>
  </div>
  ';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Home</title>
</head>

<body class="w-screen bg-slate-950 text-white overflow-x-hidden">

<?php include_once("header.php"); ?>

<section class="w-full px-4 sm:px-6 md:px-8 py-6">

  <h1 class="text-2xl sm:text-3xl font-bold text-red-500 mb-6 text-center sm:text-left">
    All Products
  </h1>

  <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <?php foreach($data['products'] as $product){ echo Product($product); } ?>
  </div>

</section>

</body>
</html>
