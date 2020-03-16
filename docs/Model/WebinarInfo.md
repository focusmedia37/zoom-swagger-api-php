# WebinarInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topic** | **string** | Webinar topic. | [optional] 
**type** | **int** | Webinar Types:&lt;br&gt;&#x60;5&#x60; - Webinar.&lt;br&gt;&#x60;6&#x60; - Recurring webinar with no fixed time.&lt;br&gt;&#x60;9&#x60; - Recurring webinar with a fixed time. | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Webinar start time. | [optional] 
**duration** | **int** | Webinar duration. | [optional] 
**timezone** | **string** | Time zone to format start_time. | [optional] 
**agenda** | **string** | Webinar agenda. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Create time. | [optional] 
**start_url** | **string** | &lt;br&gt;&lt;aside&gt;The &lt;code&gt;start_url&lt;/code&gt; of a Webinar is a URL using which a host or an alternative host can start the Webinar.   The expiration time for the &lt;code&gt;start_url&lt;/code&gt; field listed in the response of [Create a Webinar API](https://marketplace.zoom.us/docs/api-reference/zoom-api/webinars/webinarcreate) is two hours for all regular users.    For users created using the &lt;code&gt;custCreate&lt;/code&gt; option via the [Create Users](https://marketplace.zoom.us/docs/api-reference/zoom-api/users/usercreate) API, the expiration time of the &lt;code&gt;start_url&lt;/code&gt; field is 90 days.   For security reasons, to retrieve the latest value for the &lt;code&gt;start_url&lt;/code&gt; field programmatically (after expiry), you must call the [Retrieve a Webinar API](https://marketplace.zoom.us/docs/api-reference/zoom-api/webinars/webinar) and refer to the value of the &lt;code&gt;start_url&lt;/code&gt; field in the response.&lt;/aside&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt; | [optional] 
**join_url** | **string** | Join URL. | [optional] 
**tracking_fields** | [**\Swagger\Client\Model\UsersuserIdmeetingsTrackingFields[]**](UsersuserIdmeetingsTrackingFields.md) | Tracking fields | [optional] 
**occurrences** | [**\Swagger\Client\Model\InlineResponse20110Occurrences[]**](InlineResponse20110Occurrences.md) | Array of occurrence objects. | [optional] 
**settings** | [**\Swagger\Client\Model\InlineResponse20118Settings**](InlineResponse20118Settings.md) |  | [optional] 
**recurrence** | [**\Swagger\Client\Model\RecurrenceWebinar**](RecurrenceWebinar.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


