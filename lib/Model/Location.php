<?php
/**
 * Location
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SUPLA Cloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Location Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Location implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Location';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'caption' => 'string',
        'enabled' => 'bool',
        'iodevices_ids' => 'int[]',
        'channel_groups_ids' => 'int[]',
        'channels_ids' => 'int[]',
        'access_ids_ids' => 'int[]',
        'password' => 'string',
        'iodevices' => '\Swagger\Client\Model\Device[]',
        'channel_groups' => '\Swagger\Client\Model\ChannelGroup[]',
        'access_ids' => '\Swagger\Client\Model\AccessID[]',
        'channels' => '\Swagger\Client\Model\Channel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'caption' => null,
        'enabled' => null,
        'iodevices_ids' => null,
        'channel_groups_ids' => null,
        'channels_ids' => null,
        'access_ids_ids' => null,
        'password' => null,
        'iodevices' => null,
        'channel_groups' => null,
        'access_ids' => null,
        'channels' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
        'enabled' => 'enabled',
        'iodevices_ids' => 'iodevicesIds',
        'channel_groups_ids' => 'channelGroupsIds',
        'channels_ids' => 'channelsIds',
        'access_ids_ids' => 'accessIdsIds',
        'password' => 'password',
        'iodevices' => 'iodevices',
        'channel_groups' => 'channelGroups',
        'access_ids' => 'accessIds',
        'channels' => 'channels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'caption' => 'setCaption',
        'enabled' => 'setEnabled',
        'iodevices_ids' => 'setIodevicesIds',
        'channel_groups_ids' => 'setChannelGroupsIds',
        'channels_ids' => 'setChannelsIds',
        'access_ids_ids' => 'setAccessIdsIds',
        'password' => 'setPassword',
        'iodevices' => 'setIodevices',
        'channel_groups' => 'setChannelGroups',
        'access_ids' => 'setAccessIds',
        'channels' => 'setChannels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'caption' => 'getCaption',
        'enabled' => 'getEnabled',
        'iodevices_ids' => 'getIodevicesIds',
        'channel_groups_ids' => 'getChannelGroupsIds',
        'channels_ids' => 'getChannelsIds',
        'access_ids_ids' => 'getAccessIdsIds',
        'password' => 'getPassword',
        'iodevices' => 'getIodevices',
        'channel_groups' => 'getChannelGroups',
        'access_ids' => 'getAccessIds',
        'channels' => 'getChannels'
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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['caption'] = isset($data['caption']) ? $data['caption'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['iodevices_ids'] = isset($data['iodevices_ids']) ? $data['iodevices_ids'] : null;
        $this->container['channel_groups_ids'] = isset($data['channel_groups_ids']) ? $data['channel_groups_ids'] : null;
        $this->container['channels_ids'] = isset($data['channels_ids']) ? $data['channels_ids'] : null;
        $this->container['access_ids_ids'] = isset($data['access_ids_ids']) ? $data['access_ids_ids'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['iodevices'] = isset($data['iodevices']) ? $data['iodevices'] : null;
        $this->container['channel_groups'] = isset($data['channel_groups']) ? $data['channel_groups'] : null;
        $this->container['access_ids'] = isset($data['access_ids']) ? $data['access_ids'] : null;
        $this->container['channels'] = isset($data['channels']) ? $data['channels'] : null;
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

        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Location identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string $caption Location caption
     *
     * @return $this
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled `true` if the location is enabled, `false` otherwise
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets iodevices_ids
     *
     * @return int[]
     */
    public function getIodevicesIds()
    {
        return $this->container['iodevices_ids'];
    }

    /**
     * Sets iodevices_ids
     *
     * @param int[] $iodevices_ids array containing the IO Devices identifiers assigned to this location
     *
     * @return $this
     */
    public function setIodevicesIds($iodevices_ids)
    {
        $this->container['iodevices_ids'] = $iodevices_ids;

        return $this;
    }

    /**
     * Gets channel_groups_ids
     *
     * @return int[]
     */
    public function getChannelGroupsIds()
    {
        return $this->container['channel_groups_ids'];
    }

    /**
     * Sets channel_groups_ids
     *
     * @param int[] $channel_groups_ids array containing the Channel groups identifiers assigned to this location
     *
     * @return $this
     */
    public function setChannelGroupsIds($channel_groups_ids)
    {
        $this->container['channel_groups_ids'] = $channel_groups_ids;

        return $this;
    }

    /**
     * Gets channels_ids
     *
     * @return int[]
     */
    public function getChannelsIds()
    {
        return $this->container['channels_ids'];
    }

    /**
     * Sets channels_ids
     *
     * @param int[] $channels_ids array containing the Channels identifiers expicitely assigned to this location
     *
     * @return $this
     */
    public function setChannelsIds($channels_ids)
    {
        $this->container['channels_ids'] = $channels_ids;

        return $this;
    }

    /**
     * Gets access_ids_ids
     *
     * @return int[]
     */
    public function getAccessIdsIds()
    {
        return $this->container['access_ids_ids'];
    }

    /**
     * Sets access_ids_ids
     *
     * @param int[] $access_ids_ids array containing the Access Identifiers identifiers assigned to this location
     *
     * @return $this
     */
    public function setAccessIdsIds($access_ids_ids)
    {
        $this->container['access_ids_ids'] = $access_ids_ids;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Location password (plain text). Returned only if requested by the `include` parameter.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets iodevices
     *
     * @return \Swagger\Client\Model\Device[]
     */
    public function getIodevices()
    {
        return $this->container['iodevices'];
    }

    /**
     * Sets iodevices
     *
     * @param \Swagger\Client\Model\Device[] $iodevices Returned only if requested by the `include` parameter.
     *
     * @return $this
     */
    public function setIodevices($iodevices)
    {
        $this->container['iodevices'] = $iodevices;

        return $this;
    }

    /**
     * Gets channel_groups
     *
     * @return \Swagger\Client\Model\ChannelGroup[]
     */
    public function getChannelGroups()
    {
        return $this->container['channel_groups'];
    }

    /**
     * Sets channel_groups
     *
     * @param \Swagger\Client\Model\ChannelGroup[] $channel_groups Returned only if requested by the `include` parameter.
     *
     * @return $this
     */
    public function setChannelGroups($channel_groups)
    {
        $this->container['channel_groups'] = $channel_groups;

        return $this;
    }

    /**
     * Gets access_ids
     *
     * @return \Swagger\Client\Model\AccessID[]
     */
    public function getAccessIds()
    {
        return $this->container['access_ids'];
    }

    /**
     * Sets access_ids
     *
     * @param \Swagger\Client\Model\AccessID[] $access_ids Returned only if requested by the `include` parameter.
     *
     * @return $this
     */
    public function setAccessIds($access_ids)
    {
        $this->container['access_ids'] = $access_ids;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return \Swagger\Client\Model\Channel[]
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param \Swagger\Client\Model\Channel[] $channels Returned only if requested by the `include` parameter.
     *
     * @return $this
     */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
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
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
