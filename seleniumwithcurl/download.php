<?php

require_once('vendor/autoload.php'); // Composer autoloader

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;

// Start a Selenium WebDriver session (make sure geckodriver is running)
$webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', \Facebook\WebDriver\Remote\DesiredCapabilities::firefox());

// Navigate to the page where the image is located
$webDriver->get('https://example.com/image_page');

// Locate the image element (you need to inspect the page to find the correct selector)
$imageElement = $webDriver->findElement(WebDriverBy::cssSelector('.image-class'));

// Get the image source URL
$imageUrl = $imageElement->getAttribute('src');

// Use cURL to download the image using the authenticated session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $imageUrl);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt'); // Use cookies from the saved file
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$imageData = curl_exec($ch);

// Save the image data to a file (e.g., 'downloaded_image.jpg')
file_put_contents('downloaded_image.jpg', $imageData);

echo 'Image downloaded successfully!';

// Close cURL session
curl_close($ch);

// Close the Selenium WebDriver session
$webDriver->quit();
