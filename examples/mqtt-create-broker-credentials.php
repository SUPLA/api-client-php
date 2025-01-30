<?php
/**
 * This script demonstrates issue credentials for MQTT client for the client app.
 *
 * You need to get the Access Token first with the OAuth flow (see examples/oauth-flow.php).
 *
 * Required scopes: mqtt_broker
 *
 * Run this script with the following command
 * php mqtt-create-broker-credentials.php
 */

const ACCESS_TOKEN = '<YOUR_ACCESS_TOKEN>';

require_once(__DIR__ . '/vendor/autoload.php');

use Supla\ApiClient\Api\IntegrationsApi;

$integrationsApi = new IntegrationsApi();
$integrationsApi->getConfig()->setAccessToken(ACCESS_TOKEN);

try {
    $result = $integrationsApi->createMqttBrokerCredentials();
    echo json_encode($result, JSON_PRETTY_PRINT);
} catch (Exception $e) {
    echo 'Exception when calling SUPLA API: ', $e->getMessage(), PHP_EOL;
}
