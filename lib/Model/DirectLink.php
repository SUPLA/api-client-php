<?php
/**
 * DirectLink
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

use \ArrayAccess;
use \Supla\ApiClient\ObjectSerializer;

/**
 * DirectLink Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DirectLink implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DirectLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'caption' => 'string',
        'active' => 'bool',
        'disableHttpGet' => 'bool',
        'enabled' => 'bool',
        'subjectType' => '\Supla\ApiClient\Model\ActionableSubjectTypeNames',
        'subjectId' => 'int',
        'lastUsed' => '\DateTime',
        'lastIpv4' => 'string',
        'userId' => 'int',
        'executionsLimit' => 'int',
        'allowedActions' => '\Supla\ApiClient\Model\ChannelFunctionActionEnumNames[]',
        'activeDateRange' => '\Supla\ApiClient\Model\DirectLinkActiveDateRange',
        'subject' => '\Supla\ApiClient\Model\ActionableSubject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'caption' => null,
        'active' => null,
        'disableHttpGet' => null,
        'enabled' => null,
        'subjectType' => null,
        'subjectId' => null,
        'lastUsed' => 'date-time',
        'lastIpv4' => 'ipv4',
        'userId' => null,
        'executionsLimit' => null,
        'allowedActions' => null,
        'activeDateRange' => null,
        'subject' => null
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
        'id' => 'id',
        'caption' => 'caption',
        'active' => 'active',
        'disableHttpGet' => 'disableHttpGet',
        'enabled' => 'enabled',
        'subjectType' => 'subjectType',
        'subjectId' => 'subjectId',
        'lastUsed' => 'lastUsed',
        'lastIpv4' => 'lastIpv4',
        'userId' => 'userId',
        'executionsLimit' => 'executionsLimit',
        'allowedActions' => 'allowedActions',
        'activeDateRange' => 'activeDateRange',
        'subject' => 'subject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'caption' => 'setCaption',
        'active' => 'setActive',
        'disableHttpGet' => 'setDisableHttpGet',
        'enabled' => 'setEnabled',
        'subjectType' => 'setSubjectType',
        'subjectId' => 'setSubjectId',
        'lastUsed' => 'setLastUsed',
        'lastIpv4' => 'setLastIpv4',
        'userId' => 'setUserId',
        'executionsLimit' => 'setExecutionsLimit',
        'allowedActions' => 'setAllowedActions',
        'activeDateRange' => 'setActiveDateRange',
        'subject' => 'setSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'caption' => 'getCaption',
        'active' => 'getActive',
        'disableHttpGet' => 'getDisableHttpGet',
        'enabled' => 'getEnabled',
        'subjectType' => 'getSubjectType',
        'subjectId' => 'getSubjectId',
        'lastUsed' => 'getLastUsed',
        'lastIpv4' => 'getLastIpv4',
        'userId' => 'getUserId',
        'executionsLimit' => 'getExecutionsLimit',
        'allowedActions' => 'getAllowedActions',
        'activeDateRange' => 'getActiveDateRange',
        'subject' => 'getSubject'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['caption'] = $data['caption'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['disableHttpGet'] = $data['disableHttpGet'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['subjectType'] = $data['subjectType'] ?? null;
        $this->container['subjectId'] = $data['subjectId'] ?? null;
        $this->container['lastUsed'] = $data['lastUsed'] ?? null;
        $this->container['lastIpv4'] = $data['lastIpv4'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
        $this->container['executionsLimit'] = $data['executionsLimit'] ?? null;
        $this->container['allowedActions'] = $data['allowedActions'] ?? null;
        $this->container['activeDateRange'] = $data['activeDateRange'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Identifier
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets caption
     *
     * @return string|null
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string|null $caption Caption set by the user
     *
     * @return self
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets disableHttpGet
     *
     * @return bool|null
     */
    public function getDisableHttpGet()
    {
        return $this->container['disableHttpGet'];
    }

    /**
     * Sets disableHttpGet
     *
     * @param bool|null $disableHttpGet disableHttpGet
     *
     * @return self
     */
    public function setDisableHttpGet($disableHttpGet)
    {
        $this->container['disableHttpGet'] = $disableHttpGet;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets subjectType
     *
     * @return \Supla\ApiClient\Model\ActionableSubjectTypeNames|null
     */
    public function getSubjectType()
    {
        return $this->container['subjectType'];
    }

    /**
     * Sets subjectType
     *
     * @param \Supla\ApiClient\Model\ActionableSubjectTypeNames|null $subjectType subjectType
     *
     * @return self
     */
    public function setSubjectType($subjectType)
    {
        $this->container['subjectType'] = $subjectType;

        return $this;
    }

    /**
     * Gets subjectId
     *
     * @return int|null
     */
    public function getSubjectId()
    {
        return $this->container['subjectId'];
    }

    /**
     * Sets subjectId
     *
     * @param int|null $subjectId subjectId
     *
     * @return self
     */
    public function setSubjectId($subjectId)
    {
        $this->container['subjectId'] = $subjectId;

        return $this;
    }

    /**
     * Gets lastUsed
     *
     * @return \DateTime|null
     */
    public function getLastUsed()
    {
        return $this->container['lastUsed'];
    }

    /**
     * Sets lastUsed
     *
     * @param \DateTime|null $lastUsed lastUsed
     *
     * @return self
     */
    public function setLastUsed($lastUsed)
    {
        $this->container['lastUsed'] = $lastUsed;

        return $this;
    }

    /**
     * Gets lastIpv4
     *
     * @return string|null
     */
    public function getLastIpv4()
    {
        return $this->container['lastIpv4'];
    }

    /**
     * Sets lastIpv4
     *
     * @param string|null $lastIpv4 lastIpv4
     *
     * @return self
     */
    public function setLastIpv4($lastIpv4)
    {
        $this->container['lastIpv4'] = $lastIpv4;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int|null $userId userId
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets executionsLimit
     *
     * @return int|null
     */
    public function getExecutionsLimit()
    {
        return $this->container['executionsLimit'];
    }

    /**
     * Sets executionsLimit
     *
     * @param int|null $executionsLimit executionsLimit
     *
     * @return self
     */
    public function setExecutionsLimit($executionsLimit)
    {
        $this->container['executionsLimit'] = $executionsLimit;

        return $this;
    }

    /**
     * Gets allowedActions
     *
     * @return \Supla\ApiClient\Model\ChannelFunctionActionEnumNames[]|null
     */
    public function getAllowedActions()
    {
        return $this->container['allowedActions'];
    }

    /**
     * Sets allowedActions
     *
     * @param \Supla\ApiClient\Model\ChannelFunctionActionEnumNames[]|null $allowedActions allowedActions
     *
     * @return self
     */
    public function setAllowedActions($allowedActions)
    {
        $this->container['allowedActions'] = $allowedActions;

        return $this;
    }

    /**
     * Gets activeDateRange
     *
     * @return \Supla\ApiClient\Model\DirectLinkActiveDateRange|null
     */
    public function getActiveDateRange()
    {
        return $this->container['activeDateRange'];
    }

    /**
     * Sets activeDateRange
     *
     * @param \Supla\ApiClient\Model\DirectLinkActiveDateRange|null $activeDateRange activeDateRange
     *
     * @return self
     */
    public function setActiveDateRange($activeDateRange)
    {
        $this->container['activeDateRange'] = $activeDateRange;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return \Supla\ApiClient\Model\ActionableSubject|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param \Supla\ApiClient\Model\ActionableSubject|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

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


