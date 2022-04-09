# # ChannelStateElectricityMeter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**connected** | **bool** |  | [optional]
**support** | **int** | A bitmask indicating which measurements are supported by the electricity meter. See https://github.com/SUPLA/supla-cloud/blob/master/src/SuplaBundle/Enums/ElectricityMeterSupportBits.php for more info. All not supported measurements will not be present in the response. | [optional]
**totalCost** | **float** |  | [optional]
**pricePerUnit** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**phases** | [**\Supla\ApiClient\Model\ChannelStateElectricityMeterPhase[]**](ChannelStateElectricityMeterPhase.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
