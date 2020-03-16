# UsersuserIdmeetingsSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_video** | **bool** | Start video when the host joins the meeting. | [optional] 
**participant_video** | **bool** | Start video when participants join the meeting. | [optional] 
**cn_meeting** | **bool** | Host meeting in China. | [optional] [default to false]
**in_meeting** | **bool** | Host meeting in India. | [optional] [default to false]
**join_before_host** | **bool** | Allow participants to join the meeting before the host starts the meeting. Only used for scheduled or recurring meetings. | [optional] [default to false]
**mute_upon_entry** | **bool** | Mute participants upon entry. | [optional] [default to false]
**watermark** | **bool** | Add watermark when viewing a shared screen. | [optional] [default to false]
**use_pmi** | **bool** | Use Personal Meeting ID instead of an automatically generated meeting ID. It can only be used for scheduled meetings, instant meetings and recurring meetings with no fixed time. | [optional] [default to false]
**approval_type** | **int** | &#x60;0&#x60; - Automatically approve.&lt;br&gt;&#x60;1&#x60; - Manually approve.&lt;br&gt;&#x60;2&#x60; - No registration required. | [optional] 
**registration_type** | **int** | Registration type. Used for recurring meeting with fixed time only. &lt;br&gt;&#x60;1&#x60; Attendees register once and can attend any of the occurrences.&lt;br&gt;&#x60;2&#x60; Attendees need to register for each occurrence to attend.&lt;br&gt;&#x60;3&#x60; Attendees register once and can choose one or more occurrences to attend. | [optional] 
**audio** | **string** | Determine how participants can join the audio portion of the meeting.&lt;br&gt;&#x60;both&#x60; - Both Telephony and VoIP.&lt;br&gt;&#x60;telephony&#x60; - Telephony only.&lt;br&gt;&#x60;voip&#x60; - VoIP only. | [optional] [default to 'both']
**auto_recording** | **string** | Automatic recording:&lt;br&gt;&#x60;local&#x60; - Record on local.&lt;br&gt;&#x60;cloud&#x60; -  Record on cloud.&lt;br&gt;&#x60;none&#x60; - Disabled. | [optional] [default to 'none']
**enforce_login** | **bool** | Only signed in users can join this meeting. | [optional] 
**enforce_login_domains** | **string** | Only signed in users with specified domains can join meetings. | [optional] 
**alternative_hosts** | **string** | Alternative host&#39;s emails or IDs: multiple values separated by a comma. | [optional] 
**close_registration** | **bool** | Close registration after event date | [optional] [default to false]
**waiting_room** | **bool** | Enable waiting room | [optional] [default to false]
**global_dial_in_countries** | **string[]** | List of global dial-in countries | [optional] 
**contact_name** | **string** | Contact name for registration | [optional] 
**contact_email** | **string** | Contact email for registration | [optional] 
**registrants_email_notification** | **bool** | registrants email notification | [optional] 
**meeting_authentication** | **bool** | Only [authenticated](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) users can join meeting if the value of this field is set to &#x60;true&#x60;. | [optional] 
**authentication_option** | **string** | Specify the authentication type for users to join a meeting with&#x60;meeting_authentication&#x60; setting set to &#x60;true&#x60;. The value of this field can be retrieved from the &#x60;id&#x60; field within &#x60;authentication_options&#x60; array in the response of [Get User Settings API](https://marketplace.zoom.us/docs/api-reference/zoom-api/users/usersettings). | [optional] 
**authentication_domains** | **string** | Meeting authentication domains. This option, allows you to specify the rule so that Zoom users, whose email address contains a certain domain, can join the meeting. You can either provide multiple domains, using a comma in between and/or use a wildcard for listing domains. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


