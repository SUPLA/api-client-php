# Swagger\Client\ServerApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServerInfo**](ServerApi.md#getServerInfo) | **GET** /server-info | Get server info
[**getSuplaServerStatus**](ServerApi.md#getSuplaServerStatus) | **GET** /server-status | Get the SUPLA Server status


# **getServerInfo**

Get server info

### Example
```php
$result = $client->server()->getServerInfo();
print_r($result);
```



### Return type

[**\Swagger\Client\Model\ServerInfo**](../Model/ServerInfo.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSuplaServerStatus**

Get the SUPLA Server status

### Example
```php
$client->server()->getSuplaServerStatus();
```



### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

