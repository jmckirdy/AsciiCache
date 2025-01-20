<?php
// Define an array of image URLs
$images = [
    "image1.jpg",
    "image2.jpg",
    "image3.jpg",
    "image4.jpg"
];

// Randomly select an image
$selectedImage = $images[array_rand($images)];

// Return the image URL as a JSON response
echo json_encode(['image' => $selectedImage]);

