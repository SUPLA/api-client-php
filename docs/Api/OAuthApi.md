# Supla\ApiClient\OAuthApi

Supla API Client

All URIs are relative to https://svr107.supla.org/api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**issueAccessToken()**](OAuthApi.md#issueAccessToken) | **POST** /oauth/v2/token | Issues an access token based on authorization_code or refresh_token. |


## `issueAccessToken()`

```php
issueAccessToken($accessTokenRequestBody): \Supla\ApiClient\Model\IssueAccessToken200Response
```

Issues an access token based on authorization_code or refresh_token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Supla\ApiClient\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessTokenRequestBody = new \Supla\ApiClient\Model\AccessTokenRequestBody(); // \Supla\ApiClient\Model\AccessTokenRequestBody

try {
    $result = $apiInstance->issueAccessToken($accessTokenRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->issueAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accessTokenRequestBody** | [**\Supla\ApiClient\Model\AccessTokenRequestBody**](../Model/AccessTokenRequestBody.md)|  | |

### Return type

[**\Supla\ApiClient\Model\IssueAccessToken200Response**](../Model/IssueAccessToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
