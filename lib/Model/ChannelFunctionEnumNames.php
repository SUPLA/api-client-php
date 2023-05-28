<?php
/**
 * ChannelFunctionEnumNames
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SUPLA Cloud API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 23.05
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Supla\ApiClient\Model;
use \Supla\ApiClient\ObjectSerializer;

/**
 * ChannelFunctionEnumNames Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelFunctionEnumNames
{
    /**
     * Possible values of this enum
     */
    const UNSUPPORTED = 'UNSUPPORTED';

    const NONE = 'NONE';

    const SCENE = 'SCENE';

    const SCHEDULE = 'SCHEDULE';

    const CONTROLLINGTHEGATEWAYLOCK = 'CONTROLLINGTHEGATEWAYLOCK';

    const CONTROLLINGTHEGATE = 'CONTROLLINGTHEGATE';

    const CONTROLLINGTHEGARAGEDOOR = 'CONTROLLINGTHEGARAGEDOOR';

    const THERMOMETER = 'THERMOMETER';

    const HUMIDITY = 'HUMIDITY';

    const HUMIDITYANDTEMPERATURE = 'HUMIDITYANDTEMPERATURE';

    const OPENINGSENSOR_GATEWAY = 'OPENINGSENSOR_GATEWAY';

    const OPENINGSENSOR_GATE = 'OPENINGSENSOR_GATE';

    const OPENINGSENSOR_GARAGEDOOR = 'OPENINGSENSOR_GARAGEDOOR';

    const NOLIQUIDSENSOR = 'NOLIQUIDSENSOR';

    const CONTROLLINGTHEDOORLOCK = 'CONTROLLINGTHEDOORLOCK';

    const OPENINGSENSOR_DOOR = 'OPENINGSENSOR_DOOR';

    const CONTROLLINGTHEROLLERSHUTTER = 'CONTROLLINGTHEROLLERSHUTTER';

    const CONTROLLINGTHEROOFWINDOW = 'CONTROLLINGTHEROOFWINDOW';

    const OPENINGSENSOR_ROLLERSHUTTER = 'OPENINGSENSOR_ROLLERSHUTTER';

    const OPENINGSENSOR_ROOFWINDOW = 'OPENINGSENSOR_ROOFWINDOW';

    const POWERSWITCH = 'POWERSWITCH';

    const LIGHTSWITCH = 'LIGHTSWITCH';

    const DIMMER = 'DIMMER';

    const RGBLIGHTING = 'RGBLIGHTING';

    const DIMMERANDRGBLIGHTING = 'DIMMERANDRGBLIGHTING';

    const DEPTHSENSOR = 'DEPTHSENSOR';

    const DISTANCESENSOR = 'DISTANCESENSOR';

    const OPENINGSENSOR_WINDOW = 'OPENINGSENSOR_WINDOW';

    const MAILSENSOR = 'MAILSENSOR';

    const WINDSENSOR = 'WINDSENSOR';

    const PRESSURESENSOR = 'PRESSURESENSOR';

    const RAINSENSOR = 'RAINSENSOR';

    const WEIGHTSENSOR = 'WEIGHTSENSOR';

    const WEATHER_STATION = 'WEATHER_STATION';

    const STAIRCASETIMER = 'STAIRCASETIMER';

    const ELECTRICITYMETER = 'ELECTRICITYMETER';

    const IC_ELECTRICITYMETER = 'IC_ELECTRICITYMETER';

    const IC_GASMETER = 'IC_GASMETER';

    const IC_WATERMETER = 'IC_WATERMETER';

    const IC_HEATMETER = 'IC_HEATMETER';

    const THERMOSTAT = 'THERMOSTAT';

    const THERMOSTATHEATPOLHOMEPLUS = 'THERMOSTATHEATPOLHOMEPLUS';

    const VALVEOPENCLOSE = 'VALVEOPENCLOSE';

    const VALVEPERCENTAGE = 'VALVEPERCENTAGE';

    const GENERAL_PURPOSE_MEASUREMENT = 'GENERAL_PURPOSE_MEASUREMENT';

    const ACTION_TRIGGER = 'ACTION_TRIGGER';

    const DIGIGLASS_HORIZONTAL = 'DIGIGLASS_HORIZONTAL';

    const DIGIGLASS_VERTICAL = 'DIGIGLASS_VERTICAL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSUPPORTED,
            self::NONE,
            self::SCENE,
            self::SCHEDULE,
            self::CONTROLLINGTHEGATEWAYLOCK,
            self::CONTROLLINGTHEGATE,
            self::CONTROLLINGTHEGARAGEDOOR,
            self::THERMOMETER,
            self::HUMIDITY,
            self::HUMIDITYANDTEMPERATURE,
            self::OPENINGSENSOR_GATEWAY,
            self::OPENINGSENSOR_GATE,
            self::OPENINGSENSOR_GARAGEDOOR,
            self::NOLIQUIDSENSOR,
            self::CONTROLLINGTHEDOORLOCK,
            self::OPENINGSENSOR_DOOR,
            self::CONTROLLINGTHEROLLERSHUTTER,
            self::CONTROLLINGTHEROOFWINDOW,
            self::OPENINGSENSOR_ROLLERSHUTTER,
            self::OPENINGSENSOR_ROOFWINDOW,
            self::POWERSWITCH,
            self::LIGHTSWITCH,
            self::DIMMER,
            self::RGBLIGHTING,
            self::DIMMERANDRGBLIGHTING,
            self::DEPTHSENSOR,
            self::DISTANCESENSOR,
            self::OPENINGSENSOR_WINDOW,
            self::MAILSENSOR,
            self::WINDSENSOR,
            self::PRESSURESENSOR,
            self::RAINSENSOR,
            self::WEIGHTSENSOR,
            self::WEATHER_STATION,
            self::STAIRCASETIMER,
            self::ELECTRICITYMETER,
            self::IC_ELECTRICITYMETER,
            self::IC_GASMETER,
            self::IC_WATERMETER,
            self::IC_HEATMETER,
            self::THERMOSTAT,
            self::THERMOSTATHEATPOLHOMEPLUS,
            self::VALVEOPENCLOSE,
            self::VALVEPERCENTAGE,
            self::GENERAL_PURPOSE_MEASUREMENT,
            self::ACTION_TRIGGER,
            self::DIGIGLASS_HORIZONTAL,
            self::DIGIGLASS_VERTICAL
        ];
    }
}


