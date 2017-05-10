<?php
$access_token = 'D7nz4mwjbGpPGmTf2dd5tX0mKnPg7IIFFynqGATPQKY6/iXWM80irc+7y3zmYIHVieDrEP4Y3qPy96qJDk9uFYv4Sn7XIT1VJUN0JPnpA7L8kyCAmeeDOOIcjigePejHafsbVlRyC1R0MIU3nyhZNgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;