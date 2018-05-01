# Device

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Device identifier | [optional] 
**name** | **string** |  | [optional] 
**enabled** | **bool** |  | [optional] 
**comment** | **string** |  | [optional] 
**reg_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**reg_ipv4** | **int** |  | [optional] 
**last_connected** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_ipv4** | **int** |  | [optional] 
**software_version** | **string** |  | [optional] 
**g_uid_string** | **string** |  | [optional] 
**location_id** | **int** |  | [optional] 
**original_location_id** | **int** |  | [optional] 
**channels_ids** | **int[]** |  | [optional] 
**connected** | **bool** |  | [optional] 
**location** | [**\Swagger\Client\Model\Location**](Location.md) |  | [optional] 
**original_location** | [**\Swagger\Client\Model\Location**](Location.md) |  | [optional] 
**channels** | [**\Swagger\Client\Model\Channel[]**](Channel.md) | Returned only if requested by the &#x60;include&#x60; parameter. | [optional] 
**schedules** | [**\Swagger\Client\Model\Schedule[]**](Schedule.md) | Returned only if requested by the &#x60;include&#x60; parameter. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


