
<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://elements.envato.com/');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/116.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Cookie: elements.session.5=Fe26.2*0*ffdd5572db9b0bc9599f5408aeaefbd53bda9e0425c2b2b7a93c4fe1f8b8653c*xRJUtX6X3lBW_JbrnFU_Bw*fUsmOyaj0YjrE7kPeOhsbprX9mmQlOw5dHFiWnTWCqX2ZUxRhAh278aROtJ6YSiiRUws-JGAwq2y0VpqKRfaAc1XA127th_hcN0ZURv6UfdPKSYChDDSnTXx6weWni-MhsnpS_iEaAz3mEgnIeYuQjmkatnGKn4QbpofBruRais*1697311994122*3358059d254e69e48580fc8fc816d429996eee7d83b72e49cf365c9c230c2b7e*i8pZgfD49FHyfmmBX_KhMJjbKsTTDfoueI90LuBkTxU~2; _elements_session_4=T3Q3Z0R3NGVEUW51eEV4ckZNdkR3YmFtcllZaXJkM3R5aHJiNWNtMjgzVDV1Smh4RjUyZmxsWXBQU1REYzlBaE5kbVVZV1dLL2dKelFaMXE3L0ZXanFXR1NzT1RTWXpocCszL1NzMFYrTWdxRUhQamtwc3E1LzN6VjZIUWJ6R1FGZThNS0JJVVNaZENPdFQ0TXRxTlBNRW4vQk1tR3I4TG1idjJ0bk43czNOY0s2MEU3Mk9UYXVvWCsyc0U0b09sRUx5WDNGY0MrT1ZicGZvMFlBc1hvM0MrR2RWRHJjUkVGOU5vb0dveVdvVGk1Q2t6TWt4SWlSTEZoWGlLa1M4anhTa0hYT0lyYmRCenJ1aVhqYnQxMUVTQ2NWOGR3Zm0zMzY4RTlodGlRbXdVNFp4RG0wMEJMNGhkUks4OURkb1Z2YnNvbnQxeno2bk5GaFczYjlPVm9zK01CQXFDQXZ0aGhxQTJGdkxsS3R2QVJ0L3VUNVpYUklmVFh0RjVzTWVRcW5ZNThGeTdNbFV4eEkrcWQ5Nmhodz09LS1rbldTMU9vUTZMTzhCc0dTOStGdHVBPT0^%^3D--f07c3b566db59fd0375d2c57feca4ee0dcbc4d64; __cf_bm=fP7XOGsZAVkJIkwaKgf3RMeM_LGvlaGuASR1a9MgIRI-1696102051-0-AWa3YXDamNJrXSePaCU/QfJDuayHKkDdwyhSqNum4LSCuaguTDvU5doA+Xsm66yJPBnSKgIaMv9GY/uSmHJejTo=; CookieConsent={stamp:^%^27-1^%^27^%^2Cnecessary:true^%^2Cpreferences:true^%^2Cstatistics:true^%^2Cmarketing:true^%^2Cmethod:^%^27implied^%^27^%^2Cver:1^%^2Cutc:1696102054665^%^2Cregion:^%^27BD^%^27}; original_landing_page_url=https://elements.envato.com/; GO_EXP_STOREFRONT=acDRkPbsSg6ejqGlTTHslg=0&512f222f-a9b5-401e-88e9-ec32db4407e9=0&81a51c79-9ad5-4cf3-a786-cd99e99009fd=1; _ga=GA1.1.1353634284.1696102056; _gid=GA1.2.1572402428.1696102056; _gcl_au=1.1.662739649.1696102056; __cf_bm=QsD_C6YO8J9Z3aTFEFQEEWVzoN4Sq8DPzA6pCqwYsEA-1696102055-0-AQkFUHl2kk0CSvpGyCn+rY1On4L5v8p0dLGukQPQUMdRsWaELuRSGYzHEUWa/MOKYnx2R3TVDHQwhtJ+OzGS+PA=; _pin_unauth=dWlkPU5tTXlObVkxTWpBdE9ESmpPUzAwTnpSa0xXRXlOakl0WVdWbU9EZGlZMlEyTVRjeQ; _ga_SFZC8HJ4D7=GS1.1.1696102057.1.1.1696102395.0.0.0; _fbp=fb.1.1696102058816.1044673701; g_state={\"i_p\"\":1696109277209,\"\"i_l\"\":1};';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: none';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Te: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

<<<<<<< HEAD
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else{
    echo "it works" ;
}
curl_close($ch);
=======
//$result = curl_exec($ch);
//if (curl_errno($ch)) {
//echo 'Error:' . curl_error($ch);
//}else{
//    echo "works";
//}
//curl_close($ch);

curl_exec($ch);
curl_close($ch);


>>>>>>> b1fc3efef1efa73eaa58d76db4fb2d29e4038279
