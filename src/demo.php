<?php

use Supla\ApiClient\SuplaApi;

require_once(__DIR__ . '/../vendor/autoload.php');

$api = new SuplaApi(
    'http://supla.local',
    '1_6cabrio4xdcsw8sk4socc04k00os4ssw88wc0kkws0g4ogkwgg',
    '54etn7d5ops0cooww80s0c8o88ssgkgsw4c4o8ks4wswgc0ww4',
    'api_1',
    'pass'
);

echo $api->channelGroups()->getChannelGroup(1)->getCaption();
