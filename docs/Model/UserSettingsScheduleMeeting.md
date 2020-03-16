# UserSettingsScheduleMeeting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_video** | **bool** | Start meetings with host video on. | [optional] 
**participants_video** | **bool** | Start meetings with participants video on. | [optional] 
**audio_type** | **string** | Determine how participants can join the audio portion of the meeting:&lt;br&gt;&#x60;both&#x60; - Telephony and VoIP.&lt;br&gt;&#x60;telephony&#x60; - Audio PSTN telephony only.&lt;br&gt;&#x60;voip&#x60; - VoIP only.&lt;br&gt;&#x60;thirdParty&#x60; - Third party audio conference. | [optional] [default to 'voip']
**join_before_host** | **bool** | Join the meeting before host arrives. | [optional] 
**force_pmi_jbh_password** | **bool** | Require a password for personal meetings if attendees can join before host. | [optional] 
**pstn_password_protected** | **bool** | Generate and require password for participants joining by phone. | [optional] 
**use_pmi_for_scheduled_meetings** | **bool** | Use Personal Meeting ID (PMI) when scheduling a meeting | [optional] 
**use_pmi_for_instant_meetings** | **bool** | Use Personal Meeting ID (PMI) when starting an instant meeting | [optional] 
**require_password_for_scheduling_new_meetings** | **bool** | Require a password when scheduling new meetings | [optional] 
**require_password_for_scheduled_meetings** | **bool** | Require a password for meetings which have already been scheduled | [optional] 
**default_password_for_scheduled_meetings** | **string** | Password for already scheduled meetings | [optional] 
**require_password_for_instant_meetings** | **bool** | Require a password for instant meetings. If you use PMI for your instant meetings, this option will be disabled. | [optional] 
**require_password_for_pmi_meetings** | **string** | Require a password for Personal Meeting ID (PMI) | [optional] 
**pmi_password** | **string** | PMI password | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


