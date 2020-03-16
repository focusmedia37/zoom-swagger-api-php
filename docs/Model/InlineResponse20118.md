# InlineResponse20118

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | Webinar agenda. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Create time. | [optional] 
**duration** | **int** | Webinar duration. | [optional] 
**host_id** | **string** | ID of the user set as host of the webinar. | [optional] 
**id** | **int** | Webinar ID, also known as the webinar number. | [optional] 
**join_url** | **string** | Join URL. | [optional] 
**occurrences** | [**\Swagger\Client\Model\InlineResponse20110Occurrences[]**](InlineResponse20110Occurrences.md) | Array of occurrence objects. | [optional] 
**recurrence** | [**\Swagger\Client\Model\RecurrenceWebinar**](RecurrenceWebinar.md) |  | [optional] 
**settings** | [**\Swagger\Client\Model\InlineResponse20118Settings**](InlineResponse20118Settings.md) |  | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Webinar start time. | [optional] 
**start_url** | **string** | &lt;br&gt;&lt;aside&gt;The &lt;code&gt;start_url&lt;/code&gt; of a Webinar is a URL using which a host or an alternative host can start the Webinar.   The expiration time for the &lt;code&gt;start_url&lt;/code&gt; field listed in the response of [Create a Webinar API](https://marketplace.zoom.us/docs/api-reference/zoom-api/webinars/webinarcreate) is two hours for all regular users.    For users created using the &lt;code&gt;custCreate&lt;/code&gt; option via the [Create Users](https://marketplace.zoom.us/docs/api-reference/zoom-api/users/usercreate) API, the expiration time of the &lt;code&gt;start_url&lt;/code&gt; field is 90 days.   For security reasons, to retrieve the latest value for the &lt;code&gt;start_url&lt;/code&gt; field programmatically (after expiry), you must call the [Retrieve a Webinar API](https://marketplace.zoom.us/docs/api-reference/zoom-api/webinars/webinar) and refer to the value of the &lt;code&gt;start_url&lt;/code&gt; field in the response.&lt;/aside&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt; | [optional] 
**timezone** | **string** | Time zone to format start_time. | [optional] 
**topic** | **string** | Webinar topic. | [optional] 
**tracking_fields** | [**\Swagger\Client\Model\UsersuserIdmeetingsTrackingFields[]**](UsersuserIdmeetingsTrackingFields.md) | Tracking fields | [optional] 
**type** | **int** | Webinar Types:&lt;br&gt;&#x60;5&#x60; - Webinar.&lt;br&gt;&#x60;6&#x60; - Recurring webinar with no fixed time.&lt;br&gt;&#x60;9&#x60; - Recurring webinar with a fixed time. | [optional] 
**uuid** | **string** | Unique identifier for a Webinar. Each webinar instance will generate its own UUID. Once a Webinar ends, the value of uuid for the same webinar will be different from when it was scheduled. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


