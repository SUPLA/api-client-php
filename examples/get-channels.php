<?php

require_once(__DIR__ . '/vendor/autoload.php');

use Supla\ApiClient\Api\ChannelsApi;

// Get access token from OAuth flow or use a Personal Access Token
$accessToken = '<YOUR_ACCESS_TOKEN_HERE>';
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new ChannelsApi(new GuzzleHttp\Client(), $config);

try {
    $result = $apiInstance->getChannels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SUPLA API: ', $e->getMessage(), PHP_EOL;
}
