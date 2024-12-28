<?php

// Download File using CURL
set_time_limit(0);
$url = 'https://images.unsplash.com/photo-1721332154161-847851ea188b';
// $url = 'https://plus.unsplash.com/premium_photo-1733514691599-d4a2eb3ca7ca';
$ch = curl_init($url);

$filePath = fopen("saveFileName2.jpg", "w");
// $filePath = fopen("download/saveFileName.jpg", "w");
curl_setopt($ch, CURLOPT_FILE, $filePath);


// Set cURL options
curl_setopt($ch, CURLOPT_FILE, $filePath); // Save the file to the specified location
curl_setopt($ch, CURLOPT_TIMEOUT, 50); // Timeout for the request
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects
curl_setopt($ch, CURLOPT_FAILONERROR, true); // Stop on HTTP errors

// Execute cURL request
if (curl_exec($ch)) {
    echo "File downloaded successfully!";
} else {
    echo "Error: " . curl_error($ch);
}

// Close the file and cURL
fclose($filePath);
curl_close($ch);
