<?php
/**
 * RoomslocationslocationIdBasic
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
 * RoomslocationslocationIdBasic Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoomslocationslocationIdBasic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'roomslocationslocationId_basic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description_' => 'string',
        'timezone' => 'string',
        'address' => 'string',
        'support_email' => 'string',
        'support_phone' => 'string',
        'room_passcode' => 'string',
        'required_code_to_ext' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description_' => null,
        'timezone' => null,
        'address' => null,
        'support_email' => 'email',
        'support_phone' => null,
        'room_passcode' => null,
        'required_code_to_ext' => null
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
        'name' => 'name',
        'description_' => 'description ',
        'timezone' => 'timezone',
        'address' => 'address',
        'support_email' => 'support_email',
        'support_phone' => 'support_phone',
        'room_passcode' => 'room_passcode',
        'required_code_to_ext' => 'required_code_to_ext'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description_' => 'setDescription_',
        'timezone' => 'setTimezone',
        'address' => 'setAddress',
        'support_email' => 'setSupportEmail',
        'support_phone' => 'setSupportPhone',
        'room_passcode' => 'setRoomPasscode',
        'required_code_to_ext' => 'setRequiredCodeToExt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description_' => 'getDescription_',
        'timezone' => 'getTimezone',
        'address' => 'getAddress',
        'support_email' => 'getSupportEmail',
        'support_phone' => 'getSupportPhone',
        'room_passcode' => 'getRoomPasscode',
        'required_code_to_ext' => 'getRequiredCodeToExt'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description_'] = isset($data['description_']) ? $data['description_'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['support_email'] = isset($data['support_email']) ? $data['support_email'] : null;
        $this->container['support_phone'] = isset($data['support_phone']) ? $data['support_phone'] : null;
        $this->container['room_passcode'] = isset($data['room_passcode']) ? $data['room_passcode'] : null;
        $this->container['required_code_to_ext'] = isset($data['required_code_to_ext']) ? $data['required_code_to_ext'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['room_passcode']) && (mb_strlen($this->container['room_passcode']) > 16)) {
            $invalidProperties[] = "invalid value for 'room_passcode', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['room_passcode']) && (mb_strlen($this->container['room_passcode']) < 1)) {
            $invalidProperties[] = "invalid value for 'room_passcode', the character length must be bigger than or equal to 1.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the location type.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description_
     *
     * @return string
     */
    public function getDescription_()
    {
        return $this->container['description_'];
    }

    /**
     * Sets description_
     *
     * @param string $description_ Description about the location.
     *
     * @return $this
     */
    public function setDescription_($description_)
    {
        $this->container['description_'] = $description_;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone Timezone (can only be updated for location type - city).
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Address. Can only be updated for Campus and Building.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets support_email
     *
     * @return string
     */
    public function getSupportEmail()
    {
        return $this->container['support_email'];
    }

    /**
     * Sets support_email
     *
     * @param string $support_email The email address to be used for reporting Zoom Room issues.
     *
     * @return $this
     */
    public function setSupportEmail($support_email)
    {
        $this->container['support_email'] = $support_email;

        return $this;
    }

    /**
     * Gets support_phone
     *
     * @return string
     */
    public function getSupportPhone()
    {
        return $this->container['support_phone'];
    }

    /**
     * Sets support_phone
     *
     * @param string $support_phone The phone number to be used for reporting Zoom Room issues.
     *
     * @return $this
     */
    public function setSupportPhone($support_phone)
    {
        $this->container['support_phone'] = $support_phone;

        return $this;
    }

    /**
     * Gets room_passcode
     *
     * @return string
     */
    public function getRoomPasscode()
    {
        return $this->container['room_passcode'];
    }

    /**
     * Sets room_passcode
     *
     * @param string $room_passcode 1-16 digit number or characters that is used to secure your Zoom Rooms application.
     *
     * @return $this
     */
    public function setRoomPasscode($room_passcode)
    {
        if (!is_null($room_passcode) && (mb_strlen($room_passcode) > 16)) {
            throw new \InvalidArgumentException('invalid length for $room_passcode when calling RoomslocationslocationIdBasic., must be smaller than or equal to 16.');
        }
        if (!is_null($room_passcode) && (mb_strlen($room_passcode) < 1)) {
            throw new \InvalidArgumentException('invalid length for $room_passcode when calling RoomslocationslocationIdBasic., must be bigger than or equal to 1.');
        }

        $this->container['room_passcode'] = $room_passcode;

        return $this;
    }

    /**
     * Gets required_code_to_ext
     *
     * @return bool
     */
    public function getRequiredCodeToExt()
    {
        return $this->container['required_code_to_ext'];
    }

    /**
     * Sets required_code_to_ext
     *
     * @param bool $required_code_to_ext Require code to exit out of your Zoom Rooms application to switch between other apps.
     *
     * @return $this
     */
    public function setRequiredCodeToExt($required_code_to_ext)
    {
        $this->container['required_code_to_ext'] = $required_code_to_ext;

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


