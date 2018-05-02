# Swagger\Client\UsersApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**editCurrentUser**](UsersApi.md#editCurrentUser) | **PATCH** /users/current | Edit current user
[**getCurrentUser**](UsersApi.md#getCurrentUser) | **GET** /users/current | Get current user


# **editCurrentUser**

Edit current user

### Example
```php
$result = $client->users()->editCurrentUser($body, $xAcceptVersion);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentUser**

Get current user

### Example
```php
$result = $client->users()->getCurrentUser($xAcceptVersion);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\UserRequest**](../Model/UserRequest.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

