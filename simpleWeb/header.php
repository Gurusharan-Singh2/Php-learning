<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav class="w-full bg-slate-900 shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">

      
      <h2 class="text-red-500 font-extrabold text-3xl tracking-tight">
        MyBrand
      </h2>

      
      <div class="hidden md:flex space-x-8 text-white font-semibold">
        <?php 
        $menu = [
          'index.php' => 'Home',
          'about.php' => 'About',
          'contact.php' => 'Contact'
        ];

        foreach($menu as $url => $label): 
          $active = $currentPage === $url;
        ?>
          <a href="<?= $url ?>" 
             class="relative px-1 py-2 <?= $active ? 'text-red-400' : 'hover:text-red-400' ?>">
            <?= $label ?>
          
            <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-red-400 transition-all duration-300 <?= $active ? 'w-full' : '' ?>"></span>
          </a>
        <?php endforeach; ?>
      </div>

      
      <div class="md:hidden">
        <button id="mobile-menu-btn" class="text-white focus:outline-none">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

    </div>
  </div>


  <div id="mobile-menu" class="md:hidden hidden bg-slate-800">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <?php foreach($menu as $url => $label): 
        $active = $currentPage === $url;
      ?>
        <a href="<?= $url ?>" 
           class="block px-3 py-2 rounded-md text-base font-medium <?= $active ? 'text-red-400' : 'text-white hover:text-red-400' ?>">
          <?= $label ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</nav>


<script>
  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
