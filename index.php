<?php
//include "simple_html_dom.php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://elements.envato.com/");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_exec($ch);
curl_close($ch);

//$html = new simple_html_dom();
//$html->load($response);
//
//foreach($html->find('a[href^=/url?]') as $link)
//    if (strpos($link->href, "webcache.google") === false)
//        echo $link->plaintext . "<br>";