# Recurrence

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **int** | Recurrence meeting types:&lt;br&gt;&#x60;1&#x60; - Daily.&lt;br&gt;&#x60;2&#x60; - Weekly.&lt;br&gt;&#x60;3&#x60; - Monthly. | [optional] 
**repeat_interval** | **int** | At which interval should the meeting repeat? For a daily meeting there&#39;s a maximum of 90 days. For a weekly meeting there is a maximum of 12 weeks. For a monthly meeting there is a maximum of 3 months. | [optional] 
**weekly_days** | **string** | Days of the week the meeting should repeat.  Note: Multiple values should be separated by a comma. &lt;br&gt;&#x60;1&#x60;  - Sunday. &lt;br&gt;&#x60;2&#x60; - Monday.&lt;br&gt;&#x60;3&#x60; - Tuesday.&lt;br&gt;&#x60;4&#x60; -  Wednesday.&lt;br&gt;&#x60;5&#x60; -  Thursday.&lt;br&gt;&#x60;6&#x60; - Friday.&lt;br&gt;&#x60;7&#x60; - Saturday. | [optional] 
**monthly_day** | **int** | Day in the month the meeting is to be scheduled. The value range is from 1 to 31. | [optional] 
**monthly_week** | **int** | The week a meeting will recur each month.&lt;br&gt;&#x60;-1&#x60; - Last week.&lt;br&gt;&#x60;1&#x60; - First week.&lt;br&gt;&#x60;2&#x60; - Second week.&lt;br&gt;&#x60;3&#x60; - Third week.&lt;br&gt;&#x60;4&#x60; - Fourth week. | [optional] 
**monthly_week_day** | **int** | The weekday a meeting should recur each month.&lt;br&gt;&#x60;1&#x60; - Sunday.&lt;br&gt;&#x60;2&#x60; - Monday.&lt;br&gt;&#x60;3&#x60; - Tuesday.&lt;br&gt;&#x60;4&#x60; -  Wednesday.&lt;br&gt;&#x60;5&#x60; - Thursday.&lt;br&gt;&#x60;6&#x60; - Friday.&lt;br&gt;&#x60;7&#x60; - Saturday. | [optional] 
**end_times** | **int** | Select how many times the meeting will recur before it is canceled. (Cannot be used with \&quot;end_date_time\&quot;.) | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | Select a date the meeting will recur before it is canceled. Should be in UTC time, such as 2017-11-25T12:00:00Z. (Cannot be used with \&quot;end_times\&quot;.) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


