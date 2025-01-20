
// THIS IS THE AJAX FILE.php


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Image Generator (AJAX)</title>
    <style>
        .hide {
            display: none;
        }
    </style>
    <script>
        function generateImage() {
            fetch('01_generate_image.php')
                .then(response => response.json())
                .then(data => {
                    const imageContainer = document.getElementById('imageContainer');
                    imageContainer.innerHTML = `<img src="${data.image}" alt="Random Image" style="max-width: 100%; height: auto;">`;
                    const button = document.getElementById('generateButton');
                    button.scrollIntoView({ behavior: "smooth" });
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</head>
<body>
    <h1>Random Image Generator</h1>
    <button id="generateButton" onclick="generateImage()">Generate Random Image</button>
    <div id="imageContainer"></div>
</body>
</html>


