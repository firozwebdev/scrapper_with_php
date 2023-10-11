<?php
// URL for login
$login_url = "https://elements.envato.com/sign-in";
// URL of the file to download after login
$file_url = "https://example.com/download/file.txt";
// Login credentials
$username = "wetubesabuz@gmail.com";
$password = "wetubesabuz1020301225";

// Initialize cURL session
$ch = curl_init();

// Set cURL options for login
curl_setopt($ch, CURLOPT_URL, $login_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=$username&password=$password");
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookies.txt"); // Save cookies to a file
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// Execute login request
$response = curl_exec($ch);

// Check if login was successful (you need to customize this check based on the response from the server)
if (strpos($response, "Login Successful") !== false) {
    // File download after successful login
    echo "login compelte";
    // Set cURL options for file download with authentication cookies
    //curl_setopt($ch, CURLOPT_URL, $file_url);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookies.txt"); // Use cookies from the file
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    echo "cookie saved";
    // Execute file download request
    $file_data = curl_exec($ch);

    // Save the file data to a local file
    //file_put_contents("downloaded_file.txt", $file_data);

    echo "File downloaded successfully!";
} else {
    echo "Login failed!";
}

// Close cURL session
curl_close($ch);

