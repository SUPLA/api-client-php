<?php
/**
 * CreateChannelReactionRequestActionParam
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
 * CreateChannelReactionRequestActionParam Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateChannelReactionRequestActionParam implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createChannelReaction_request_actionParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'percentage' => 'int',
        'brightness' => 'int',
        'color' => '\Supla\ApiClient\Model\ChannelActionParamsRgbwOneOfColor',
        'colorBrightness' => 'int',
        'hue' => 'int',
        'hsv' => '\Supla\ApiClient\Model\ChannelActionParamsRgbwOneOf2Hsv',
        'rgb' => '\Supla\ApiClient\Model\ChannelActionParamsRgbwOneOf3Rgb',
        'sourceChannelId' => 'int',
        'title' => 'string',
        'body' => 'string',
        'accessIds' => 'int[]',
        'durationMs' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'percentage' => null,
        'brightness' => null,
        'color' => null,
        'colorBrightness' => null,
        'hue' => null,
        'hsv' => null,
        'rgb' => null,
        'sourceChannelId' => null,
        'title' => null,
        'body' => null,
        'accessIds' => null,
        'durationMs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'percentage' => false,
        'brightness' => false,
        'color' => false,
        'colorBrightness' => false,
        'hue' => false,
        'hsv' => false,
        'rgb' => false,
        'sourceChannelId' => false,
        'title' => false,
        'body' => false,
        'accessIds' => false,
        'durationMs' => false
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
        'percentage' => 'percentage',
        'brightness' => 'brightness',
        'color' => 'color',
        'colorBrightness' => 'color_brightness',
        'hue' => 'hue',
        'hsv' => 'hsv',
        'rgb' => 'rgb',
        'sourceChannelId' => 'sourceChannelId',
        'title' => 'title',
        'body' => 'body',
        'accessIds' => 'accessIds',
        'durationMs' => 'durationMs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'percentage' => 'setPercentage',
        'brightness' => 'setBrightness',
        'color' => 'setColor',
        'colorBrightness' => 'setColorBrightness',
        'hue' => 'setHue',
        'hsv' => 'setHsv',
        'rgb' => 'setRgb',
        'sourceChannelId' => 'setSourceChannelId',
        'title' => 'setTitle',
        'body' => 'setBody',
        'accessIds' => 'setAccessIds',
        'durationMs' => 'setDurationMs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'percentage' => 'getPercentage',
        'brightness' => 'getBrightness',
        'color' => 'getColor',
        'colorBrightness' => 'getColorBrightness',
        'hue' => 'getHue',
        'hsv' => 'getHsv',
        'rgb' => 'getRgb',
        'sourceChannelId' => 'getSourceChannelId',
        'title' => 'getTitle',
        'body' => 'getBody',
        'accessIds' => 'getAccessIds',
        'durationMs' => 'getDurationMs'
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
        $this->setIfExists('percentage', $data ?? [], null);
        $this->setIfExists('brightness', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('colorBrightness', $data ?? [], null);
        $this->setIfExists('hue', $data ?? [], null);
        $this->setIfExists('hsv', $data ?? [], null);
        $this->setIfExists('rgb', $data ?? [], null);
        $this->setIfExists('sourceChannelId', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('accessIds', $data ?? [], null);
        $this->setIfExists('durationMs', $data ?? [], null);
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

        if (!is_null($this->container['percentage']) && ($this->container['percentage'] > 100)) {
            $invalidProperties[] = "invalid value for 'percentage', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['percentage']) && ($this->container['percentage'] < 0)) {
            $invalidProperties[] = "invalid value for 'percentage', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['brightness']) && ($this->container['brightness'] > 100)) {
            $invalidProperties[] = "invalid value for 'brightness', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['brightness']) && ($this->container['brightness'] < 0)) {
            $invalidProperties[] = "invalid value for 'brightness', must be bigger than or equal to 0.";
        }

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

        if (!is_null($this->container['durationMs']) && ($this->container['durationMs'] > 31536000000)) {
            $invalidProperties[] = "invalid value for 'durationMs', must be smaller than or equal to 31536000000.";
        }

        if (!is_null($this->container['durationMs']) && ($this->container['durationMs'] < 0)) {
            $invalidProperties[] = "invalid value for 'durationMs', must be bigger than or equal to 0.";
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
     * Gets percentage
     *
     * @return int|null
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param int|null $percentage percentage
     *
     * @return self
     */
    public function setPercentage($percentage)
    {
        if (is_null($percentage)) {
            throw new \InvalidArgumentException('non-nullable percentage cannot be null');
        }

        if (($percentage > 100)) {
            throw new \InvalidArgumentException('invalid value for $percentage when calling CreateChannelReactionRequestActionParam., must be smaller than or equal to 100.');
        }
        if (($percentage < 0)) {
            throw new \InvalidArgumentException('invalid value for $percentage when calling CreateChannelReactionRequestActionParam., must be bigger than or equal to 0.');
        }

        $this->container['percentage'] = $percentage;

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
     * @param int|null $brightness brightness
     *
     * @return self
     */
    public function setBrightness($brightness)
    {
        if (is_null($brightness)) {
            throw new \InvalidArgumentException('non-nullable brightness cannot be null');
        }

        if (($brightness > 100)) {
            throw new \InvalidArgumentException('invalid value for $brightness when calling CreateChannelReactionRequestActionParam., must be smaller than or equal to 100.');
        }
        if (($brightness < 0)) {
            throw new \InvalidArgumentException('invalid value for $brightness when calling CreateChannelReactionRequestActionParam., must be bigger than or equal to 0.');
        }

        $this->container['brightness'] = $brightness;

        return $this;
    }

    /**
     * Gets color
     *
     * @return \Supla\ApiClient\Model\ChannelActionParamsRgbwOneOfColor|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param \Supla\ApiClient\Model\ChannelActionParamsRgbwOneOfColor|null $color color
     *
     * @return self
     */
    public function setColor($color)
    {
        if (is_null($color)) {
            throw new \InvalidArgumentException('non-nullable color cannot be null');
        }
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
        if (is_null($colorBrightness)) {
            throw new \InvalidArgumentException('non-nullable colorBrightness cannot be null');
        }

        if (($colorBrightness > 100)) {
            throw new \InvalidArgumentException('invalid value for $colorBrightness when calling CreateChannelReactionRequestActionParam., must be smaller than or equal to 100.');
        }
        if (($colorBrightness < 0)) {
            throw new \InvalidArgumentException('invalid value for $colorBrightness when calling CreateChannelReactionRequestActionParam., must be bigger than or equal to 0.');
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
        if (is_null($hue)) {
            throw new \InvalidArgumentException('non-nullable hue cannot be null');
        }

        if (($hue > 359)) {
            throw new \InvalidArgumentException('invalid value for $hue when calling CreateChannelReactionRequestActionParam., must be smaller than or equal to 359.');
        }
        if (($hue < 0)) {
            throw new \InvalidArgumentException('invalid value for $hue when calling CreateChannelReactionRequestActionParam., must be bigger than or equal to 0.');
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
        if (is_null($hsv)) {
            throw new \InvalidArgumentException('non-nullable hsv cannot be null');
        }
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
        if (is_null($rgb)) {
            throw new \InvalidArgumentException('non-nullable rgb cannot be null');
        }
        $this->container['rgb'] = $rgb;

        return $this;
    }

    /**
     * Gets sourceChannelId
     *
     * @return int|null
     */
    public function getSourceChannelId()
    {
        return $this->container['sourceChannelId'];
    }

    /**
     * Sets sourceChannelId
     *
     * @param int|null $sourceChannelId sourceChannelId
     *
     * @return self
     */
    public function setSourceChannelId($sourceChannelId)
    {
        if (is_null($sourceChannelId)) {
            throw new \InvalidArgumentException('non-nullable sourceChannelId cannot be null');
        }
        $this->container['sourceChannelId'] = $sourceChannelId;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body body
     *
     * @return self
     */
    public function setBody($body)
    {
        if (is_null($body)) {
            throw new \InvalidArgumentException('non-nullable body cannot be null');
        }
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets accessIds
     *
     * @return int[]|null
     */
    public function getAccessIds()
    {
        return $this->container['accessIds'];
    }

    /**
     * Sets accessIds
     *
     * @param int[]|null $accessIds accessIds
     *
     * @return self
     */
    public function setAccessIds($accessIds)
    {
        if (is_null($accessIds)) {
            throw new \InvalidArgumentException('non-nullable accessIds cannot be null');
        }
        $this->container['accessIds'] = $accessIds;

        return $this;
    }

    /**
     * Gets durationMs
     *
     * @return int|null
     */
    public function getDurationMs()
    {
        return $this->container['durationMs'];
    }

    /**
     * Sets durationMs
     *
     * @param int|null $durationMs durationMs
     *
     * @return self
     */
    public function setDurationMs($durationMs)
    {
        if (is_null($durationMs)) {
            throw new \InvalidArgumentException('non-nullable durationMs cannot be null');
        }

        if (($durationMs > 31536000000)) {
            throw new \InvalidArgumentException('invalid value for $durationMs when calling CreateChannelReactionRequestActionParam., must be smaller than or equal to 31536000000.');
        }
        if (($durationMs < 0)) {
            throw new \InvalidArgumentException('invalid value for $durationMs when calling CreateChannelReactionRequestActionParam., must be bigger than or equal to 0.');
        }

        $this->container['durationMs'] = $durationMs;

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


