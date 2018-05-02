# Swagger\Client\UsersApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**editCurrentUser**](UsersApi.md#editCurrentUser) | **PATCH** /users/current | Edit current user
[**getCurrentUser**](UsersApi.md#getCurrentUser) | **GET** /users/current | Get current user


# **editCurrentUser**

Edit current user

### Example
```php
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 
$result = $client->users()->editCurrentUser($body);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentUser**

Get current user

### Example
```php
$result = $client->users()->getCurrentUser();
print_r($result);
```



### Return type

[**\Swagger\Client\Model\UserRequest**](../Model/UserRequest.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

