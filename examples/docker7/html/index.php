<?php

namespace EOT;

require '../vendor/autoload.php';

use EOT\Http\Request;
use EOT\Helpers\Util;

$eot = new Request([
    'base_url' => 'http://eot-nginx:8081',
    'secret_key' => 'My53cr3tKY',
    'session' => 'mySessionPHP',
    'token' => null
]);
$util = new Util();

# Function: Generated Token
# /api/:session/generate-token
$response = $eot->generateToken();
$response = $util->toArray($response);
if (isset($response['status']) and $response['status'] == 'success') :
    $eot->options['token'] = $response['token'];
endif;

#debug
$util->debug($response);


# Function: Start Session
# /api/:session/start-session
$response = $eot->startSession([
    'webhook' => 'http://eot-nginx:8080/webhook/index.php',
    'waitQrCode' => true
]);
$response = $util->toArray($response);

#debug
$util->debug($response);

# Function: Send Message
# /api/:session/send-message
$response = $eot->sendMessage([
    'phone' => '5500000000000',
    'message' => 'Opa, funciona mesmo!',
    'isGroup' => false
]);
$response = $util->toArray($response);

#debug
$util->debug($response);

# Function: Send File Base64
# /api/:session/send-file-base64
$response = $eot->sendFileBase64([
    'phone' => '5500000000000',
    'filename' => '',
    'base64' => $util->fileToBase64('eot.jpeg'),
    'isGroup' => false
]);
$response = $util->toArray($response);

#debug
$util->debug($response);

# Function: Send Status
# /api/:session/send-status
$response = $eot->sendStatus([
    'message' => 'Mando o Status',
    'isGroup' => false
]);
$response = $util->toArray($response);

#debug
$util->debug($response);

# Function: Send Link Preview
# /api/:session/send-link-preview
$response = $eot->sendLinkPreview([
    'phone' => '5500000000000',
    'url' => 'https://github.com/bgastaldi',
    'caption' => 'eotTeam',
    'isGroup' => false
]);
$response = $util->toArray($response);

#debug
$util->debug($response);

# Function: Send Location
# /api/:session/send-location
$response = $eot->sendLocation([
    'phone' => '5500000000000',
    'lat' => '-22.282027',
    'lng' => '-48.1280803',
    'title' => 'Cidade de Brotas',
    'isGroup' => false
]);
$response = $util->toArray($response);

#debug
$util->debug($response);
