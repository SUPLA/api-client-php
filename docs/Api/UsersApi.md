# Swagger\Client\UsersApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrentUser**](UsersApi.md#getCurrentUser) | **GET** /users/current | Get current user
[**updateCurrentUser**](UsersApi.md#updateCurrentUser) | **PATCH** /users/current | Update current user


# **getCurrentUser**

Get current user

### Example
```php
$result = $client->users()->getCurrentUser();
print_r($result);
```



### Return type

[**\Swagger\Client\Model\UserData**](../Model/UserData.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCurrentUser**

Update current user

### Example
```php
$body = new \Swagger\Client\Model\UserUpdateRequest(); // \Swagger\Client\Model\UserUpdateRequest | 
$client->users()->updateCurrentUser($body);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserUpdateRequest**](../Model/UserUpdateRequest.md)|  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

