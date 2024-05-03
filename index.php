<?php

use Alfianizzah\Helpcode\Helper\StringHelper;


$jsonData = file_get_contents(__DIR__ . "/src/datasets/quotes.json");
if ($jsonData === false) {
    echo "Error reading JSON file";
} else {
    // Decode JSON data into associative array
    $data = json_decode($jsonData, true); // Passing true as the second parameter

    // Check if decoding was successful
    if ($data === null) {
        echo "Error decoding JSON";
    } else {
        // Display the decoded JSON data
        var_dump($data[0]["quote"]);
    }
}
