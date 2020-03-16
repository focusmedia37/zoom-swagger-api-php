# InlineResponse20069ScheduleMeeting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_video** | **bool** | Start meetings with host video on. | [optional] 
**participant_video** | **bool** | Start meetings with participant video on. | [optional] 
**audio_type** | **bool** | Determine how participants can join the audio portion of the meeting. | [optional] 
**join_before_host** | **bool** | Allow participants to join the meeting before the host arrives | [optional] 
**enforce_login** | **bool** | Allow only signed-in users to join meetings. | [optional] 
**enforce_login_with_domains** | **bool** | Allow only signed-in users with specified domains to join meetings. | [optional] 
**enforce_login_domains** | **string** | Specify the domains from which users can join a meeting. | [optional] 
**not_store_meeting_topic** | **bool** | Hide actual meeting topic and display \&quot;Zoom Meeting\&quot; for your scheduled meetings | [optional] 
**require_password_for_scheduling_new_meetings** | **bool** | This setting applies for regular meetings that do not use PMI. If enabled, a password will be generated while a host schedules a new meeting and participants will be required to enter the password before they can join the meeting. | [optional] 
**require_password_for_instant_meetings** | **bool** | Require password for instant meetings. If you use PMI for your instant meetings, this option will be disabled. | [optional] 
**require_password_for_pmi_meetings** | **bool** | Require participants to enter password for PMI meetings. | [optional] 
**meeting_authentication** | **bool** | Only authenticated users can join meetings | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


