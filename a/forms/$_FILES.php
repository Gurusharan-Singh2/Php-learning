<?php


$file=$_FILES['file'];

$uploadDir = __DIR__ . "/uploads/";


// if (!is_dir($uploadDir)) {
//     mkdir($uploadDir, 0777, true);
// }

// if (!isset($_FILES['file'])) {
//     die("No file selected");
// }


// mkdir($uploadDir, 0777, true);
// 🔹 0777 → permissions

// This defines who can read / write / execute the directory.

// Permission numbers

// Each digit = Owner | Group | Others

// Number	Meaning
// 4	Read
// 2	Write
// 1	Execute
// So:
// 7 = 4 + 2 + 1 = read + write + execute

// 0777 means:
// Owner   → read, write, execute
// Group   → read, write, execute
// Others  → read, write, execute


// ➡️ Full access for everyone

// ⚠️ The leading 0 means octal (base-8) — required in PHP.

// 🔹 Why execute (x) on a folder?

// On directories:

// Read → list files

// Write → create/delete files

// Execute → access the directory

// Without x, you can’t enter the folder.

// 🔹 true → recursive directory creation
// Without true
// mkdir("forms/uploads");


// ❌ Fails if forms does not exist

// With true
// mkdir("forms/uploads", 0777, true);


// ✅ Creates:

// forms/
// └── uploads/


// Just like:

// mkdir -p forms/uploads

// ✅ Common real-world values
// Permission	When to use
// 0777	Local dev, Docker, testing
// 0755	Production (recommended)
// 0700	Private directories
// 🔐 Production-safe example
// mkdir($uploadDir, 0755, true);

// 🧠 TL;DR
// mkdir($uploadDir, 0777, true);

// Part	Meaning
// 0777	Folder permissions
// true	Create parent folders if missing

if ($file){
  $name=$file['name'];
  $temp_path=$file['tmp_name'];
  $uploadPath=$uploadDir.$name;
  move_uploaded_file($temp_path,$uploadPath) || die("failed to upload");
  echo "uploaded successfully";
}else {
  die("File not found");
}

?>