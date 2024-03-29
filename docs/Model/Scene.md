# # Scene

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional]
**caption** | **string** | Caption | [optional]
**altIcon** | **int** | Chosen alternative icon idenifier. Should not be greater than the &#x60;function.maxAlternativeIconIndex&#x60;. | [optional]
**enabled** | **bool** | Whether this scene is enabled or not | [optional]
**hidden** | **bool** | Whether this scene is shown on client apps or not | [optional]
**estimatedExecutionTime** | **int** | Estimated execution time for this scene (in milliseconds). | [optional]
**ownSubjectType** | **string** |  | [optional]
**possibleActions** | [**\Supla\ApiClient\Model\ChannelFunctionAction[]**](ChannelFunctionAction.md) | What action can you execute on this subject? | [optional]
**function** | [**\Supla\ApiClient\Model\ChannelFunction**](ChannelFunction.md) |  | [optional]
**operations** | [**\Supla\ApiClient\Model\SceneOperation[]**](SceneOperation.md) | Scene operations, only if requested in the &#x60;include&#x60; param | [optional]
**location** | [**\Supla\ApiClient\Model\Location**](Location.md) |  | [optional]
**locationId** | **int** |  | [optional]
**functionId** | **int** |  | [optional]
**userIconId** | **int** |  | [optional]
**config** | [**\Supla\ApiClient\Model\ChannelConfig**](ChannelConfig.md) |  | [optional]
**state** | [**\Supla\ApiClient\Model\SceneState**](SceneState.md) |  | [optional]
**relationsCount** | [**\Supla\ApiClient\Model\SceneRelationsCount**](SceneRelationsCount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
