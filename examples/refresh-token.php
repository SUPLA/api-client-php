<?php
/**
 * This script demonstrates how to issue new access token with a refresh token.
 *
 * The successful request will return both new access token and refresh token. The new refresh token should be used in
 * the next request.
 *
 * Run this script with the following command
 * php refresh-token.php
 */

const CLOUD_URL = 'https://cloud.supla.org';
const CLIENT_ID = '<YOUR_CLIENT_ID>';
const CLIENT_SECRET = '<YOUR_CLIENT_SECRET>';
const REFRESH_TOKEN = '<YOUR_REFRESH_TOKEN>';

use Supla\ApiClient\Api\OAuthApi;
use Supla\ApiClient\ApiException;
use Supla\ApiClient\Model\AccessTokenRequestBody;

require_once __DIR__ . '/vendor/autoload.php';

$oauthApi = new OAuthApi();
$oauthApi->getConfig()->setHost(CLOUD_URL);

try {
    $accessTokenResponse = $oauthApi->issueAccessToken(new AccessTokenRequestBody([
        'grantType' => AccessTokenRequestBody::GRANT_TYPE_REFRESH_TOKEN,
        'clientId' => CLIENT_ID,
        'clientSecret' => CLIENT_SECRET,
        'refreshToken' => REFRESH_TOKEN,
    ]));
    echo json_encode($accessTokenResponse->jsonSerialize(), JSON_PRETTY_PRINT);
} catch (ApiException $e) {
    echo $e->getMessage();
}
