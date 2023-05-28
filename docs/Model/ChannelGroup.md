# # ChannelGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional]
**caption** | **string** | Caption | [optional]
**altIcon** | **int** | Chosen alternative icon idenifier. Should not be greater than the &#x60;function.maxAlternativeIconIndex&#x60;. | [optional]
**hidden** | **bool** | Whether this channel group is shown on client apps or not | [optional]
**ownSubjectType** | **string** |  | [optional]
**functionId** | **int** |  | [optional]
**function** | [**\Supla\ApiClient\Model\ChannelFunction**](ChannelFunction.md) |  | [optional]
**locationId** | **int** |  | [optional]
**location** | [**\Supla\ApiClient\Model\Location**](Location.md) |  | [optional]
**channels** | [**\Supla\ApiClient\Model\Channel[]**](Channel.md) | Channel group channels, if requested by the &#x60;include&#x60; param | [optional]
**userIconId** | **int** |  | [optional]
**possibleActions** | [**\Supla\ApiClient\Model\ChannelFunctionAction[]**](ChannelFunctionAction.md) | What action can you execute on this subject? | [optional]
**state** | [**array<string,\Supla\ApiClient\Model\ChannelState>**](ChannelState.md) |  | [optional]
**relationsCount** | [**\Supla\ApiClient\Model\ChannelGroupRelationsCount**](ChannelGroupRelationsCount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
