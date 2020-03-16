# WebinarUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topic** | **string** | Webinar topic. | [optional] 
**type** | **int** | Webinar Types:&lt;br&gt;&#x60;5&#x60; - webinar.&lt;br&gt;&#x60;6&#x60; - Recurring webinar with no fixed time.&lt;br&gt;&#x60;9&#x60; - Recurring webinar with a fixed time. | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Webinar start time, in the format \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss&#39;Z&#39;.\&quot; Should be in GMT time. In the format \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss.\&quot; This should be in local time and the timezone should be specified. Only used for scheduled webinars and recurring webinars with a fixed time. | [optional] 
**duration** | **int** | Webinar duration (minutes). Used for scheduled webinar only. | [optional] 
**timezone** | **string** | Time zone to format start_time. For example, \&quot;America/Los_Angeles\&quot;. For scheduled meetings only. Please reference our [time zone](#timezones) list for supported time zones and their formats. | [optional] 
**password** | **string** | Webinar password. Password may only contain the following characters: [a-z A-Z 0-9 @ - _ * !]. Max of 10 characters. | [optional] 
**agenda** | **string** | Webinar description. | [optional] 
**tracking_fields** | [**\Swagger\Client\Model\UsersuserIdmeetingsTrackingFields[]**](UsersuserIdmeetingsTrackingFields.md) | Tracking fields | [optional] 
**recurrence** | [**\Swagger\Client\Model\UsersuserIdmeetingsRecurrence**](UsersuserIdmeetingsRecurrence.md) |  | [optional] 
**settings** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


