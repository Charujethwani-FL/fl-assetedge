<?php

$secretKey = "6LcpmoUsAAAAAExXVchL4jhEgXzqM5m3tnp0Xb_R";

$token = $_POST['recaptcha_token'];

$url = "https://www.google.com/recaptcha/api/siteverify";

$data = [
    'secret' => $secretKey,
    'response' => $token
];

$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-type: application/x-www-form-urlencoded",
        'content' => http_build_query($data)
    ]
];

$context  = stream_context_create($options);

$result = file_get_contents($url, false, $context);

$response = json_decode($result);


if ($response->success && $response->score >= 0.5) {

} else {

    exit;

}

?> 