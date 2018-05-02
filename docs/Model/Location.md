# Location

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Location identifier | [optional] 
**caption** | **string** | Location caption | [optional] 
**enabled** | **bool** | &#x60;true&#x60; if the location is enabled, &#x60;false&#x60; otherwise | [optional] 
**iodevicesIds** | **int[]** | array containing the IO Devices identifiers assigned to this location | [optional] 
**channelGroupsIds** | **int[]** | array containing the Channel groups identifiers assigned to this location | [optional] 
**channelsIds** | **int[]** | array containing the Channels identifiers expicitely assigned to this location | [optional] 
**accessIdsIds** | **int[]** | array containing the Access Identifiers identifiers assigned to this location | [optional] 
**password** | **string** | Location password (plain text). Returned only if requested by the &#x60;include&#x60; parameter. | [optional] 
**iodevices** | [**\Swagger\Client\Model\Device[]**](Device.md) | Returned only if requested by the &#x60;include&#x60; parameter. | [optional] 
**channelGroups** | [**\Swagger\Client\Model\ChannelGroup[]**](ChannelGroup.md) | Returned only if requested by the &#x60;include&#x60; parameter. | [optional] 
**accessIds** | [**\Swagger\Client\Model\AccessID[]**](AccessID.md) | Returned only if requested by the &#x60;include&#x60; parameter. | [optional] 
**channels** | [**\Swagger\Client\Model\Channel[]**](Channel.md) | Returned only if requested by the &#x60;include&#x60; parameter. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


