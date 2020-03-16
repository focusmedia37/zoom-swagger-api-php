# InlineResponse20072

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | [**\DateTime**](\DateTime.md) | The start date for the monthly range for which you would like to retrieve recordings. The maximum range can be a month. The month should fall within the past six months period from the date of query. | [optional] 
**to** | [**\DateTime**](\DateTime.md) | The end date for the monthly range for which you would like to retrieve recordings. The maximum range can be a month. The month should fall within the past six months period from the date of query. | [optional] 
**page_size** | **string** | The number of records returned within a single API call. | [optional] 
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional] 
**meetings** | [**\Swagger\Client\Model\InlineResponse20072Meetings[]**](InlineResponse20072Meetings.md) | Meetings Object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


