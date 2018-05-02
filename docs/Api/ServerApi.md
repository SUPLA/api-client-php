# Swagger\Client\ServerApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**serverInfoGet**](ServerApi.md#serverInfoGet) | **GET** /server-info | Get server status
[**serverStatusGet**](ServerApi.md#serverStatusGet) | **GET** /server-status | Get the SUPLA Server status


# **serverInfoGet**

Get server status

### Example
```php
$result = $client->server()->serverInfoGet();
print_r($result);
```



### Return type

[**\Swagger\Client\Model\ServerInfo**](../Model/ServerInfo.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serverStatusGet**

Get the SUPLA Server status

### Example
```php
$client->server()->serverStatusGet();
```



### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

