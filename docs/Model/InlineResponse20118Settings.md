# InlineResponse20118Settings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_video** | **bool** | Start video when host joins webinar. | [optional] 
**panelists_video** | **bool** | Start video when panelists join webinar. | [optional] 
**practice_session** | **bool** | Enable practice session. | [optional] [default to false]
**hd_video** | **bool** | Default to HD video. | [optional] [default to false]
**approval_type** | **int** | &#x60;0&#x60; - Automatically approve.&lt;br&gt;&#x60;1&#x60; - Manually approve.&lt;br&gt;&#x60;2&#x60; - No registration required. | [optional] 
**registration_type** | **int** | Registration types. Only used for recurring webinars with a fixed time.&lt;br&gt;&#x60;1&#x60; - Attendees register once and can attend any of the webinar sessions.&lt;br&gt;&#x60;2&#x60; - Attendees need to register for each session in order to attend.&lt;br&gt;&#x60;3&#x60; - Attendees register once and can choose one or more sessions to attend. | [optional] 
**audio** | **string** | Determine how participants can join the audio portion of the webinar. | [optional] [default to 'both']
**auto_recording** | **string** | Automatic recording:&lt;br&gt;&#x60;local&#x60; - Record on local.&lt;br&gt;&#x60;cloud&#x60; -  Record on cloud.&lt;br&gt;&#x60;none&#x60; - Disabled. | [optional] [default to 'none']
**enforce_login** | **bool** | Only signed-in users can join this webinar. | [optional] 
**enforce_login_domains** | **string** | Only signed-in users with specified domains can join webinars. | [optional] 
**alternative_hosts** | **string** | Alternative host emails or IDs. Multiple values separated by comma. | [optional] 
**close_registration** | **bool** | Close registration after event date. | [optional] 
**show_share_button** | **bool** | Show social share buttons on the registration page. | [optional] 
**allow_multiple_devices** | **bool** | Allow attendees to join from multiple devices. | [optional] 
**on_demand** | **bool** | Make the webinar on-demand | [optional] [default to false]
**global_dial_in_countries** | **string[]** | List of global dial-in countries | [optional] 
**contact_name** | **string** | Contact name for registration | [optional] 
**contact_email** | **string** | Contact email for registration | [optional] 
**registrants_confirmation_email** | **bool** | Send confirmation email to registrants | [optional] 
**registrants_restrict_number** | **int** | Restrict number of registrants for a webinar. By default, it is set to &#x60;0&#x60;. A &#x60;0&#x60; value means that the restriction option is disabled. Provide a number higher than 0 to restrict the webinar registrants by the that number. | [optional] 
**notify_registrants** | **bool** | Send notification email to registrants when the host updates a webinar. | [optional] 
**post_webinar_survey** | **bool** | Zoom will open a survey page in attendees&#39; browsers after leaving the webinar | [optional] 
**survey_url** | **string** | Survey url for post webinar survey | [optional] 
**registrants_email_notification** | **bool** | registrants email notification | [optional] 
**meeting_authentication** | **bool** | Only authenticated users can join meetings | [optional] 
**authentication_option** | **string** | Meeting authentication option id | [optional] 
**authentication_domains** | **string** | Meeting authentication domains | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


