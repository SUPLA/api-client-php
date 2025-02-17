<?php
/**
 * ChannelActionParamsRgbw
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
 * The version of the OpenAPI document: 24.12-60-g8a642a3e7
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
 * ChannelActionParamsRgbw Class Doc Comment
 *
 * @category Class
 * @description Action params for &#x60;SET_RGBW_PARAMETERS&#x60; action.
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelActionParamsRgbw implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelActionParamsRgbw';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'color' => 'OneOfIntegerStringString',
        'colorBrightness' => 'int',
        'hue' => 'int',
        'hsv' => '\Supla\ApiClient\Model\ChannelActionParamsRgbwOneOf2Hsv',
        'rgb' => '\Supla\ApiClient\Model\ChannelActionParamsRgbwOneOf3Rgb'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'color' => null,
        'colorBrightness' => null,
        'hue' => null,
        'hsv' => null,
        'rgb' => null
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
        'color' => 'color',
        'colorBrightness' => 'color_brightness',
        'hue' => 'hue',
        'hsv' => 'hsv',
        'rgb' => 'rgb'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'color' => 'setColor',
        'colorBrightness' => 'setColorBrightness',
        'hue' => 'setHue',
        'hsv' => 'setHsv',
        'rgb' => 'setRgb'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'color' => 'getColor',
        'colorBrightness' => 'getColorBrightness',
        'hue' => 'getHue',
        'hsv' => 'getHsv',
        'rgb' => 'getRgb'
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
        $this->container['color'] = $data['color'] ?? null;
        $this->container['colorBrightness'] = $data['colorBrightness'] ?? null;
        $this->container['hue'] = $data['hue'] ?? null;
        $this->container['hsv'] = $data['hsv'] ?? null;
        $this->container['rgb'] = $data['rgb'] ?? null;
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

        if (!is_null($this->container['hue']) && ($this->container['hue'] > 359)) {
            $invalidProperties[] = "invalid value for 'hue', must be smaller than or equal to 359.";
        }

        if (!is_null($this->container['hue']) && ($this->container['hue'] < 0)) {
            $invalidProperties[] = "invalid value for 'hue', must be bigger than or equal to 0.";
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
     * Gets color
     *
     * @return OneOfIntegerStringString|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param OneOfIntegerStringString|null $color color
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
     * @deprecated
     */
    public function getColorBrightness()
    {
        return $this->container['colorBrightness'];
    }

    /**
     * Sets colorBrightness
     *
     * @param int|null $colorBrightness colorBrightness
     *
     * @return self
     * @deprecated
     */
    public function setColorBrightness($colorBrightness)
    {

        if (!is_null($colorBrightness) && ($colorBrightness > 100)) {
            throw new \InvalidArgumentException('invalid value for $colorBrightness when calling ChannelActionParamsRgbw., must be smaller than or equal to 100.');
        }
        if (!is_null($colorBrightness) && ($colorBrightness < 0)) {
            throw new \InvalidArgumentException('invalid value for $colorBrightness when calling ChannelActionParamsRgbw., must be bigger than or equal to 0.');
        }

        $this->container['colorBrightness'] = $colorBrightness;

        return $this;
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
            throw new \InvalidArgumentException('invalid value for $hue when calling ChannelActionParamsRgbw., must be smaller than or equal to 359.');
        }
        if (!is_null($hue) && ($hue < 0)) {
            throw new \InvalidArgumentException('invalid value for $hue when calling ChannelActionParamsRgbw., must be bigger than or equal to 0.');
        }

        $this->container['hue'] = $hue;

        return $this;
    }

    /**
     * Gets hsv
     *
     * @return \Supla\ApiClient\Model\ChannelActionParamsRgbwOneOf2Hsv|null
     */
    public function getHsv()
    {
        return $this->container['hsv'];
    }

    /**
     * Sets hsv
     *
     * @param \Supla\ApiClient\Model\ChannelActionParamsRgbwOneOf2Hsv|null $hsv hsv
     *
     * @return self
     */
    public function setHsv($hsv)
    {
        $this->container['hsv'] = $hsv;

        return $this;
    }

    /**
     * Gets rgb
     *
     * @return \Supla\ApiClient\Model\ChannelActionParamsRgbwOneOf3Rgb|null
     */
    public function getRgb()
    {
        return $this->container['rgb'];
    }

    /**
     * Sets rgb
     *
     * @param \Supla\ApiClient\Model\ChannelActionParamsRgbwOneOf3Rgb|null $rgb rgb
     *
     * @return self
     */
    public function setRgb($rgb)
    {
        $this->container['rgb'] = $rgb;

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


