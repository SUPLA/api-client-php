# Swagger\Client\ClientAppsApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteClientApp**](ClientAppsApi.md#deleteClientApp) | **DELETE** /client-apps/{id} | Delete Client App
[**getClientApps**](ClientAppsApi.md#getClientApps) | **GET** /client-apps | Get client apps
[**updateClientApp**](ClientAppsApi.md#updateClientApp) | **PUT** /client-apps/{id} | Update client app


# **deleteClientApp**

Delete Client App

### Example
```php
$result = $client->clientApps()->deleteClientApp($id, $xAcceptVersion);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientApps**

Get client apps

### Example
```php
$result = $client->clientApps()->getClientApps($xAcceptVersion, $include);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\ClientApp[]**](../Model/ClientApp.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClientApp**

Update client app

### Example
```php
$result = $client->clientApps()->updateClientApp($id, $body, $xAcceptVersion);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body7**](../Model/Body7.md)|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\ClientApp**](../Model/ClientApp.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

