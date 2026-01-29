<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $message = trim($_POST['message']);

  if (!$name || !$email || !$message) {
    die("All fields are required");
  }

  $file = 'contacts.json';

  
  if (!file_exists($file)) {
    file_put_contents($file, json_encode([]));
  }

  $existingData = json_decode(file_get_contents($file), true);

  $newEntry = [
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'date' => date("Y-m-d H:i:s")
  ];

  array_push($existingData, $newEntry);


  file_put_contents($file, json_encode($existingData, JSON_PRETTY_PRINT));

  header("Location: contact.php?success=1");
  exit;
}
