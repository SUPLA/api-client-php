<?php
/**
 * This script demonstrates how to get channels list from API.
 *
 * You need to get the Access Token first, either with the OAuth flow (see examples/oauth-flow.php) or use a personal
 * access token you can generate at https://cloud.supla.org/security/personal-access-tokens
 *
 * Required scopes: channels_r
 *
 * Run this script with the following command
 * php get-channels.php
 */

const ACCESS_TOKEN = '<YOUR_ACCESS_TOKEN>';

require_once(__DIR__ . '/vendor/autoload.php');

use Supla\ApiClient\Api\ChannelsApi;

$channelsApi = new ChannelsApi();
$channelsApi->getConfig()->setAccessToken(ACCESS_TOKEN);

try {
    $result = $channelsApi->getChannels();
    echo json_encode($result, JSON_PRETTY_PRINT);
} catch (Exception $e) {
    echo 'Exception when calling SUPLA API: ', $e->getMessage(), PHP_EOL;
}
