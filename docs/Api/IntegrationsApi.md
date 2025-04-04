# Supla\ApiClient\IntegrationsApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v3`, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMqttBrokerCredentials()**](IntegrationsApi.md#createMqttBrokerCredentials) | **POST** /integrations/mqtt-credentials | Creates MQTT Broker credentials for the OAuth Client. |


## `createMqttBrokerCredentials()`

```php
createMqttBrokerCredentials(): \Supla\ApiClient\Model\CreateMqttBrokerCredentials200Response
```

Creates MQTT Broker credentials for the OAuth Client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createMqttBrokerCredentials();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->createMqttBrokerCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Supla\ApiClient\Model\CreateMqttBrokerCredentials200Response**](../Model/CreateMqttBrokerCredentials200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
