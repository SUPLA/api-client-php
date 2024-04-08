<?php
/**
 * ChannelStateColorAndBrightness
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
 * The version of the OpenAPI document: 24.01.01-51-gd3ab095f
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
 * ChannelStateColorAndBrightness Class Doc Comment
 *
 * @category Class
 * @description State of &#x60;DIMMERANDRGBLIGHTING&#x60;
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelStateColorAndBrightness implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelStateColorAndBrightness';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'connected' => 'bool',
        'color' => 'string',
        'colorBrightness' => 'int',
        'brightness' => 'int',
        'on' => 'bool'
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
        'color' => null,
        'colorBrightness' => null,
        'brightness' => null,
        'on' => null
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
        'connected' => 'connected',
        'color' => 'color',
        'colorBrightness' => 'color_brightness',
        'brightness' => 'brightness',
        'on' => 'on'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connected' => 'setConnected',
        'color' => 'setColor',
        'colorBrightness' => 'setColorBrightness',
        'brightness' => 'setBrightness',
        'on' => 'setOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connected' => 'getConnected',
        'color' => 'getColor',
        'colorBrightness' => 'getColorBrightness',
        'brightness' => 'getBrightness',
        'on' => 'getOn'
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
        $this->container['connected'] = $data['connected'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['colorBrightness'] = $data['colorBrightness'] ?? null;
        $this->container['brightness'] = $data['brightness'] ?? null;
        $this->container['on'] = $data['on'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['colorBrightness']) && ($this->container['colorBrightness'] > 100)) {
            $invalidProperties[] = "invalid value for 'colorBrightness', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['colorBrightness']) && ($this->container['colorBrightness'] < 0)) {
            $invalidProperties[] = "invalid value for 'colorBrightness', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['brightness']) && ($this->container['brightness'] > 100)) {
            $invalidProperties[] = "invalid value for 'brightness', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['brightness']) && ($this->container['brightness'] < 0)) {
            $invalidProperties[] = "invalid value for 'brightness', must be bigger than or equal to 0.";
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
        $this->container['connected'] = $connected;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color integer (hex) value of a current color, ranging from `0x000001` to `0xFFFFFF`
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets colorBrightness
     *
     * @return int|null
     */
    public function getColorBrightness()
    {
        return $this->container['colorBrightness'];
    }

    /**
     * Sets colorBrightness
     *
     * @param int|null $colorBrightness color brightness in percent
     *
     * @return self
     */
    public function setColorBrightness($colorBrightness)
    {

        if (!is_null($colorBrightness) && ($colorBrightness > 100)) {
            throw new \InvalidArgumentException('invalid value for $colorBrightness when calling ChannelStateColorAndBrightness., must be smaller than or equal to 100.');
        }
        if (!is_null($colorBrightness) && ($colorBrightness < 0)) {
            throw new \InvalidArgumentException('invalid value for $colorBrightness when calling ChannelStateColorAndBrightness., must be bigger than or equal to 0.');
        }

        $this->container['colorBrightness'] = $colorBrightness;

        return $this;
    }

    /**
     * Gets brightness
     *
     * @return int|null
     */
    public function getBrightness()
    {
        return $this->container['brightness'];
    }

    /**
     * Sets brightness
     *
     * @param int|null $brightness current dimmer brightness value in percent
     *
     * @return self
     */
    public function setBrightness($brightness)
    {

        if (!is_null($brightness) && ($brightness > 100)) {
            throw new \InvalidArgumentException('invalid value for $brightness when calling ChannelStateColorAndBrightness., must be smaller than or equal to 100.');
        }
        if (!is_null($brightness) && ($brightness < 0)) {
            throw new \InvalidArgumentException('invalid value for $brightness when calling ChannelStateColorAndBrightness., must be bigger than or equal to 0.');
        }

        $this->container['brightness'] = $brightness;

        return $this;
    }

    /**
     * Gets on
     *
     * @return bool|null
     */
    public function getOn()
    {
        return $this->container['on'];
    }

    /**
     * Sets on
     *
     * @param bool|null $on on
     *
     * @return self
     */
    public function setOn($on)
    {
        $this->container['on'] = $on;

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


