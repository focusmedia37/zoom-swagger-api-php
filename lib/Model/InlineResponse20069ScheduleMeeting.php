<?php
/**
 * InlineResponse20069ScheduleMeeting
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
 * InlineResponse20069ScheduleMeeting Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20069ScheduleMeeting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_69_schedule_meeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'host_video' => 'bool',
        'participant_video' => 'bool',
        'audio_type' => 'bool',
        'join_before_host' => 'bool',
        'enforce_login' => 'bool',
        'enforce_login_with_domains' => 'bool',
        'enforce_login_domains' => 'string',
        'not_store_meeting_topic' => 'bool',
        'require_password_for_scheduling_new_meetings' => 'bool',
        'require_password_for_instant_meetings' => 'bool',
        'require_password_for_pmi_meetings' => 'bool',
        'meeting_authentication' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'host_video' => null,
        'participant_video' => null,
        'audio_type' => null,
        'join_before_host' => null,
        'enforce_login' => null,
        'enforce_login_with_domains' => null,
        'enforce_login_domains' => null,
        'not_store_meeting_topic' => null,
        'require_password_for_scheduling_new_meetings' => null,
        'require_password_for_instant_meetings' => null,
        'require_password_for_pmi_meetings' => null,
        'meeting_authentication' => null
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
        'host_video' => 'host_video',
        'participant_video' => 'participant_video',
        'audio_type' => 'audio_type',
        'join_before_host' => 'join_before_host',
        'enforce_login' => 'enforce_login',
        'enforce_login_with_domains' => 'enforce_login_with_domains',
        'enforce_login_domains' => 'enforce_login_domains',
        'not_store_meeting_topic' => 'not_store_meeting_topic',
        'require_password_for_scheduling_new_meetings' => 'require_password_for_scheduling_new_meetings',
        'require_password_for_instant_meetings' => 'require_password_for_instant_meetings',
        'require_password_for_pmi_meetings' => 'require_password_for_pmi_meetings',
        'meeting_authentication' => 'meeting_authentication'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'host_video' => 'setHostVideo',
        'participant_video' => 'setParticipantVideo',
        'audio_type' => 'setAudioType',
        'join_before_host' => 'setJoinBeforeHost',
        'enforce_login' => 'setEnforceLogin',
        'enforce_login_with_domains' => 'setEnforceLoginWithDomains',
        'enforce_login_domains' => 'setEnforceLoginDomains',
        'not_store_meeting_topic' => 'setNotStoreMeetingTopic',
        'require_password_for_scheduling_new_meetings' => 'setRequirePasswordForSchedulingNewMeetings',
        'require_password_for_instant_meetings' => 'setRequirePasswordForInstantMeetings',
        'require_password_for_pmi_meetings' => 'setRequirePasswordForPmiMeetings',
        'meeting_authentication' => 'setMeetingAuthentication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'host_video' => 'getHostVideo',
        'participant_video' => 'getParticipantVideo',
        'audio_type' => 'getAudioType',
        'join_before_host' => 'getJoinBeforeHost',
        'enforce_login' => 'getEnforceLogin',
        'enforce_login_with_domains' => 'getEnforceLoginWithDomains',
        'enforce_login_domains' => 'getEnforceLoginDomains',
        'not_store_meeting_topic' => 'getNotStoreMeetingTopic',
        'require_password_for_scheduling_new_meetings' => 'getRequirePasswordForSchedulingNewMeetings',
        'require_password_for_instant_meetings' => 'getRequirePasswordForInstantMeetings',
        'require_password_for_pmi_meetings' => 'getRequirePasswordForPmiMeetings',
        'meeting_authentication' => 'getMeetingAuthentication'
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
        $this->container['host_video'] = isset($data['host_video']) ? $data['host_video'] : null;
        $this->container['participant_video'] = isset($data['participant_video']) ? $data['participant_video'] : null;
        $this->container['audio_type'] = isset($data['audio_type']) ? $data['audio_type'] : null;
        $this->container['join_before_host'] = isset($data['join_before_host']) ? $data['join_before_host'] : null;
        $this->container['enforce_login'] = isset($data['enforce_login']) ? $data['enforce_login'] : null;
        $this->container['enforce_login_with_domains'] = isset($data['enforce_login_with_domains']) ? $data['enforce_login_with_domains'] : null;
        $this->container['enforce_login_domains'] = isset($data['enforce_login_domains']) ? $data['enforce_login_domains'] : null;
        $this->container['not_store_meeting_topic'] = isset($data['not_store_meeting_topic']) ? $data['not_store_meeting_topic'] : null;
        $this->container['require_password_for_scheduling_new_meetings'] = isset($data['require_password_for_scheduling_new_meetings']) ? $data['require_password_for_scheduling_new_meetings'] : null;
        $this->container['require_password_for_instant_meetings'] = isset($data['require_password_for_instant_meetings']) ? $data['require_password_for_instant_meetings'] : null;
        $this->container['require_password_for_pmi_meetings'] = isset($data['require_password_for_pmi_meetings']) ? $data['require_password_for_pmi_meetings'] : null;
        $this->container['meeting_authentication'] = isset($data['meeting_authentication']) ? $data['meeting_authentication'] : null;
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
     * Gets host_video
     *
     * @return bool
     */
    public function getHostVideo()
    {
        return $this->container['host_video'];
    }

    /**
     * Sets host_video
     *
     * @param bool $host_video Start meetings with host video on.
     *
     * @return $this
     */
    public function setHostVideo($host_video)
    {
        $this->container['host_video'] = $host_video;

        return $this;
    }

    /**
     * Gets participant_video
     *
     * @return bool
     */
    public function getParticipantVideo()
    {
        return $this->container['participant_video'];
    }

    /**
     * Sets participant_video
     *
     * @param bool $participant_video Start meetings with participant video on.
     *
     * @return $this
     */
    public function setParticipantVideo($participant_video)
    {
        $this->container['participant_video'] = $participant_video;

        return $this;
    }

    /**
     * Gets audio_type
     *
     * @return bool
     */
    public function getAudioType()
    {
        return $this->container['audio_type'];
    }

    /**
     * Sets audio_type
     *
     * @param bool $audio_type Determine how participants can join the audio portion of the meeting.
     *
     * @return $this
     */
    public function setAudioType($audio_type)
    {
        $this->container['audio_type'] = $audio_type;

        return $this;
    }

    /**
     * Gets join_before_host
     *
     * @return bool
     */
    public function getJoinBeforeHost()
    {
        return $this->container['join_before_host'];
    }

    /**
     * Sets join_before_host
     *
     * @param bool $join_before_host Allow participants to join the meeting before the host arrives
     *
     * @return $this
     */
    public function setJoinBeforeHost($join_before_host)
    {
        $this->container['join_before_host'] = $join_before_host;

        return $this;
    }

    /**
     * Gets enforce_login
     *
     * @return bool
     */
    public function getEnforceLogin()
    {
        return $this->container['enforce_login'];
    }

    /**
     * Sets enforce_login
     *
     * @param bool $enforce_login Allow only signed-in users to join meetings.
     *
     * @return $this
     */
    public function setEnforceLogin($enforce_login)
    {
        $this->container['enforce_login'] = $enforce_login;

        return $this;
    }

    /**
     * Gets enforce_login_with_domains
     *
     * @return bool
     */
    public function getEnforceLoginWithDomains()
    {
        return $this->container['enforce_login_with_domains'];
    }

    /**
     * Sets enforce_login_with_domains
     *
     * @param bool $enforce_login_with_domains Allow only signed-in users with specified domains to join meetings.
     *
     * @return $this
     */
    public function setEnforceLoginWithDomains($enforce_login_with_domains)
    {
        $this->container['enforce_login_with_domains'] = $enforce_login_with_domains;

        return $this;
    }

    /**
     * Gets enforce_login_domains
     *
     * @return string
     */
    public function getEnforceLoginDomains()
    {
        return $this->container['enforce_login_domains'];
    }

    /**
     * Sets enforce_login_domains
     *
     * @param string $enforce_login_domains Specify the domains from which users can join a meeting.
     *
     * @return $this
     */
    public function setEnforceLoginDomains($enforce_login_domains)
    {
        $this->container['enforce_login_domains'] = $enforce_login_domains;

        return $this;
    }

    /**
     * Gets not_store_meeting_topic
     *
     * @return bool
     */
    public function getNotStoreMeetingTopic()
    {
        return $this->container['not_store_meeting_topic'];
    }

    /**
     * Sets not_store_meeting_topic
     *
     * @param bool $not_store_meeting_topic Hide actual meeting topic and display \"Zoom Meeting\" for your scheduled meetings
     *
     * @return $this
     */
    public function setNotStoreMeetingTopic($not_store_meeting_topic)
    {
        $this->container['not_store_meeting_topic'] = $not_store_meeting_topic;

        return $this;
    }

    /**
     * Gets require_password_for_scheduling_new_meetings
     *
     * @return bool
     */
    public function getRequirePasswordForSchedulingNewMeetings()
    {
        return $this->container['require_password_for_scheduling_new_meetings'];
    }

    /**
     * Sets require_password_for_scheduling_new_meetings
     *
     * @param bool $require_password_for_scheduling_new_meetings This setting applies for regular meetings that do not use PMI. If enabled, a password will be generated while a host schedules a new meeting and participants will be required to enter the password before they can join the meeting.
     *
     * @return $this
     */
    public function setRequirePasswordForSchedulingNewMeetings($require_password_for_scheduling_new_meetings)
    {
        $this->container['require_password_for_scheduling_new_meetings'] = $require_password_for_scheduling_new_meetings;

        return $this;
    }

    /**
     * Gets require_password_for_instant_meetings
     *
     * @return bool
     */
    public function getRequirePasswordForInstantMeetings()
    {
        return $this->container['require_password_for_instant_meetings'];
    }

    /**
     * Sets require_password_for_instant_meetings
     *
     * @param bool $require_password_for_instant_meetings Require password for instant meetings. If you use PMI for your instant meetings, this option will be disabled.
     *
     * @return $this
     */
    public function setRequirePasswordForInstantMeetings($require_password_for_instant_meetings)
    {
        $this->container['require_password_for_instant_meetings'] = $require_password_for_instant_meetings;

        return $this;
    }

    /**
     * Gets require_password_for_pmi_meetings
     *
     * @return bool
     */
    public function getRequirePasswordForPmiMeetings()
    {
        return $this->container['require_password_for_pmi_meetings'];
    }

    /**
     * Sets require_password_for_pmi_meetings
     *
     * @param bool $require_password_for_pmi_meetings Require participants to enter password for PMI meetings.
     *
     * @return $this
     */
    public function setRequirePasswordForPmiMeetings($require_password_for_pmi_meetings)
    {
        $this->container['require_password_for_pmi_meetings'] = $require_password_for_pmi_meetings;

        return $this;
    }

    /**
     * Gets meeting_authentication
     *
     * @return bool
     */
    public function getMeetingAuthentication()
    {
        return $this->container['meeting_authentication'];
    }

    /**
     * Sets meeting_authentication
     *
     * @param bool $meeting_authentication Only authenticated users can join meetings
     *
     * @return $this
     */
    public function setMeetingAuthentication($meeting_authentication)
    {
        $this->container['meeting_authentication'] = $meeting_authentication;

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


