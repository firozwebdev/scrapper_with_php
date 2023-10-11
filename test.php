<?php
//include "simple_html_dom.php";


function binToStr($input)
{
    if (!is_string($input))
        return false;
    return pack('H*', base_convert($input, 2, 16));
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://elements.envato.com/");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

//curl_exec($ch);
$result = binToStr(curl_exec($ch));
var_dump($result);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo "it works" ;
}
curl_close($ch);

//$html = new simple_html_dom();
//$html->load($response);
//
//foreach($html->find('a[href^=/url?]') as $link)
//    if (strpos($link->href, "webcache.google") === false)
//        echo $link->plaintext . "<br>";