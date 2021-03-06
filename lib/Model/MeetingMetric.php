<?php
/**
 * MeetingMetric
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
 * MeetingMetric Class Doc Comment
 *
 * @category Class
 * @description Meeting metric details.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MeetingMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MeetingMetric';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
        'id' => 'int',
        'topic' => 'string',
        'host' => 'string',
        'email' => 'string',
        'user_type' => 'string',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'duration' => 'string',
        'participants' => 'int',
        'has_pstn' => 'bool',
        'has_voip' => 'bool',
        'has_3rd_party_audio' => 'bool',
        'has_video' => 'bool',
        'has_screen_share' => 'bool',
        'has_recording' => 'bool',
        'has_sip' => 'bool',
        'in_room_participants' => 'int',
        'dept' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => 'uuid',
        'id' => null,
        'topic' => null,
        'host' => null,
        'email' => null,
        'user_type' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'duration' => null,
        'participants' => null,
        'has_pstn' => null,
        'has_voip' => null,
        'has_3rd_party_audio' => null,
        'has_video' => null,
        'has_screen_share' => null,
        'has_recording' => null,
        'has_sip' => null,
        'in_room_participants' => null,
        'dept' => null
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
        'uuid' => 'uuid',
        'id' => 'id',
        'topic' => 'topic',
        'host' => 'host',
        'email' => 'email',
        'user_type' => 'user_type',
        'start_time' => 'start_time',
        'end_time' => 'end_time',
        'duration' => 'duration',
        'participants' => 'participants',
        'has_pstn' => 'has_pstn',
        'has_voip' => 'has_voip',
        'has_3rd_party_audio' => 'has_3rd_party_audio',
        'has_video' => 'has_video',
        'has_screen_share' => 'has_screen_share',
        'has_recording' => 'has_recording',
        'has_sip' => 'has_sip',
        'in_room_participants' => 'in_room_participants',
        'dept' => 'dept'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'id' => 'setId',
        'topic' => 'setTopic',
        'host' => 'setHost',
        'email' => 'setEmail',
        'user_type' => 'setUserType',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'duration' => 'setDuration',
        'participants' => 'setParticipants',
        'has_pstn' => 'setHasPstn',
        'has_voip' => 'setHasVoip',
        'has_3rd_party_audio' => 'setHas3rdPartyAudio',
        'has_video' => 'setHasVideo',
        'has_screen_share' => 'setHasScreenShare',
        'has_recording' => 'setHasRecording',
        'has_sip' => 'setHasSip',
        'in_room_participants' => 'setInRoomParticipants',
        'dept' => 'setDept'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'id' => 'getId',
        'topic' => 'getTopic',
        'host' => 'getHost',
        'email' => 'getEmail',
        'user_type' => 'getUserType',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'duration' => 'getDuration',
        'participants' => 'getParticipants',
        'has_pstn' => 'getHasPstn',
        'has_voip' => 'getHasVoip',
        'has_3rd_party_audio' => 'getHas3rdPartyAudio',
        'has_video' => 'getHasVideo',
        'has_screen_share' => 'getHasScreenShare',
        'has_recording' => 'getHasRecording',
        'has_sip' => 'getHasSip',
        'in_room_participants' => 'getInRoomParticipants',
        'dept' => 'getDept'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['user_type'] = isset($data['user_type']) ? $data['user_type'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
        $this->container['has_pstn'] = isset($data['has_pstn']) ? $data['has_pstn'] : null;
        $this->container['has_voip'] = isset($data['has_voip']) ? $data['has_voip'] : null;
        $this->container['has_3rd_party_audio'] = isset($data['has_3rd_party_audio']) ? $data['has_3rd_party_audio'] : null;
        $this->container['has_video'] = isset($data['has_video']) ? $data['has_video'] : null;
        $this->container['has_screen_share'] = isset($data['has_screen_share']) ? $data['has_screen_share'] : null;
        $this->container['has_recording'] = isset($data['has_recording']) ? $data['has_recording'] : null;
        $this->container['has_sip'] = isset($data['has_sip']) ? $data['has_sip'] : null;
        $this->container['in_room_participants'] = isset($data['in_room_participants']) ? $data['in_room_participants'] : null;
        $this->container['dept'] = isset($data['dept']) ? $data['dept'] : null;
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid Meeting UUID. Please double encode your UUID when using it for API calls if the UUID begins with a '/'or contains '//' in it.
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
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
     * @param int $id Meeting ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets topic
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param string $topic Meeting topic.
     *
     * @return $this
     */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host Host display name.
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

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
     * @param string $email Email address of the host.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets user_type
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type
     *
     * @param string $user_type License type of the user.
     *
     * @return $this
     */
    public function setUserType($user_type)
    {
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time Meeting start time.
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time Meeting end time.
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string $duration Meeting duration.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return int
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param int $participants Meeting participant count.
     *
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets has_pstn
     *
     * @return bool
     */
    public function getHasPstn()
    {
        return $this->container['has_pstn'];
    }

    /**
     * Sets has_pstn
     *
     * @param bool $has_pstn Indicates whether or not the PSTN was used in the meeting.
     *
     * @return $this
     */
    public function setHasPstn($has_pstn)
    {
        $this->container['has_pstn'] = $has_pstn;

        return $this;
    }

    /**
     * Gets has_voip
     *
     * @return bool
     */
    public function getHasVoip()
    {
        return $this->container['has_voip'];
    }

    /**
     * Sets has_voip
     *
     * @param bool $has_voip Indicates whether or not VoIP was used in the meeting.
     *
     * @return $this
     */
    public function setHasVoip($has_voip)
    {
        $this->container['has_voip'] = $has_voip;

        return $this;
    }

    /**
     * Gets has_3rd_party_audio
     *
     * @return bool
     */
    public function getHas3rdPartyAudio()
    {
        return $this->container['has_3rd_party_audio'];
    }

    /**
     * Sets has_3rd_party_audio
     *
     * @param bool $has_3rd_party_audio Indicates whether or not [third party audio](https://support.zoom.us/hc/en-us/articles/202470795-3rd-Party-Audio-Conference) was used in the meeting.
     *
     * @return $this
     */
    public function setHas3rdPartyAudio($has_3rd_party_audio)
    {
        $this->container['has_3rd_party_audio'] = $has_3rd_party_audio;

        return $this;
    }

    /**
     * Gets has_video
     *
     * @return bool
     */
    public function getHasVideo()
    {
        return $this->container['has_video'];
    }

    /**
     * Sets has_video
     *
     * @param bool $has_video Indicates whether or not video was used in the meeting.
     *
     * @return $this
     */
    public function setHasVideo($has_video)
    {
        $this->container['has_video'] = $has_video;

        return $this;
    }

    /**
     * Gets has_screen_share
     *
     * @return bool
     */
    public function getHasScreenShare()
    {
        return $this->container['has_screen_share'];
    }

    /**
     * Sets has_screen_share
     *
     * @param bool $has_screen_share Indicates whether or not screenshare feature was used in the meeting.
     *
     * @return $this
     */
    public function setHasScreenShare($has_screen_share)
    {
        $this->container['has_screen_share'] = $has_screen_share;

        return $this;
    }

    /**
     * Gets has_recording
     *
     * @return bool
     */
    public function getHasRecording()
    {
        return $this->container['has_recording'];
    }

    /**
     * Sets has_recording
     *
     * @param bool $has_recording Indicates whether or not the recording feature was used in the meeting.
     *
     * @return $this
     */
    public function setHasRecording($has_recording)
    {
        $this->container['has_recording'] = $has_recording;

        return $this;
    }

    /**
     * Gets has_sip
     *
     * @return bool
     */
    public function getHasSip()
    {
        return $this->container['has_sip'];
    }

    /**
     * Sets has_sip
     *
     * @param bool $has_sip Indicates whether or not someone joined the meeting using SIP.
     *
     * @return $this
     */
    public function setHasSip($has_sip)
    {
        $this->container['has_sip'] = $has_sip;

        return $this;
    }

    /**
     * Gets in_room_participants
     *
     * @return int
     */
    public function getInRoomParticipants()
    {
        return $this->container['in_room_participants'];
    }

    /**
     * Sets in_room_participants
     *
     * @param int $in_room_participants The number of Zoom Room participants in the meeting.
     *
     * @return $this
     */
    public function setInRoomParticipants($in_room_participants)
    {
        $this->container['in_room_participants'] = $in_room_participants;

        return $this;
    }

    /**
     * Gets dept
     *
     * @return string
     */
    public function getDept()
    {
        return $this->container['dept'];
    }

    /**
     * Sets dept
     *
     * @param string $dept Department of the host.
     *
     * @return $this
     */
    public function setDept($dept)
    {
        $this->container['dept'] = $dept;

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


