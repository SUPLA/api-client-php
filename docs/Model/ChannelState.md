# # ChannelState

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**connected** | **bool** |  | [optional]
**brightness** | **int** | current dimmer brightness value in percent | [optional]
**on** | **bool** |  | [optional]
**color** | **string** | integer (hex) value of a current color, ranging from &#x60;0x000001&#x60; to &#x60;0xFFFFFF&#x60; | [optional]
**colorBrightness** | **int** | color brightness in percent | [optional]
**depth** | **int** |  | [optional]
**distance** | **int** |  | [optional]
**value** | **float** |  | [optional]
**support** | **int** | A bitmask indicating which measurements are supported by the electricity meter. See https://github.com/SUPLA/supla-cloud/blob/master/src/SuplaBundle/Enums/ElectricityMeterSupportBits.php for more info. All not supported measurements will not be present in the response. | [optional]
**totalCost** | **float** |  | [optional]
**pricePerUnit** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**phases** | [**\Supla\ApiClient\Model\ChannelStateElectricityMeterPhase[]**](ChannelStateElectricityMeterPhase.md) |  | [optional]
**hi** | **bool** |  | [optional]
**partialHi** | **bool** |  | [optional]
**humidity** | **float** | value provided by the sensor, including possibly configured delta adjustment | [optional]
**temperature** | **float** | value provided by the sensor, including possibly configured delta adjustment | [optional]
**impulsesPerUnit** | **int** |  | [optional]
**counter** | **int** |  | [optional]
**calculatedValue** | **float** |  | [optional]
**unit** | **string** |  | [optional]
**currentOverload** | **bool** |  | [optional]
**isCalibrating** | **bool** |  | [optional]
**notCalibrated** | **bool** |  | [optional]
**shut** | **int** |  | [optional]
**closed** | **bool** |  | [optional]
**manuallyClosed** | **bool** |  | [optional]
**flooding** | **bool** |  | [optional]
**executing** | **bool** |  |
**initiatorTypeId** | **int** |  | [optional]
**initiatorType** | **string** |  | [optional]
**initiatorId** | **int** |  | [optional]
**initiatorName** | **string** |  | [optional]
**millisecondsFromStart** | **int** |  | [optional]
**millisecondsToEnd** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
