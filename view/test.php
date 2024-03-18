<?php
// Define the PHP API endpoint URL
$api_url = 'your_php_api_endpoint.php';

// Make an HTTP request to the API endpoint
$response = file_get_contents($api_url);

// Check if the request was successful
if ($response !== false) {
    // Decode the JSON response
    $data = json_decode($response, true);

    // Check if the response is valid JSON
    if ($data !== null) {
        // Check if the API call was successful
        if ($data['success']) {
            // Get the array of products from the response data
            $products = $data['data'];
            // Loop through each product and display it
            foreach ($products as $product) {
                // Output HTML for each product
                echo '<div class="card" style="width: 18rem;">';
                echo '<img class="card-img-top" src="' . $product['image'] . '" alt="' . $product['title'] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product['title'] . '</h5>';
                echo '<a href="#" class="btn btn-primary">Go somewhere</a>';
                echo '</div></div>';
            }
        } else {
            // Handle API error
            echo 'API Error: ' . $data['message'];
        }
    } else {
        // Handle JSON decoding error
        echo 'Error decoding JSON response';
    }
} else {
    // Handle HTTP request error
    echo 'Error making HTTP request';
}
?>
