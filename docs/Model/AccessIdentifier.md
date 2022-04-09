# # AccessIdentifier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional]
**caption** | **string** | Caption | [optional]
**enabled** | **bool** | &#x60;true&#x60; if enabled | [optional]
**activeFrom** | **string** |  | [optional]
**activeTo** | **string** |  | [optional]
**activeHours** | [**\Supla\ApiClient\Model\AccessIdentifierActiveHoursDef**](AccessIdentifierActiveHoursDef.md) |  | [optional]
**activeNow** | **bool** | &#x60;true&#x60; if active now. Returned only if requested by the &#x60;include&#x60; parameter. | [optional]
**relationsCount** | [**\Supla\ApiClient\Model\AccessIdentifierRelationsCount**](AccessIdentifierRelationsCount.md) |  | [optional]
**password** | **string** | Location password (plain text). Returned only if requested by the &#x60;include&#x60; parameter. | [optional]
**locations** | [**\Supla\ApiClient\Model\Location[]**](Location.md) | Array of locations, if requested by the &#x60;include&#x60; param | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
