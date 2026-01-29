<?php
$url = "https://dummyjson.com/products";

$response = file_get_contents($url);

if ($response === false) {
    die("API call failed. Check internet or DNS.");
}

$data = json_decode($response, true);

if (!isset($data['products'])) {
    die("Invalid API response");
}



