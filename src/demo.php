<?php
require_once(__DIR__ . '/../vendor/autoload.php');

//// Configure API key authorization: bearer
//$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
//// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
//// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
//// Configure OAuth2 access token for authorization: password
//$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
//
//$apiInstance = new Swagger\Client\Api\ChannelsApi(
//// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
//// This is optional, `GuzzleHttp\Client` will be used as default.
//    new GuzzleHttp\Client(),
//    $config
//);
//$x_accept_version = "x_accept_version_example"; // string | API Version
//$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
//$function = array("function_example"); // string[] |
//$io = "io_example"; // string | Return only `input` or `output` channels.
//$has_function = true; // bool | Return only channels with (`true`) or without (`false`) chosen functions.
//
//try {
//    $result = $apiInstance->getChannels($x_accept_version, $include, $function, $io, $has_function);
//    foreach ($result as $channel) {
//        $channel->getIodevice()->
//    }
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ChannelsApi->getChannels: ', $e->getMessage(), PHP_EOL;
//}


$api = new \SuplaApi\Client\SuplaApi(
    'http://supla.local',
    '1_6cabrio4xdcsw8sk4socc04k00os4ssw88wc0kkws0g4ogkwgg',
    '54etn7d5ops0cooww80s0c8o88ssgkgsw4c4o8ks4wswgc0ww4',
    'api_1',
    'pass'
);

$user = $api->users()->getCurrentUser();
echo $user->getEmail();
$api->users()->editCurrentUser(new \Swagger\Client\Model\Body(['action' => \Swagger\Client\Model\Body::ACTION_CHANGEPASSWORD]));
