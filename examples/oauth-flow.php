<?php
/**
 * This script demonstrates how to issue access token with the SUPLA API and an OAuth application.
 *
 * The first step is to create an OAuth application for your user account: https://cloud.supla.org/integrations/apps
 * Then configure the constants below to match your application. If your application is not public (i.e. you did not
 * pass the application registration flow), you need to set the CLOUD_URL to point your server instance, e.g. https://svr33.supla.org
 *
 * For the scopes available, consult the docs here: https://github.com/SUPLA/api-client-php?tab=readme-ov-file#oauth2
 *
 * If you request for the offline_access scope, the refresh token will be issued, too.
 *
 * Once you are ready with the configuration, run this script as a PHP server
 * and open http://localhost:8066 in the browser to continue.
 *
 * php -S localhost:8066 oauth-flow.php
 */

const CLOUD_URL = 'http://localhost:8008';
const CLIENT_ID = '3_CALLERzqczpc4wgk0oo4wsoss040k88sks4goc0osow4sk8cgc';
const CLIENT_SECRET = 'CALLERgd2oowo408gws84kwwo88k8ck8kwk4w0kccog444wocc';
const REDIRECT_URI = 'http://localhost:8066';
const SCOPE = 'mqtt_broker';

use Supla\ApiClient\Api\OAuthApi;
use Supla\ApiClient\Model\AccessTokenRequestBody;

require_once __DIR__ . '/vendor/autoload.php';

$loginLink = sprintf('%s/oauth/v2/auth?%s', CLOUD_URL, http_build_query([
    'client_id' => CLIENT_ID,
    'redirect_uri' => REDIRECT_URI,
    'scope' => SCOPE,
    'state' => 'some-state',
    'response_type' => 'code',
]));

if (isset($_GET['code'])) {
    $oauthApi = new OAuthApi();
    $oauthApi->getConfig()->setHost(CLOUD_URL);
    try {
        $accessTokenResponse = $oauthApi->issueAccessToken(new AccessTokenRequestBody([
            'grantType' => AccessTokenRequestBody::GRANT_TYPE_AUTHORIZATION_CODE,
            'clientId' => CLIENT_ID,
            'clientSecret' => CLIENT_SECRET,
            'redirectUri' => REDIRECT_URI,
            'code' => $_GET['code'],
        ]));
        echo '<pre><code>' . json_encode($accessTokenResponse->jsonSerialize(), JSON_PRETTY_PRINT) . '</code></pre>';
    } catch (\Supla\ApiClient\ApiException $e) {
        echo $e->getMessage();
    }
    echo '<br><br><a href="/">Try again</a>';
} else {
    echo "<a href=\"$loginLink\">Login with SUPLA OAuth</a>";
}
