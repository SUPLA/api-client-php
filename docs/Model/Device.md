# # Device

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional]
**name** | **string** | Device name set in the firmware. | [optional]
**comment** | **string** | Device caption / comment given by the user. | [optional]
**gUIDString** | **string** | Unique device identifier (GUID). | [optional]
**enabled** | **bool** |  | [optional]
**lastConnected** | **\DateTime** |  | [optional]
**lastIpv4** | **string** |  | [optional]
**regDate** | **\DateTime** |  | [optional]
**regIpv4** | **string** |  | [optional]
**softwareVersion** | **string** |  | [optional]
**productId** | **int** |  | [optional]
**manufacturer** | [**\Supla\ApiClient\Model\DeviceManufacturer**](DeviceManufacturer.md) |  | [optional]
**locationId** | **int** |  | [optional]
**location** | [**\Supla\ApiClient\Model\Location**](Location.md) |  | [optional]
**originalLocationId** | **int** |  | [optional]
**originalLocation** | [**\Supla\ApiClient\Model\Location**](Location.md) |  | [optional]
**channels** | [**\Supla\ApiClient\Model\Channel[]**](Channel.md) | Channels that belongs to this device, if requested by the &#x60;include&#x60; param | [optional]
**connected** | **bool** | Whether the device is now connected to the SUPLA Server. | [optional]
**relationsCount** | [**\Supla\ApiClient\Model\DeviceRelationsCount**](DeviceRelationsCount.md) |  | [optional]
**enterConfigurationModeAvailable** | **bool** |  | [optional]
**pairingSubdevicesAvailable** | **bool** |  | [optional]
**isSleepModeEnabled** | **bool** |  | [optional]
**config** | [**\Supla\ApiClient\Model\DeviceConfig**](DeviceConfig.md) |  | [optional]
**pairingResult** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
