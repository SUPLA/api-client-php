<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'shortUniqueId' => 'string',
        'email' => 'string',
        'enabled' => 'bool',
        'timezone' => 'string',
        'clientsRegistrationEnabled' => '\DateTime',
        'ioDevicesRegistrationEnabled' => '\DateTime',
        'limits' => '\Supla\ApiClient\Model\UserLimits',
        'apiRateLimit' => '\Supla\ApiClient\Model\UserApiRateLimit',
        'agreements' => '\Supla\ApiClient\Model\UserAgreements',
        'locale' => 'string',
        'preferences' => 'object'
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
        'shortUniqueId' => null,
        'email' => null,
        'enabled' => null,
        'timezone' => null,
        'clientsRegistrationEnabled' => 'date-time',
        'ioDevicesRegistrationEnabled' => 'date-time',
        'limits' => null,
        'apiRateLimit' => null,
        'agreements' => null,
        'locale' => null,
        'preferences' => null
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
        'shortUniqueId' => 'shortUniqueId',
        'email' => 'email',
        'enabled' => 'enabled',
        'timezone' => 'timezone',
        'clientsRegistrationEnabled' => 'clientsRegistrationEnabled',
        'ioDevicesRegistrationEnabled' => 'ioDevicesRegistrationEnabled',
        'limits' => 'limits',
        'apiRateLimit' => 'apiRateLimit',
        'agreements' => 'agreements',
        'locale' => 'locale',
        'preferences' => 'preferences'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'shortUniqueId' => 'setShortUniqueId',
        'email' => 'setEmail',
        'enabled' => 'setEnabled',
        'timezone' => 'setTimezone',
        'clientsRegistrationEnabled' => 'setClientsRegistrationEnabled',
        'ioDevicesRegistrationEnabled' => 'setIoDevicesRegistrationEnabled',
        'limits' => 'setLimits',
        'apiRateLimit' => 'setApiRateLimit',
        'agreements' => 'setAgreements',
        'locale' => 'setLocale',
        'preferences' => 'setPreferences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'shortUniqueId' => 'getShortUniqueId',
        'email' => 'getEmail',
        'enabled' => 'getEnabled',
        'timezone' => 'getTimezone',
        'clientsRegistrationEnabled' => 'getClientsRegistrationEnabled',
        'ioDevicesRegistrationEnabled' => 'getIoDevicesRegistrationEnabled',
        'limits' => 'getLimits',
        'apiRateLimit' => 'getApiRateLimit',
        'agreements' => 'getAgreements',
        'locale' => 'getLocale',
        'preferences' => 'getPreferences'
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
        $this->container['shortUniqueId'] = $data['shortUniqueId'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['timezone'] = $data['timezone'] ?? null;
        $this->container['clientsRegistrationEnabled'] = $data['clientsRegistrationEnabled'] ?? null;
        $this->container['ioDevicesRegistrationEnabled'] = $data['ioDevicesRegistrationEnabled'] ?? null;
        $this->container['limits'] = $data['limits'] ?? null;
        $this->container['apiRateLimit'] = $data['apiRateLimit'] ?? null;
        $this->container['agreements'] = $data['agreements'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['preferences'] = $data['preferences'] ?? null;
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
     * Gets shortUniqueId
     *
     * @return string|null
     */
    public function getShortUniqueId()
    {
        return $this->container['shortUniqueId'];
    }

    /**
     * Sets shortUniqueId
     *
     * @param string|null $shortUniqueId shortUniqueId
     *
     * @return self
     */
    public function setShortUniqueId($shortUniqueId)
    {
        $this->container['shortUniqueId'] = $shortUniqueId;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone timezone
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets clientsRegistrationEnabled
     *
     * @return \DateTime|null
     */
    public function getClientsRegistrationEnabled()
    {
        return $this->container['clientsRegistrationEnabled'];
    }

    /**
     * Sets clientsRegistrationEnabled
     *
     * @param \DateTime|null $clientsRegistrationEnabled clientsRegistrationEnabled
     *
     * @return self
     */
    public function setClientsRegistrationEnabled($clientsRegistrationEnabled)
    {
        $this->container['clientsRegistrationEnabled'] = $clientsRegistrationEnabled;

        return $this;
    }

    /**
     * Gets ioDevicesRegistrationEnabled
     *
     * @return \DateTime|null
     */
    public function getIoDevicesRegistrationEnabled()
    {
        return $this->container['ioDevicesRegistrationEnabled'];
    }

    /**
     * Sets ioDevicesRegistrationEnabled
     *
     * @param \DateTime|null $ioDevicesRegistrationEnabled ioDevicesRegistrationEnabled
     *
     * @return self
     */
    public function setIoDevicesRegistrationEnabled($ioDevicesRegistrationEnabled)
    {
        $this->container['ioDevicesRegistrationEnabled'] = $ioDevicesRegistrationEnabled;

        return $this;
    }

    /**
     * Gets limits
     *
     * @return \Supla\ApiClient\Model\UserLimits|null
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \Supla\ApiClient\Model\UserLimits|null $limits limits
     *
     * @return self
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets apiRateLimit
     *
     * @return \Supla\ApiClient\Model\UserApiRateLimit|null
     */
    public function getApiRateLimit()
    {
        return $this->container['apiRateLimit'];
    }

    /**
     * Sets apiRateLimit
     *
     * @param \Supla\ApiClient\Model\UserApiRateLimit|null $apiRateLimit apiRateLimit
     *
     * @return self
     */
    public function setApiRateLimit($apiRateLimit)
    {
        $this->container['apiRateLimit'] = $apiRateLimit;

        return $this;
    }

    /**
     * Gets agreements
     *
     * @return \Supla\ApiClient\Model\UserAgreements|null
     */
    public function getAgreements()
    {
        return $this->container['agreements'];
    }

    /**
     * Sets agreements
     *
     * @param \Supla\ApiClient\Model\UserAgreements|null $agreements agreements
     *
     * @return self
     */
    public function setAgreements($agreements)
    {
        $this->container['agreements'] = $agreements;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets preferences
     *
     * @return object|null
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param object|null $preferences preferences
     *
     * @return self
     */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;

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


