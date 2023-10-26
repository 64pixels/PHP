<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$data = array(
    array(
        'Name' => 'Trikse',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
    ),
    array(
        'Name' => 'Vardenis',
        'Element' => 'Air',
        'Likes' => 'Singing',
        'Color' => 'Blue'
    ),
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Jonas',
        'Color' => 'Pink'
    )
);

// Determine the maximum length of each column
$columnLengths = array();
foreach ($data as $item) {
    foreach ($item as $key => $value) {
        $columnLengths[$key] = max(strlen($key), $columnLengths[$key] ?? 0, strlen($value));
    }
}

// Print the table header
echo "+------------+-------+---------+---------+<br>";
foreach ($columnLengths as $key => $length) {
    echo "| ", str_pad($key, $length + 2, ' ');
}
echo "| <br>";
echo "+------------+-------+---------+---------+<br>";

// Print the data rows
foreach ($data as $item) {
    foreach ($columnLengths as $key => $length) {
        echo " | ",  str_pad($item[$key], $length + 2, ' ');
    }
    echo "| <br>";
}
echo "+------------+-------+---------+---------+";

?> 
</body>
</html>


