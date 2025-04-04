<?php
/**
 * ChannelStateImpulseCounter
 *
 * PHP version 7.4
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
 * Generator version: 7.12.0
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
 * ChannelStateImpulseCounter Class Doc Comment
 *
 * @category Class
 * @description State of &#x60;IC_ELECTRICITYMETER&#x60;, &#x60;IC_GASMETER&#x60;, &#x60;IC_WATERMETER&#x60;, &#x60;IC_HEATMETER&#x60;.
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChannelStateImpulseCounter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelStateImpulseCounter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'connected' => 'bool',
        'totalCost' => 'float',
        'impulsesPerUnit' => 'int',
        'counter' => 'int',
        'calculatedValue' => 'float',
        'currency' => 'string',
        'unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'connected' => null,
        'totalCost' => null,
        'impulsesPerUnit' => null,
        'counter' => null,
        'calculatedValue' => null,
        'currency' => null,
        'unit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'connected' => false,
        'totalCost' => false,
        'impulsesPerUnit' => false,
        'counter' => false,
        'calculatedValue' => false,
        'currency' => false,
        'unit' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'connected' => 'connected',
        'totalCost' => 'totalCost',
        'impulsesPerUnit' => 'impulsesPerUnit',
        'counter' => 'counter',
        'calculatedValue' => 'calculatedValue',
        'currency' => 'currency',
        'unit' => 'unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connected' => 'setConnected',
        'totalCost' => 'setTotalCost',
        'impulsesPerUnit' => 'setImpulsesPerUnit',
        'counter' => 'setCounter',
        'calculatedValue' => 'setCalculatedValue',
        'currency' => 'setCurrency',
        'unit' => 'setUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connected' => 'getConnected',
        'totalCost' => 'getTotalCost',
        'impulsesPerUnit' => 'getImpulsesPerUnit',
        'counter' => 'getCounter',
        'calculatedValue' => 'getCalculatedValue',
        'currency' => 'getCurrency',
        'unit' => 'getUnit'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('connected', $data ?? [], null);
        $this->setIfExists('totalCost', $data ?? [], null);
        $this->setIfExists('impulsesPerUnit', $data ?? [], null);
        $this->setIfExists('counter', $data ?? [], null);
        $this->setIfExists('calculatedValue', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets connected
     *
     * @return bool|null
     */
    public function getConnected()
    {
        return $this->container['connected'];
    }

    /**
     * Sets connected
     *
     * @param bool|null $connected connected
     *
     * @return self
     */
    public function setConnected($connected)
    {
        if (is_null($connected)) {
            throw new \InvalidArgumentException('non-nullable connected cannot be null');
        }
        $this->container['connected'] = $connected;

        return $this;
    }

    /**
     * Gets totalCost
     *
     * @return float|null
     */
    public function getTotalCost()
    {
        return $this->container['totalCost'];
    }

    /**
     * Sets totalCost
     *
     * @param float|null $totalCost totalCost
     *
     * @return self
     */
    public function setTotalCost($totalCost)
    {
        if (is_null($totalCost)) {
            throw new \InvalidArgumentException('non-nullable totalCost cannot be null');
        }
        $this->container['totalCost'] = $totalCost;

        return $this;
    }

    /**
     * Gets impulsesPerUnit
     *
     * @return int|null
     */
    public function getImpulsesPerUnit()
    {
        return $this->container['impulsesPerUnit'];
    }

    /**
     * Sets impulsesPerUnit
     *
     * @param int|null $impulsesPerUnit impulsesPerUnit
     *
     * @return self
     */
    public function setImpulsesPerUnit($impulsesPerUnit)
    {
        if (is_null($impulsesPerUnit)) {
            throw new \InvalidArgumentException('non-nullable impulsesPerUnit cannot be null');
        }
        $this->container['impulsesPerUnit'] = $impulsesPerUnit;

        return $this;
    }

    /**
     * Gets counter
     *
     * @return int|null
     */
    public function getCounter()
    {
        return $this->container['counter'];
    }

    /**
     * Sets counter
     *
     * @param int|null $counter counter
     *
     * @return self
     */
    public function setCounter($counter)
    {
        if (is_null($counter)) {
            throw new \InvalidArgumentException('non-nullable counter cannot be null');
        }
        $this->container['counter'] = $counter;

        return $this;
    }

    /**
     * Gets calculatedValue
     *
     * @return float|null
     */
    public function getCalculatedValue()
    {
        return $this->container['calculatedValue'];
    }

    /**
     * Sets calculatedValue
     *
     * @param float|null $calculatedValue calculatedValue
     *
     * @return self
     */
    public function setCalculatedValue($calculatedValue)
    {
        if (is_null($calculatedValue)) {
            throw new \InvalidArgumentException('non-nullable calculatedValue cannot be null');
        }
        $this->container['calculatedValue'] = $calculatedValue;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }
        $this->container['unit'] = $unit;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


