<?php
/**
 * ChannelActionParamsRgbwOneOf2Hsv
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
 * ChannelActionParamsRgbwOneOf2Hsv Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelActionParamsRgbwOneOf2Hsv implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelActionParamsRgbw_oneOf_2_hsv';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hue' => 'int',
        'saturation' => 'int',
        'value' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hue' => null,
        'saturation' => null,
        'value' => null
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
        'hue' => 'hue',
        'saturation' => 'saturation',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hue' => 'setHue',
        'saturation' => 'setSaturation',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hue' => 'getHue',
        'saturation' => 'getSaturation',
        'value' => 'getValue'
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
        $this->container['hue'] = $data['hue'] ?? null;
        $this->container['saturation'] = $data['saturation'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['hue']) && ($this->container['hue'] > 359)) {
            $invalidProperties[] = "invalid value for 'hue', must be smaller than or equal to 359.";
        }

        if (!is_null($this->container['hue']) && ($this->container['hue'] < 0)) {
            $invalidProperties[] = "invalid value for 'hue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['saturation']) && ($this->container['saturation'] > 100)) {
            $invalidProperties[] = "invalid value for 'saturation', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['saturation']) && ($this->container['saturation'] < 0)) {
            $invalidProperties[] = "invalid value for 'saturation', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['value']) && ($this->container['value'] > 100)) {
            $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['value']) && ($this->container['value'] < 0)) {
            $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to 0.";
        }

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
     * Gets hue
     *
     * @return int|null
     */
    public function getHue()
    {
        return $this->container['hue'];
    }

    /**
     * Sets hue
     *
     * @param int|null $hue hue
     *
     * @return self
     */
    public function setHue($hue)
    {

        if (!is_null($hue) && ($hue > 359)) {
            throw new \InvalidArgumentException('invalid value for $hue when calling ChannelActionParamsRgbwOneOf2Hsv., must be smaller than or equal to 359.');
        }
        if (!is_null($hue) && ($hue < 0)) {
            throw new \InvalidArgumentException('invalid value for $hue when calling ChannelActionParamsRgbwOneOf2Hsv., must be bigger than or equal to 0.');
        }

        $this->container['hue'] = $hue;

        return $this;
    }

    /**
     * Gets saturation
     *
     * @return int|null
     */
    public function getSaturation()
    {
        return $this->container['saturation'];
    }

    /**
     * Sets saturation
     *
     * @param int|null $saturation saturation
     *
     * @return self
     */
    public function setSaturation($saturation)
    {

        if (!is_null($saturation) && ($saturation > 100)) {
            throw new \InvalidArgumentException('invalid value for $saturation when calling ChannelActionParamsRgbwOneOf2Hsv., must be smaller than or equal to 100.');
        }
        if (!is_null($saturation) && ($saturation < 0)) {
            throw new \InvalidArgumentException('invalid value for $saturation when calling ChannelActionParamsRgbwOneOf2Hsv., must be bigger than or equal to 0.');
        }

        $this->container['saturation'] = $saturation;

        return $this;
    }

    /**
     * Gets value
     *
     * @return int|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param int|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {

        if (!is_null($value) && ($value > 100)) {
            throw new \InvalidArgumentException('invalid value for $value when calling ChannelActionParamsRgbwOneOf2Hsv., must be smaller than or equal to 100.');
        }
        if (!is_null($value) && ($value < 0)) {
            throw new \InvalidArgumentException('invalid value for $value when calling ChannelActionParamsRgbwOneOf2Hsv., must be bigger than or equal to 0.');
        }

        $this->container['value'] = $value;

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


