<?php

require 'dirreader.php';

$images = dirReader('img');

if (!$images) {
    die('No images found');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Gallery</title>
</head>
<body class="bg-gray-200 p-4">

<div class="max-w-6xl mx-auto">
    <div class="item-center">
        <form action="" method="post" enctype="multipart/form-data" class="mb-4">
            <label for="image" class="block text-sm ">Upload Image</label>
            <input type="file" id="image" name="image" class="mt-1 p-2 border rounded-md">
            <button type="submit" class="mt-2 px-4 py-2 bg-gray-500 text-white rounded-md">Upload
            </button>
        </form>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 border-t border-gray-300 pt-3">
        <?php foreach ($images as $image) : ?>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="<?php echo $image ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
