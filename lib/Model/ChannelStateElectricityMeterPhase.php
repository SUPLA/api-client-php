<?php
/**
 * ChannelStateElectricityMeterPhase
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
 * The version of the OpenAPI document: 23.09.02-69-g0347cdcf
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
 * ChannelStateElectricityMeterPhase Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelStateElectricityMeterPhase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelStateElectricityMeterPhase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number' => 'int',
        'frequency' => 'float',
        'voltage' => 'float',
        'current' => 'float',
        'powerActive' => 'float',
        'powerReactive' => 'float',
        'powerApparent' => 'float',
        'powerFactor' => 'float',
        'phaseAngle' => 'float',
        'totalForwardActiveEnergy' => 'float',
        'totalReverseActiveEnergy' => 'float',
        'totalForwardReactiveEnergy' => 'float',
        'totalReverseReactiveEnergy' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'number' => null,
        'frequency' => null,
        'voltage' => null,
        'current' => null,
        'powerActive' => null,
        'powerReactive' => null,
        'powerApparent' => null,
        'powerFactor' => null,
        'phaseAngle' => null,
        'totalForwardActiveEnergy' => null,
        'totalReverseActiveEnergy' => null,
        'totalForwardReactiveEnergy' => null,
        'totalReverseReactiveEnergy' => null
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
        'number' => 'number',
        'frequency' => 'frequency',
        'voltage' => 'voltage',
        'current' => 'current',
        'powerActive' => 'powerActive',
        'powerReactive' => 'powerReactive',
        'powerApparent' => 'powerApparent',
        'powerFactor' => 'powerFactor',
        'phaseAngle' => 'phaseAngle',
        'totalForwardActiveEnergy' => 'totalForwardActiveEnergy',
        'totalReverseActiveEnergy' => 'totalReverseActiveEnergy',
        'totalForwardReactiveEnergy' => 'totalForwardReactiveEnergy',
        'totalReverseReactiveEnergy' => 'totalReverseReactiveEnergy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'frequency' => 'setFrequency',
        'voltage' => 'setVoltage',
        'current' => 'setCurrent',
        'powerActive' => 'setPowerActive',
        'powerReactive' => 'setPowerReactive',
        'powerApparent' => 'setPowerApparent',
        'powerFactor' => 'setPowerFactor',
        'phaseAngle' => 'setPhaseAngle',
        'totalForwardActiveEnergy' => 'setTotalForwardActiveEnergy',
        'totalReverseActiveEnergy' => 'setTotalReverseActiveEnergy',
        'totalForwardReactiveEnergy' => 'setTotalForwardReactiveEnergy',
        'totalReverseReactiveEnergy' => 'setTotalReverseReactiveEnergy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'frequency' => 'getFrequency',
        'voltage' => 'getVoltage',
        'current' => 'getCurrent',
        'powerActive' => 'getPowerActive',
        'powerReactive' => 'getPowerReactive',
        'powerApparent' => 'getPowerApparent',
        'powerFactor' => 'getPowerFactor',
        'phaseAngle' => 'getPhaseAngle',
        'totalForwardActiveEnergy' => 'getTotalForwardActiveEnergy',
        'totalReverseActiveEnergy' => 'getTotalReverseActiveEnergy',
        'totalForwardReactiveEnergy' => 'getTotalForwardReactiveEnergy',
        'totalReverseReactiveEnergy' => 'getTotalReverseReactiveEnergy'
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
        $this->container['number'] = $data['number'] ?? null;
        $this->container['frequency'] = $data['frequency'] ?? null;
        $this->container['voltage'] = $data['voltage'] ?? null;
        $this->container['current'] = $data['current'] ?? null;
        $this->container['powerActive'] = $data['powerActive'] ?? null;
        $this->container['powerReactive'] = $data['powerReactive'] ?? null;
        $this->container['powerApparent'] = $data['powerApparent'] ?? null;
        $this->container['powerFactor'] = $data['powerFactor'] ?? null;
        $this->container['phaseAngle'] = $data['phaseAngle'] ?? null;
        $this->container['totalForwardActiveEnergy'] = $data['totalForwardActiveEnergy'] ?? null;
        $this->container['totalReverseActiveEnergy'] = $data['totalReverseActiveEnergy'] ?? null;
        $this->container['totalForwardReactiveEnergy'] = $data['totalForwardReactiveEnergy'] ?? null;
        $this->container['totalReverseReactiveEnergy'] = $data['totalReverseReactiveEnergy'] ?? null;
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
     * Gets number
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return float|null
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param float|null $frequency frequency
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets voltage
     *
     * @return float|null
     */
    public function getVoltage()
    {
        return $this->container['voltage'];
    }

    /**
     * Sets voltage
     *
     * @param float|null $voltage voltage
     *
     * @return self
     */
    public function setVoltage($voltage)
    {
        $this->container['voltage'] = $voltage;

        return $this;
    }

    /**
     * Gets current
     *
     * @return float|null
     */
    public function getCurrent()
    {
        return $this->container['current'];
    }

    /**
     * Sets current
     *
     * @param float|null $current current
     *
     * @return self
     */
    public function setCurrent($current)
    {
        $this->container['current'] = $current;

        return $this;
    }

    /**
     * Gets powerActive
     *
     * @return float|null
     */
    public function getPowerActive()
    {
        return $this->container['powerActive'];
    }

    /**
     * Sets powerActive
     *
     * @param float|null $powerActive powerActive
     *
     * @return self
     */
    public function setPowerActive($powerActive)
    {
        $this->container['powerActive'] = $powerActive;

        return $this;
    }

    /**
     * Gets powerReactive
     *
     * @return float|null
     */
    public function getPowerReactive()
    {
        return $this->container['powerReactive'];
    }

    /**
     * Sets powerReactive
     *
     * @param float|null $powerReactive powerReactive
     *
     * @return self
     */
    public function setPowerReactive($powerReactive)
    {
        $this->container['powerReactive'] = $powerReactive;

        return $this;
    }

    /**
     * Gets powerApparent
     *
     * @return float|null
     */
    public function getPowerApparent()
    {
        return $this->container['powerApparent'];
    }

    /**
     * Sets powerApparent
     *
     * @param float|null $powerApparent powerApparent
     *
     * @return self
     */
    public function setPowerApparent($powerApparent)
    {
        $this->container['powerApparent'] = $powerApparent;

        return $this;
    }

    /**
     * Gets powerFactor
     *
     * @return float|null
     */
    public function getPowerFactor()
    {
        return $this->container['powerFactor'];
    }

    /**
     * Sets powerFactor
     *
     * @param float|null $powerFactor powerFactor
     *
     * @return self
     */
    public function setPowerFactor($powerFactor)
    {
        $this->container['powerFactor'] = $powerFactor;

        return $this;
    }

    /**
     * Gets phaseAngle
     *
     * @return float|null
     */
    public function getPhaseAngle()
    {
        return $this->container['phaseAngle'];
    }

    /**
     * Sets phaseAngle
     *
     * @param float|null $phaseAngle phaseAngle
     *
     * @return self
     */
    public function setPhaseAngle($phaseAngle)
    {
        $this->container['phaseAngle'] = $phaseAngle;

        return $this;
    }

    /**
     * Gets totalForwardActiveEnergy
     *
     * @return float|null
     */
    public function getTotalForwardActiveEnergy()
    {
        return $this->container['totalForwardActiveEnergy'];
    }

    /**
     * Sets totalForwardActiveEnergy
     *
     * @param float|null $totalForwardActiveEnergy totalForwardActiveEnergy
     *
     * @return self
     */
    public function setTotalForwardActiveEnergy($totalForwardActiveEnergy)
    {
        $this->container['totalForwardActiveEnergy'] = $totalForwardActiveEnergy;

        return $this;
    }

    /**
     * Gets totalReverseActiveEnergy
     *
     * @return float|null
     */
    public function getTotalReverseActiveEnergy()
    {
        return $this->container['totalReverseActiveEnergy'];
    }

    /**
     * Sets totalReverseActiveEnergy
     *
     * @param float|null $totalReverseActiveEnergy totalReverseActiveEnergy
     *
     * @return self
     */
    public function setTotalReverseActiveEnergy($totalReverseActiveEnergy)
    {
        $this->container['totalReverseActiveEnergy'] = $totalReverseActiveEnergy;

        return $this;
    }

    /**
     * Gets totalForwardReactiveEnergy
     *
     * @return float|null
     */
    public function getTotalForwardReactiveEnergy()
    {
        return $this->container['totalForwardReactiveEnergy'];
    }

    /**
     * Sets totalForwardReactiveEnergy
     *
     * @param float|null $totalForwardReactiveEnergy totalForwardReactiveEnergy
     *
     * @return self
     */
    public function setTotalForwardReactiveEnergy($totalForwardReactiveEnergy)
    {
        $this->container['totalForwardReactiveEnergy'] = $totalForwardReactiveEnergy;

        return $this;
    }

    /**
     * Gets totalReverseReactiveEnergy
     *
     * @return float|null
     */
    public function getTotalReverseReactiveEnergy()
    {
        return $this->container['totalReverseReactiveEnergy'];
    }

    /**
     * Sets totalReverseReactiveEnergy
     *
     * @param float|null $totalReverseReactiveEnergy totalReverseReactiveEnergy
     *
     * @return self
     */
    public function setTotalReverseReactiveEnergy($totalReverseReactiveEnergy)
    {
        $this->container['totalReverseReactiveEnergy'] = $totalReverseReactiveEnergy;

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


