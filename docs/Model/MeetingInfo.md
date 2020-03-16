# MeetingInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topic** | **string** | Meeting topic | [optional] 
**type** | **int** | Meeting Type | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Meeting start time | [optional] 
**duration** | **int** | Meeting duration | [optional] 
**timezone** | **string** | Timezone to format start_time | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The date and time at which this meeting was created. | [optional] 
**agenda** | **string** | Agenda | [optional] 
**start_url** | **string** | Start url | [optional] 
**join_url** | **string** | Join url | [optional] 
**password** | **string** | Meeting password. Password may only contain the following characters: &#x60;[a-z A-Z 0-9 @ - _ * !]&#x60; | [optional] 
**h323_password** | **string** | H.323/SIP room system password | [optional] 
**pmi** | **int** | Personal Meeting Id. Only used for scheduled meetings and recurring meetings with no fixed time. | [optional] 
**tracking_fields** | [**\Swagger\Client\Model\UsersuserIdmeetingsTrackingFields[]**](UsersuserIdmeetingsTrackingFields.md) | Tracking fields | [optional] 
**occurrences** | [**\Swagger\Client\Model\InlineResponse20110Occurrences[]**](InlineResponse20110Occurrences.md) | Array of occurrence objects. | [optional] 
**settings** | [**\Swagger\Client\Model\InlineResponse20110Settings**](InlineResponse20110Settings.md) |  | [optional] 
**recurrence** | [**\Swagger\Client\Model\UsersuserIdmeetingsRecurrence**](UsersuserIdmeetingsRecurrence.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


