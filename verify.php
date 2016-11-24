<?php
$access_token = '5Ilh/rWiLuchsqQ0c49KY9wmgSET5WY4XSa3eFoLLGH5CgIYrt8q3zEOMwegsS7zbJ6gkkZUGr6FRec4qkknJyCeZN6RA0BsMuTX7VuL4fsRyLhIQWobpXK2WfJ//IOBn5TPPW0vAc8b1iXR9gAJIgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
