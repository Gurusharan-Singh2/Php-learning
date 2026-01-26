<?php
$file = 'contacts.json';
$contacts = [];

if (file_exists($file)) {
  $contacts = json_decode(file_get_contents($file), true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Admin - Contacts</title>
</head>
<body class="bg-slate-950 text-white px-4">

<h1 class="text-3xl text-red-500 font-bold mt-10 mb-6 text-center">
  Contact Messages
</h1>

<div class="max-w-5xl mx-auto space-y-4">

<?php if (empty($contacts)) { ?>
  <p class="text-center text-gray-400">No messages yet.</p>
<?php } ?>

<?php foreach ($contacts as $contact) { ?>
  <div class="bg-slate-800 p-5 rounded shadow">
    <div class="flex justify-between">
      <h2 class="font-bold text-lg"><?php echo htmlspecialchars($contact['name']); ?></h2>
      <span class="text-gray-400 text-sm"><?php echo $contact['date']; ?></span>
    </div>

    <p class="text-gray-300"><?php echo htmlspecialchars($contact['email']); ?></p>
    <p class="mt-2"><?php echo htmlspecialchars($contact['message']); ?></p>
  </div>
<?php } ?>

</div>

</body>
</html>
