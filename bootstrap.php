<?php

use TightenCo\Jigsaw\Jigsaw;

$events->beforeBuild(function (Jigsaw $jigsaw) {
    $jigsaw->setConfig('brands', getImages('./source/_images/marcas/'));

    $products = json_decode(file_get_contents('source/_data/products.json'));

    $labels = ['first', 'second', 'third'];
    $labelIndex = 0;
    foreach ($products as $key => $value) {
        list($width, $height) = getimagesize("./source/_images/produtos/{$value->id}.png");

        $image = new stdClass();
        $image->width = $width;
        $image->height = $height;

        $products[$key]->image = $image;
        $products[$key]->label = $labels[$labelIndex];

        // Update label index
        $labelIndex = ($labelIndex + 1) % count($labels);
    }

    $jigsaw->setConfig('products', $products);
});

function getImages($directory) {
    $brands = [];
    foreach (scandir($directory) as $filename) {
        // Skip current and parent directory references
        if (in_array($filename, ['.', '..']))
            continue;

        $filePath = $directory . $filename;

        // Check if the file is a valid image
        if (is_file($filePath) && @getimagesize($filePath)) {
            list($width, $height) = getimagesize($filePath);

            $brand = new stdClass();
            $brand->filename = $filename;
            $brand->width = $width;
            $brand->height = $height;

            $brands[] = $brand;
        }
    }
    return $brands;
}