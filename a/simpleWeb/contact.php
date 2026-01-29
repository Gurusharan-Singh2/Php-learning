<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Contact Us</title>


</head>
<body class="bg-slate-950 text-white px-4">

<?php include_once("header.php"); ?>

<section class="max-w-xl mx-auto mt-16 bg-slate-800 p-6 rounded-xl shadow">
  <h1 class="text-3xl font-bold text-red-500 mb-6 text-center">Contact Us</h1>

  <form action="submit_contact.php" method="POST" class="space-y-4">

    <input
      type="text"
      name="name"
      placeholder="Your Name"
      required
      class="w-full p-3 rounded bg-slate-700 outline-none"
    >

    <input
      type="email"
      name="email"
      placeholder="Your Email"
      required
      class="w-full p-3 rounded bg-slate-700 outline-none"
    >

    <textarea
      name="message"
      placeholder="Your Message"
      required
      rows="4"
      class="w-full p-3 rounded bg-slate-700 outline-none"
    ></textarea>

    <button
      type="submit"
      class="w-full bg-red-500 hover:bg-red-600 p-3 rounded font-semibold"
    >
      Send Message
    </button>

  </form>
</section>


<?php if (isset($_GET['success'])) { ?>
  <div id="toast"
       class="fixed top-6 right-6 bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg flex items-center gap-3 z-50
              transition-all duration-500 ease-out
              translate-x-10 opacity-0">
    <span>✅</span>
    <span class="font-semibold">Message sent successfully!</span>
  </div>

  <script>
    const toast = document.getElementById('toast');

    
    setTimeout(() => {
      toast.classList.remove('translate-x-10', 'opacity-0');
      toast.classList.add('translate-x-0', 'opacity-100');
    }, 100);

    
    setTimeout(() => {
      toast.classList.add('translate-x-10', 'opacity-0');
    }, 3000);

   
    setTimeout(() => {
      toast.remove();
    }, 3600);
  </script>
<?php } ?>


</body>
</html>
