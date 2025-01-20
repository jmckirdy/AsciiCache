<?php
// Define an array of image URLs
$images = [
    "./scpgif/01_chicken.gif",
    "./scpgif/02_bounce.gif"
];

// Randomly select an image
$selectedImage = $images[array_rand($images)];

// Return the image URL as a JSON response
echo json_encode(['image' => $selectedImage]);

