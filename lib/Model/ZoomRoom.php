<?php
/**
 * ZoomRoom
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
 * ZoomRoom Class Doc Comment
 *
 * @category Class
 * @description Zoom room.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ZoomRoom implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Zoom Room';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'room_name' => 'string',
        'calender_name' => 'string',
        'email' => 'string',
        'account_type' => 'string',
        'status' => 'string',
        'device_ip' => 'string',
        'camera' => 'string',
        'microphone' => 'string',
        'speaker' => 'string',
        'last_start_time' => 'string',
        'location' => 'string',
        'health' => 'string',
        'issues' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'room_name' => null,
        'calender_name' => null,
        'email' => null,
        'account_type' => null,
        'status' => null,
        'device_ip' => null,
        'camera' => null,
        'microphone' => null,
        'speaker' => null,
        'last_start_time' => null,
        'location' => null,
        'health' => null,
        'issues' => null
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
        'room_name' => 'room_name',
        'calender_name' => 'calender_name',
        'email' => 'email',
        'account_type' => 'account_type',
        'status' => 'status',
        'device_ip' => 'device_ip',
        'camera' => 'camera',
        'microphone' => 'microphone',
        'speaker' => 'speaker',
        'last_start_time' => 'last_start_time',
        'location' => 'location',
        'health' => 'health',
        'issues' => 'issues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'room_name' => 'setRoomName',
        'calender_name' => 'setCalenderName',
        'email' => 'setEmail',
        'account_type' => 'setAccountType',
        'status' => 'setStatus',
        'device_ip' => 'setDeviceIp',
        'camera' => 'setCamera',
        'microphone' => 'setMicrophone',
        'speaker' => 'setSpeaker',
        'last_start_time' => 'setLastStartTime',
        'location' => 'setLocation',
        'health' => 'setHealth',
        'issues' => 'setIssues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'room_name' => 'getRoomName',
        'calender_name' => 'getCalenderName',
        'email' => 'getEmail',
        'account_type' => 'getAccountType',
        'status' => 'getStatus',
        'device_ip' => 'getDeviceIp',
        'camera' => 'getCamera',
        'microphone' => 'getMicrophone',
        'speaker' => 'getSpeaker',
        'last_start_time' => 'getLastStartTime',
        'location' => 'getLocation',
        'health' => 'getHealth',
        'issues' => 'getIssues'
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
        $this->container['room_name'] = isset($data['room_name']) ? $data['room_name'] : null;
        $this->container['calender_name'] = isset($data['calender_name']) ? $data['calender_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['device_ip'] = isset($data['device_ip']) ? $data['device_ip'] : null;
        $this->container['camera'] = isset($data['camera']) ? $data['camera'] : null;
        $this->container['microphone'] = isset($data['microphone']) ? $data['microphone'] : null;
        $this->container['speaker'] = isset($data['speaker']) ? $data['speaker'] : null;
        $this->container['last_start_time'] = isset($data['last_start_time']) ? $data['last_start_time'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['health'] = isset($data['health']) ? $data['health'] : null;
        $this->container['issues'] = isset($data['issues']) ? $data['issues'] : null;
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Zoom room ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets room_name
     *
     * @return string
     */
    public function getRoomName()
    {
        return $this->container['room_name'];
    }

    /**
     * Sets room_name
     *
     * @param string $room_name Zoom room name.
     *
     * @return $this
     */
    public function setRoomName($room_name)
    {
        $this->container['room_name'] = $room_name;

        return $this;
    }

    /**
     * Gets calender_name
     *
     * @return string
     */
    public function getCalenderName()
    {
        return $this->container['calender_name'];
    }

    /**
     * Sets calender_name
     *
     * @param string $calender_name Zoom calendar name.
     *
     * @return $this
     */
    public function setCalenderName($calender_name)
    {
        $this->container['calender_name'] = $calender_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Zoom room email.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string $account_type Zoom room email type.
     *
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Zoom room status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets device_ip
     *
     * @return string
     */
    public function getDeviceIp()
    {
        return $this->container['device_ip'];
    }

    /**
     * Sets device_ip
     *
     * @param string $device_ip Zoom room device IP.
     *
     * @return $this
     */
    public function setDeviceIp($device_ip)
    {
        $this->container['device_ip'] = $device_ip;

        return $this;
    }

    /**
     * Gets camera
     *
     * @return string
     */
    public function getCamera()
    {
        return $this->container['camera'];
    }

    /**
     * Sets camera
     *
     * @param string $camera Zoom room camera.
     *
     * @return $this
     */
    public function setCamera($camera)
    {
        $this->container['camera'] = $camera;

        return $this;
    }

    /**
     * Gets microphone
     *
     * @return string
     */
    public function getMicrophone()
    {
        return $this->container['microphone'];
    }

    /**
     * Sets microphone
     *
     * @param string $microphone Zoom room microphone.
     *
     * @return $this
     */
    public function setMicrophone($microphone)
    {
        $this->container['microphone'] = $microphone;

        return $this;
    }

    /**
     * Gets speaker
     *
     * @return string
     */
    public function getSpeaker()
    {
        return $this->container['speaker'];
    }

    /**
     * Sets speaker
     *
     * @param string $speaker Zoom room speaker.
     *
     * @return $this
     */
    public function setSpeaker($speaker)
    {
        $this->container['speaker'] = $speaker;

        return $this;
    }

    /**
     * Gets last_start_time
     *
     * @return string
     */
    public function getLastStartTime()
    {
        return $this->container['last_start_time'];
    }

    /**
     * Sets last_start_time
     *
     * @param string $last_start_time Zoom room last start time.
     *
     * @return $this
     */
    public function setLastStartTime($last_start_time)
    {
        $this->container['last_start_time'] = $last_start_time;

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
     * @param string $location Zoom room location.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets health
     *
     * @return string
     */
    public function getHealth()
    {
        return $this->container['health'];
    }

    /**
     * Sets health
     *
     * @param string $health health
     *
     * @return $this
     */
    public function setHealth($health)
    {
        $this->container['health'] = $health;

        return $this;
    }

    /**
     * Gets issues
     *
     * @return string[]
     */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
     * Sets issues
     *
     * @param string[] $issues Zoom Room issues.
     *
     * @return $this
     */
    public function setIssues($issues)
    {
        $this->container['issues'] = $issues;

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


