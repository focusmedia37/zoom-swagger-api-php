<?php
/**
 * InlineResponse20069
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
 * InlineResponse20069 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20069 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_69';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'schedule_meeting' => '\Swagger\Client\Model\InlineResponse20069ScheduleMeeting',
        'in_meeting' => '\Swagger\Client\Model\InlineResponse20069InMeeting',
        'email_notification' => '\Swagger\Client\Model\InlineResponse20068EmailNotification',
        'recording' => '\Swagger\Client\Model\InlineResponse20069Recording',
        'telephony' => '\Swagger\Client\Model\InlineResponse20068Telephony',
        'tsp' => '\Swagger\Client\Model\InlineResponse20069Tsp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'schedule_meeting' => null,
        'in_meeting' => null,
        'email_notification' => null,
        'recording' => null,
        'telephony' => null,
        'tsp' => null
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
        'schedule_meeting' => 'schedule_meeting',
        'in_meeting' => 'in_meeting',
        'email_notification' => 'email_notification',
        'recording' => 'recording',
        'telephony' => 'telephony',
        'tsp' => 'tsp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'schedule_meeting' => 'setScheduleMeeting',
        'in_meeting' => 'setInMeeting',
        'email_notification' => 'setEmailNotification',
        'recording' => 'setRecording',
        'telephony' => 'setTelephony',
        'tsp' => 'setTsp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'schedule_meeting' => 'getScheduleMeeting',
        'in_meeting' => 'getInMeeting',
        'email_notification' => 'getEmailNotification',
        'recording' => 'getRecording',
        'telephony' => 'getTelephony',
        'tsp' => 'getTsp'
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
        $this->container['schedule_meeting'] = isset($data['schedule_meeting']) ? $data['schedule_meeting'] : null;
        $this->container['in_meeting'] = isset($data['in_meeting']) ? $data['in_meeting'] : null;
        $this->container['email_notification'] = isset($data['email_notification']) ? $data['email_notification'] : null;
        $this->container['recording'] = isset($data['recording']) ? $data['recording'] : null;
        $this->container['telephony'] = isset($data['telephony']) ? $data['telephony'] : null;
        $this->container['tsp'] = isset($data['tsp']) ? $data['tsp'] : null;
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
     * Gets schedule_meeting
     *
     * @return \Swagger\Client\Model\InlineResponse20069ScheduleMeeting
     */
    public function getScheduleMeeting()
    {
        return $this->container['schedule_meeting'];
    }

    /**
     * Sets schedule_meeting
     *
     * @param \Swagger\Client\Model\InlineResponse20069ScheduleMeeting $schedule_meeting schedule_meeting
     *
     * @return $this
     */
    public function setScheduleMeeting($schedule_meeting)
    {
        $this->container['schedule_meeting'] = $schedule_meeting;

        return $this;
    }

    /**
     * Gets in_meeting
     *
     * @return \Swagger\Client\Model\InlineResponse20069InMeeting
     */
    public function getInMeeting()
    {
        return $this->container['in_meeting'];
    }

    /**
     * Sets in_meeting
     *
     * @param \Swagger\Client\Model\InlineResponse20069InMeeting $in_meeting in_meeting
     *
     * @return $this
     */
    public function setInMeeting($in_meeting)
    {
        $this->container['in_meeting'] = $in_meeting;

        return $this;
    }

    /**
     * Gets email_notification
     *
     * @return \Swagger\Client\Model\InlineResponse20068EmailNotification
     */
    public function getEmailNotification()
    {
        return $this->container['email_notification'];
    }

    /**
     * Sets email_notification
     *
     * @param \Swagger\Client\Model\InlineResponse20068EmailNotification $email_notification email_notification
     *
     * @return $this
     */
    public function setEmailNotification($email_notification)
    {
        $this->container['email_notification'] = $email_notification;

        return $this;
    }

    /**
     * Gets recording
     *
     * @return \Swagger\Client\Model\InlineResponse20069Recording
     */
    public function getRecording()
    {
        return $this->container['recording'];
    }

    /**
     * Sets recording
     *
     * @param \Swagger\Client\Model\InlineResponse20069Recording $recording recording
     *
     * @return $this
     */
    public function setRecording($recording)
    {
        $this->container['recording'] = $recording;

        return $this;
    }

    /**
     * Gets telephony
     *
     * @return \Swagger\Client\Model\InlineResponse20068Telephony
     */
    public function getTelephony()
    {
        return $this->container['telephony'];
    }

    /**
     * Sets telephony
     *
     * @param \Swagger\Client\Model\InlineResponse20068Telephony $telephony telephony
     *
     * @return $this
     */
    public function setTelephony($telephony)
    {
        $this->container['telephony'] = $telephony;

        return $this;
    }

    /**
     * Gets tsp
     *
     * @return \Swagger\Client\Model\InlineResponse20069Tsp
     */
    public function getTsp()
    {
        return $this->container['tsp'];
    }

    /**
     * Sets tsp
     *
     * @param \Swagger\Client\Model\InlineResponse20069Tsp $tsp tsp
     *
     * @return $this
     */
    public function setTsp($tsp)
    {
        $this->container['tsp'] = $tsp;

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


