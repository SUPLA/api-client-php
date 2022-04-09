<?php
require __DIR__ . '/api/vendor/autoload.php';

use Supla\ApiClient\Api\ChannelsApi;
use Supla\ApiClient\Model\ChannelFunctionEnumNames;

$token = 'Y2M5MTYwZjNmODRkNDJkZGVlMjZiZGY4M2RjNjhkN2UzMmJmODQ1MDg5NDQ5ODEzZDQ4YmQ2ZDllOGEyMDliZQ.aHR0cHM6Ly9zdnIzLnN1cGxhLm9yZw==';

$config = Supla\ApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken($token);

$apiInstance = new ChannelsApi(new GuzzleHttp\Client(), $config);

$channels = $apiInstance->getChannels([ChannelFunctionEnumNames::LIGHTSWITCH]);

var_dump($channels[1]->getCaption());
