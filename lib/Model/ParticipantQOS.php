<?php
/**
 * ParticipantQOS
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zoom API
 *
 * The Zoom API allows developers to safely and securely access information from Zoom. You can use this API to build private services or public applications on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [Authorization Guide](https://marketplace.zoom.us/docs/guides/authorization/credentials). All endpoints are available via `https` and are located at `api.zoom.us/v2/`.  For instance you can list all users on an account via `https://api.zoom.us/v2/users/`.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: developersupport@zoom.us
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
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
 * ParticipantQOS Class Doc Comment
 *
 * @category Class
 * @description Participant QOS.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParticipantQOS implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Participant QOS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => 'string',
        'user_name' => 'string',
        'device' => 'string',
        'ip_address' => 'string',
        'location' => 'string',
        'join_time' => '\DateTime',
        'leave_time' => '\DateTime',
        'pc_name' => 'string',
        'domain' => 'string',
        'mac_addr' => 'string',
        'harddisk_id' => 'string',
        'version' => 'string',
        'user_qos' => '\Swagger\Client\Model\ParticipantQOSUserQos[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_id' => 'uuid',
        'user_name' => null,
        'device' => null,
        'ip_address' => null,
        'location' => null,
        'join_time' => 'date-time',
        'leave_time' => 'date-time',
        'pc_name' => null,
        'domain' => null,
        'mac_addr' => null,
        'harddisk_id' => null,
        'version' => null,
        'user_qos' => null
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
        'user_id' => 'user_id',
        'user_name' => 'user_name',
        'device' => 'device',
        'ip_address' => 'ip_address',
        'location' => 'location',
        'join_time' => 'join_time',
        'leave_time' => 'leave_time',
        'pc_name' => 'pc_name',
        'domain' => 'domain',
        'mac_addr' => 'mac_addr',
        'harddisk_id' => 'harddisk_id',
        'version' => 'version',
        'user_qos' => 'user_qos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'user_name' => 'setUserName',
        'device' => 'setDevice',
        'ip_address' => 'setIpAddress',
        'location' => 'setLocation',
        'join_time' => 'setJoinTime',
        'leave_time' => 'setLeaveTime',
        'pc_name' => 'setPcName',
        'domain' => 'setDomain',
        'mac_addr' => 'setMacAddr',
        'harddisk_id' => 'setHarddiskId',
        'version' => 'setVersion',
        'user_qos' => 'setUserQos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'user_name' => 'getUserName',
        'device' => 'getDevice',
        'ip_address' => 'getIpAddress',
        'location' => 'getLocation',
        'join_time' => 'getJoinTime',
        'leave_time' => 'getLeaveTime',
        'pc_name' => 'getPcName',
        'domain' => 'getDomain',
        'mac_addr' => 'getMacAddr',
        'harddisk_id' => 'getHarddiskId',
        'version' => 'getVersion',
        'user_qos' => 'getUserQos'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['join_time'] = isset($data['join_time']) ? $data['join_time'] : null;
        $this->container['leave_time'] = isset($data['leave_time']) ? $data['leave_time'] : null;
        $this->container['pc_name'] = isset($data['pc_name']) ? $data['pc_name'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['mac_addr'] = isset($data['mac_addr']) ? $data['mac_addr'] : null;
        $this->container['harddisk_id'] = isset($data['harddisk_id']) ? $data['harddisk_id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['user_qos'] = isset($data['user_qos']) ? $data['user_qos'] : null;
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
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id Participant ID.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name Participant display name.
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string $device The type of device using which the participant joined the meeting.
     *
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address Participant's IP address.
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Participant's location.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets join_time
     *
     * @return \DateTime
     */
    public function getJoinTime()
    {
        return $this->container['join_time'];
    }

    /**
     * Sets join_time
     *
     * @param \DateTime $join_time The time at which participant joined the meeting.
     *
     * @return $this
     */
    public function setJoinTime($join_time)
    {
        $this->container['join_time'] = $join_time;

        return $this;
    }

    /**
     * Gets leave_time
     *
     * @return \DateTime
     */
    public function getLeaveTime()
    {
        return $this->container['leave_time'];
    }

    /**
     * Sets leave_time
     *
     * @param \DateTime $leave_time The time at which participant left the meeting.
     *
     * @return $this
     */
    public function setLeaveTime($leave_time)
    {
        $this->container['leave_time'] = $leave_time;

        return $this;
    }

    /**
     * Gets pc_name
     *
     * @return string
     */
    public function getPcName()
    {
        return $this->container['pc_name'];
    }

    /**
     * Sets pc_name
     *
     * @param string $pc_name Participant's PC name.
     *
     * @return $this
     */
    public function setPcName($pc_name)
    {
        $this->container['pc_name'] = $pc_name;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain Participant's PC domain.
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets mac_addr
     *
     * @return string
     */
    public function getMacAddr()
    {
        return $this->container['mac_addr'];
    }

    /**
     * Sets mac_addr
     *
     * @param string $mac_addr Participant's MAC address.
     *
     * @return $this
     */
    public function setMacAddr($mac_addr)
    {
        $this->container['mac_addr'] = $mac_addr;

        return $this;
    }

    /**
     * Gets harddisk_id
     *
     * @return string
     */
    public function getHarddiskId()
    {
        return $this->container['harddisk_id'];
    }

    /**
     * Sets harddisk_id
     *
     * @param string $harddisk_id Participant's hard disk ID.
     *
     * @return $this
     */
    public function setHarddiskId($harddisk_id)
    {
        $this->container['harddisk_id'] = $harddisk_id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version Participant's Zoom Client version.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets user_qos
     *
     * @return \Swagger\Client\Model\ParticipantQOSUserQos[]
     */
    public function getUserQos()
    {
        return $this->container['user_qos'];
    }

    /**
     * Sets user_qos
     *
     * @param \Swagger\Client\Model\ParticipantQOSUserQos[] $user_qos Quality of service provided to the user.
     *
     * @return $this
     */
    public function setUserQos($user_qos)
    {
        $this->container['user_qos'] = $user_qos;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


