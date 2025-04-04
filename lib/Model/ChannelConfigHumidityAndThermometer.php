<?php
/**
 * ChannelConfigHumidityAndThermometer
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
 * The version of the OpenAPI document: 25.03
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Supla\ApiClient\Model;

use \ArrayAccess;
use \Supla\ApiClient\ObjectSerializer;

/**
 * ChannelConfigHumidityAndThermometer Class Doc Comment
 *
 * @category Class
 * @description Config for &#x60;HUMIDITYANDTEMPERATURE&#x60;
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelConfigHumidityAndThermometer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelConfigHumidityAndThermometer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'temperatureAdjustment' => 'float',
        'humidityAdjustment' => 'float',
        'minTemperatureAdjustment' => 'float',
        'maxTemperatureAdjustment' => 'float',
        'minHumidityAdjustment' => 'float',
        'maxHumidityAdjustment' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'temperatureAdjustment' => null,
        'humidityAdjustment' => null,
        'minTemperatureAdjustment' => null,
        'maxTemperatureAdjustment' => null,
        'minHumidityAdjustment' => null,
        'maxHumidityAdjustment' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'temperatureAdjustment' => 'temperatureAdjustment',
        'humidityAdjustment' => 'humidityAdjustment',
        'minTemperatureAdjustment' => 'minTemperatureAdjustment',
        'maxTemperatureAdjustment' => 'maxTemperatureAdjustment',
        'minHumidityAdjustment' => 'minHumidityAdjustment',
        'maxHumidityAdjustment' => 'maxHumidityAdjustment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'temperatureAdjustment' => 'setTemperatureAdjustment',
        'humidityAdjustment' => 'setHumidityAdjustment',
        'minTemperatureAdjustment' => 'setMinTemperatureAdjustment',
        'maxTemperatureAdjustment' => 'setMaxTemperatureAdjustment',
        'minHumidityAdjustment' => 'setMinHumidityAdjustment',
        'maxHumidityAdjustment' => 'setMaxHumidityAdjustment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'temperatureAdjustment' => 'getTemperatureAdjustment',
        'humidityAdjustment' => 'getHumidityAdjustment',
        'minTemperatureAdjustment' => 'getMinTemperatureAdjustment',
        'maxTemperatureAdjustment' => 'getMaxTemperatureAdjustment',
        'minHumidityAdjustment' => 'getMinHumidityAdjustment',
        'maxHumidityAdjustment' => 'getMaxHumidityAdjustment'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['temperatureAdjustment'] = $data['temperatureAdjustment'] ?? null;
        $this->container['humidityAdjustment'] = $data['humidityAdjustment'] ?? null;
        $this->container['minTemperatureAdjustment'] = $data['minTemperatureAdjustment'] ?? null;
        $this->container['maxTemperatureAdjustment'] = $data['maxTemperatureAdjustment'] ?? null;
        $this->container['minHumidityAdjustment'] = $data['minHumidityAdjustment'] ?? null;
        $this->container['maxHumidityAdjustment'] = $data['maxHumidityAdjustment'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets temperatureAdjustment
     *
     * @return float|null
     */
    public function getTemperatureAdjustment()
    {
        return $this->container['temperatureAdjustment'];
    }

    /**
     * Sets temperatureAdjustment
     *
     * @param float|null $temperatureAdjustment temperatureAdjustment
     *
     * @return self
     */
    public function setTemperatureAdjustment($temperatureAdjustment)
    {
        $this->container['temperatureAdjustment'] = $temperatureAdjustment;

        return $this;
    }

    /**
     * Gets humidityAdjustment
     *
     * @return float|null
     */
    public function getHumidityAdjustment()
    {
        return $this->container['humidityAdjustment'];
    }

    /**
     * Sets humidityAdjustment
     *
     * @param float|null $humidityAdjustment humidityAdjustment
     *
     * @return self
     */
    public function setHumidityAdjustment($humidityAdjustment)
    {
        $this->container['humidityAdjustment'] = $humidityAdjustment;

        return $this;
    }

    /**
     * Gets minTemperatureAdjustment
     *
     * @return float|null
     */
    public function getMinTemperatureAdjustment()
    {
        return $this->container['minTemperatureAdjustment'];
    }

    /**
     * Sets minTemperatureAdjustment
     *
     * @param float|null $minTemperatureAdjustment minTemperatureAdjustment
     *
     * @return self
     */
    public function setMinTemperatureAdjustment($minTemperatureAdjustment)
    {
        $this->container['minTemperatureAdjustment'] = $minTemperatureAdjustment;

        return $this;
    }

    /**
     * Gets maxTemperatureAdjustment
     *
     * @return float|null
     */
    public function getMaxTemperatureAdjustment()
    {
        return $this->container['maxTemperatureAdjustment'];
    }

    /**
     * Sets maxTemperatureAdjustment
     *
     * @param float|null $maxTemperatureAdjustment maxTemperatureAdjustment
     *
     * @return self
     */
    public function setMaxTemperatureAdjustment($maxTemperatureAdjustment)
    {
        $this->container['maxTemperatureAdjustment'] = $maxTemperatureAdjustment;

        return $this;
    }

    /**
     * Gets minHumidityAdjustment
     *
     * @return float|null
     */
    public function getMinHumidityAdjustment()
    {
        return $this->container['minHumidityAdjustment'];
    }

    /**
     * Sets minHumidityAdjustment
     *
     * @param float|null $minHumidityAdjustment minHumidityAdjustment
     *
     * @return self
     */
    public function setMinHumidityAdjustment($minHumidityAdjustment)
    {
        $this->container['minHumidityAdjustment'] = $minHumidityAdjustment;

        return $this;
    }

    /**
     * Gets maxHumidityAdjustment
     *
     * @return float|null
     */
    public function getMaxHumidityAdjustment()
    {
        return $this->container['maxHumidityAdjustment'];
    }

    /**
     * Sets maxHumidityAdjustment
     *
     * @param float|null $maxHumidityAdjustment maxHumidityAdjustment
     *
     * @return self
     */
    public function setMaxHumidityAdjustment($maxHumidityAdjustment)
    {
        $this->container['maxHumidityAdjustment'] = $maxHumidityAdjustment;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


