# Device

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Device identifier | [optional] 
**name** | **string** |  | [optional] 
**enabled** | **bool** |  | [optional] 
**comment** | **string** |  | [optional] 
**regDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**regIpv4** | **int** |  | [optional] 
**lastConnected** | [**\DateTime**](\DateTime.md) |  | [optional] 
**lastIpv4** | **int** |  | [optional] 
**softwareVersion** | **string** |  | [optional] 
**gUIDString** | **string** |  | [optional] 
**locationId** | **int** |  | [optional] 
**originalLocationId** | **int** |  | [optional] 
**channelsIds** | **int[]** |  | [optional] 
**connected** | **bool** |  | [optional] 
**location** | [**\Swagger\Client\Model\Location**](Location.md) |  | [optional] 
**originalLocation** | [**\Swagger\Client\Model\Location**](Location.md) |  | [optional] 
**channels** | [**\Swagger\Client\Model\Channel[]**](Channel.md) | Returned only if requested by the &#x60;include&#x60; parameter. | [optional] 
**schedules** | [**\Swagger\Client\Model\Schedule[]**](Schedule.md) | Returned only if requested by the &#x60;include&#x60; parameter. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


