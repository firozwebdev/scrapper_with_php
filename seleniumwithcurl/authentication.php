<?php

//// URL of the login endpoint
//$loginUrl = 'https://elements.envato.com/sign-in';
//
//// Login credentials
//$username = 'wetubesabuz@gmail.com';
//$password = 'wetubesabuz1020301225';
//
//// cURL session for login
//$ch = curl_init();
//
//// Set cURL options for login
//curl_setopt($ch, CURLOPT_URL, $loginUrl);
//
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, [
//    'username' => $username,
//    'password' => $password
//]);
//curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt'); // Save cookies to a file
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//
//// Execute cURL session for login and store the response
//$response = curl_exec($ch);
//
//// Check if login was successful
//if (strpos($response, 'Welcome, ' . $username) !== false) {
//    echo 'Login successful!';
//} else {
//    echo 'Login failed!';
//}
//
//// Close cURL session
//curl_close($ch);


$loginUrl = 'https://elements.envato.com/sign-in';

// Login credentials
$username = 'wetubesabuz@gmail.com';
$password = 'wetubesabuz1020301225';

//init curl
$ch = curl_init();

//Set the URL to work with
curl_setopt($ch, CURLOPT_URL, $loginUrl);

// ENABLE HTTP POST
curl_setopt($ch, CURLOPT_POST, 1);

//Set the post parameters
curl_setopt($ch, CURLOPT_POSTFIELDS, 'user='.$username.'&pass='.$password);

//Handle cookies for the login
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');

//Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
//not to print out the results of its query.
//Instead, it will return the results as a string return value
//from curl_exec() instead of the usual true/false.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//execute the request (the login)
$store = curl_exec($ch);

//the login is now done and you can continue to get the
//protected content.

//set the URL to the protected file
//curl_setopt($ch, CURLOPT_URL, 'http://www.example.com/protected/download.zip');

//execute the request
$response = curl_exec($ch);

 //Check if login was successful
if (strpos($response, 'Welcome, ' . $username) !== false) {
    echo 'Login successful!';
} else {
    echo 'Login failed!';
}

print_r($response);

curl_close($ch);

//save the data to disk
//file_put_contents('~/download.zip', $content);