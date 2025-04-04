<?php
/**
 * ChannelRelationsCount
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
 * ChannelRelationsCount Class Doc Comment
 *
 * @category Class
 * @description Counts of related entities.
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelRelationsCount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Channel_relationsCount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channelGroups' => 'int',
        'directLinks' => 'int',
        'schedules' => 'int',
        'scenes' => 'int',
        'sceneOperations' => 'int',
        'actionTriggers' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channelGroups' => null,
        'directLinks' => null,
        'schedules' => null,
        'scenes' => null,
        'sceneOperations' => null,
        'actionTriggers' => null
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
        'channelGroups' => 'channelGroups',
        'directLinks' => 'directLinks',
        'schedules' => 'schedules',
        'scenes' => 'scenes',
        'sceneOperations' => 'sceneOperations',
        'actionTriggers' => 'actionTriggers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channelGroups' => 'setChannelGroups',
        'directLinks' => 'setDirectLinks',
        'schedules' => 'setSchedules',
        'scenes' => 'setScenes',
        'sceneOperations' => 'setSceneOperations',
        'actionTriggers' => 'setActionTriggers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channelGroups' => 'getChannelGroups',
        'directLinks' => 'getDirectLinks',
        'schedules' => 'getSchedules',
        'scenes' => 'getScenes',
        'sceneOperations' => 'getSceneOperations',
        'actionTriggers' => 'getActionTriggers'
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
        $this->container['channelGroups'] = $data['channelGroups'] ?? null;
        $this->container['directLinks'] = $data['directLinks'] ?? null;
        $this->container['schedules'] = $data['schedules'] ?? null;
        $this->container['scenes'] = $data['scenes'] ?? null;
        $this->container['sceneOperations'] = $data['sceneOperations'] ?? null;
        $this->container['actionTriggers'] = $data['actionTriggers'] ?? null;
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
     * Gets channelGroups
     *
     * @return int|null
     */
    public function getChannelGroups()
    {
        return $this->container['channelGroups'];
    }

    /**
     * Sets channelGroups
     *
     * @param int|null $channelGroups channelGroups
     *
     * @return self
     */
    public function setChannelGroups($channelGroups)
    {
        $this->container['channelGroups'] = $channelGroups;

        return $this;
    }

    /**
     * Gets directLinks
     *
     * @return int|null
     */
    public function getDirectLinks()
    {
        return $this->container['directLinks'];
    }

    /**
     * Sets directLinks
     *
     * @param int|null $directLinks directLinks
     *
     * @return self
     */
    public function setDirectLinks($directLinks)
    {
        $this->container['directLinks'] = $directLinks;

        return $this;
    }

    /**
     * Gets schedules
     *
     * @return int|null
     */
    public function getSchedules()
    {
        return $this->container['schedules'];
    }

    /**
     * Sets schedules
     *
     * @param int|null $schedules schedules
     *
     * @return self
     */
    public function setSchedules($schedules)
    {
        $this->container['schedules'] = $schedules;

        return $this;
    }

    /**
     * Gets scenes
     *
     * @return int|null
     */
    public function getScenes()
    {
        return $this->container['scenes'];
    }

    /**
     * Sets scenes
     *
     * @param int|null $scenes scenes
     *
     * @return self
     */
    public function setScenes($scenes)
    {
        $this->container['scenes'] = $scenes;

        return $this;
    }

    /**
     * Gets sceneOperations
     *
     * @return int|null
     */
    public function getSceneOperations()
    {
        return $this->container['sceneOperations'];
    }

    /**
     * Sets sceneOperations
     *
     * @param int|null $sceneOperations sceneOperations
     *
     * @return self
     */
    public function setSceneOperations($sceneOperations)
    {
        $this->container['sceneOperations'] = $sceneOperations;

        return $this;
    }

    /**
     * Gets actionTriggers
     *
     * @return int|null
     */
    public function getActionTriggers()
    {
        return $this->container['actionTriggers'];
    }

    /**
     * Sets actionTriggers
     *
     * @param int|null $actionTriggers actionTriggers
     *
     * @return self
     */
    public function setActionTriggers($actionTriggers)
    {
        $this->container['actionTriggers'] = $actionTriggers;

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


