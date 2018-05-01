# ChannelGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Channel group identifier | [optional] 
**hidden** | **bool** | Whether this channel group is shown on client apps or not | [optional] 
**caption** | **string** | Channel caption | [optional] 
**function** | [**\Swagger\Client\Model\ChannelFunction**](ChannelFunction.md) |  | [optional] 
**function_id** | **int** |  | [optional] 
**location_id** | **int** |  | [optional] 
**location** | [**\Swagger\Client\Model\Location**](Location.md) |  | [optional] 
**channel_ids** | **int[]** |  | [optional] 
**channels** | [**\Swagger\Client\Model\Channel[]**](Channel.md) | Returned only if requested by the &#x60;include&#x60; parameter. | [optional] 
**alt_icon** | **int** | Chosen alternative icon idenifier. Should not be greater than &#x60;funciton.maxAlternativeIconIndex&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


