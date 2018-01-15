<?php
$access_token = 'js3MQ3D7XX4/9LkBS0LZVEYclfKltKxlH7zbTuXtCSPOgIrci5x/VLl7CgGTyz4Dp6AgHTIj3GtyEEXxwQaJaGasvQGbb2HmbM98nu6K1cS0Pr0/VRgl7vAI5ARNMdwsb5qtTIXmaYXl5ssFtJoZUAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
