<?php
/**
 * AccessTokenRequestBody
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
 * AccessTokenRequestBody Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccessTokenRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccessTokenRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'grantType' => 'string',
        'clientId' => 'string',
        'clientSecret' => 'string',
        'redirectUri' => 'string',
        'code' => 'string',
        'refreshToken' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'grantType' => null,
        'clientId' => null,
        'clientSecret' => null,
        'redirectUri' => null,
        'code' => null,
        'refreshToken' => null
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
        'grantType' => 'grant_type',
        'clientId' => 'client_id',
        'clientSecret' => 'client_secret',
        'redirectUri' => 'redirect_uri',
        'code' => 'code',
        'refreshToken' => 'refresh_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'grantType' => 'setGrantType',
        'clientId' => 'setClientId',
        'clientSecret' => 'setClientSecret',
        'redirectUri' => 'setRedirectUri',
        'code' => 'setCode',
        'refreshToken' => 'setRefreshToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'grantType' => 'getGrantType',
        'clientId' => 'getClientId',
        'clientSecret' => 'getClientSecret',
        'redirectUri' => 'getRedirectUri',
        'code' => 'getCode',
        'refreshToken' => 'getRefreshToken'
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

    const GRANT_TYPE_AUTHORIZATION_CODE = 'authorization_code';
    const GRANT_TYPE_REFRESH_TOKEN = 'refresh_token';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGrantTypeAllowableValues()
    {
        return [
            self::GRANT_TYPE_AUTHORIZATION_CODE,
            self::GRANT_TYPE_REFRESH_TOKEN,
        ];
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
        $this->container['grantType'] = $data['grantType'] ?? null;
        $this->container['clientId'] = $data['clientId'] ?? null;
        $this->container['clientSecret'] = $data['clientSecret'] ?? null;
        $this->container['redirectUri'] = $data['redirectUri'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['refreshToken'] = $data['refreshToken'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['grantType'] === null) {
            $invalidProperties[] = "'grantType' can't be null";
        }
        $allowedValues = $this->getGrantTypeAllowableValues();
        if (!is_null($this->container['grantType']) && !in_array($this->container['grantType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'grantType', must be one of '%s'",
                $this->container['grantType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['clientId'] === null) {
            $invalidProperties[] = "'clientId' can't be null";
        }
        if ($this->container['clientSecret'] === null) {
            $invalidProperties[] = "'clientSecret' can't be null";
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
     * Gets grantType
     *
     * @return string
     */
    public function getGrantType()
    {
        return $this->container['grantType'];
    }

    /**
     * Sets grantType
     *
     * @param string $grantType grantType
     *
     * @return self
     */
    public function setGrantType($grantType)
    {
        $allowedValues = $this->getGrantTypeAllowableValues();
        if (!in_array($grantType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'grantType', must be one of '%s'",
                    $grantType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['grantType'] = $grantType;

        return $this;
    }

    /**
     * Gets clientId
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     *
     * @param string $clientId clientId
     *
     * @return self
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets clientSecret
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     *
     * @param string $clientSecret clientSecret
     *
     * @return self
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

        return $this;
    }

    /**
     * Gets redirectUri
     *
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->container['redirectUri'];
    }

    /**
     * Sets redirectUri
     *
     * @param string|null $redirectUri redirectUri
     *
     * @return self
     */
    public function setRedirectUri($redirectUri)
    {
        $this->container['redirectUri'] = $redirectUri;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets refreshToken
     *
     * @return string|null
     */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
     * Sets refreshToken
     *
     * @param string|null $refreshToken refreshToken
     *
     * @return self
     */
    public function setRefreshToken($refreshToken)
    {
        $this->container['refreshToken'] = $refreshToken;

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


