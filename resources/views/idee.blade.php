<?php

$headers_auth = array('content-type' => 'application/json');
$query_auth = array('apiKey' => 'API_KEY', 'secret' => 'SECRET_KEY');
$body = Unirest\Request\Body::json($query_auth);
$response_auth = Unirest\Request::post('https://moneywave.herokuapp.com/v1/merchant/verify', $headers_auth, $body);
$headers = array('content-type' => 'application/json','Authorization'=>$response_auth->body->token);
$response = Unirest\Request::get('https://moneywave.herokuapp.com/v1/wallet', $headers);
print_r($response->body->data);