# InlineResponse20022

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | Agenda. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Time of creation. | [optional] 
**duration** | **int** | Meeting duration. | [optional] 
**encrypted_password** | **string** | Encrypted password for third party endpoints (H323/SIP). | [optional] 
**h323_password** | **string** | H.323/SIP room system password. | [optional] 
**host_id** | **string** | ID of the user who is set as host of meeting. | [optional] 
**id** | **int** | Meeting ID: also known as the meeting number. | [optional] 
**join_url** | **string** | Join URL. | [optional] 
**occurrences** | [**\Swagger\Client\Model\InlineResponse20110Occurrences[]**](InlineResponse20110Occurrences.md) | Array of occurrence objects. | [optional] 
**password** | **string** | Meeting password. | [optional] 
**pmi** | **int** | Personal Meeting Id. Only used for scheduled meetings and recurring meetings with no fixed time. | [optional] 
**recurrence** | [**\Swagger\Client\Model\UsersuserIdmeetingsRecurrence**](UsersuserIdmeetingsRecurrence.md) |  | [optional] 
**settings** | [**\Swagger\Client\Model\InlineResponse20110Settings**](InlineResponse20110Settings.md) |  | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Meeting start time. | [optional] 
**start_url** | **string** | &lt;br&gt;&lt;aside&gt;The &lt;code&gt;start_url&lt;/code&gt; of a Meeting is a URL using which a host or an alternative host can start the Meeting.   The expiration time for the &lt;code&gt;start_url&lt;/code&gt; field listed in the response of [Create a Meeting API](https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meetingcreate) is two hours for all regular users.    For users created using the &lt;code&gt;custCreate&lt;/code&gt; option via the [Create Users](https://marketplace.zoom.us/docs/api-reference/zoom-api/users/usercreate) API, the expiration time of the &lt;code&gt;start_url&lt;/code&gt; field is 90 days.   For security reasons, to retrieve the updated value for the &lt;code&gt;start_url&lt;/code&gt; field programmatically (after the expiry time), you must call the [Retrieve a Meeting API](https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meeting) and refer to the value of the &lt;code&gt;start_url&lt;/code&gt; field in the response.&lt;/aside&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt; | [optional] 
**status** | **string** | Meeting status | [optional] 
**timezone** | **string** | Timezone to format the meeting start time. | [optional] 
**topic** | **string** | Meeting topic. | [optional] 
**tracking_fields** | [**\Swagger\Client\Model\UsersuserIdmeetingsTrackingFields[]**](UsersuserIdmeetingsTrackingFields.md) | Tracking fields | [optional] 
**type** | **int** | Meeting Types:&lt;br&gt;&#x60;1&#x60; - Instant meeting.&lt;br&gt;&#x60;2&#x60; - Scheduled meeting.&lt;br&gt;&#x60;3&#x60; - Recurring meeting with no fixed time.&lt;br&gt;&#x60;8&#x60; - Recurring meeting with a fixed time. | [optional] 
**uuid** | **string** | Unique meeting ID. Each meeting instance will generate its own Meeting UUID. Please double encode your UUID when using it for API calls if the UUID begins with a &#39;/&#39;or contains &#39;//&#39; in it. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


