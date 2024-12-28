<?php

// $endpoint = "https://www.vocabulary.com/dictionary/{$word}";

$word = "morning";
$endpoint = "https://www.vocabulary.com/dictionary/definition.ajax?search={$word}&lang=en&format=json";

// Initialize cURL session
$ch = curl_init($endpoint);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return data as a string
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects
curl_setopt($ch, CURLOPT_FAILONERROR, true); // Enable HTTP error reporting

// Set headers to mimic a browser
$headers = [
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
    "Accept: application/json", // Expect JSON response
    "Referer: https://www.vocabulary.com/", // Referer header
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Execute cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode === 200) {
        echo "Response: " . $response; // JSON response
    } else {
        echo "HTTP Error: " . $httpCode;
    }
}

// Close cURL session
curl_close($ch);


