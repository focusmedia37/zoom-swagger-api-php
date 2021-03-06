# Swagger\Client\ChatbotMessagesApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAChatbotMessage**](ChatbotMessagesApi.md#deleteAChatbotMessage) | **DELETE** /im/chat/messages/{message_id} | Delete a Chatbot Message
[**editChatbotMessage**](ChatbotMessagesApi.md#editChatbotMessage) | **PUT** /im/chat/messages/{message_id} | Edit a Chatbot Message
[**sendchatbot**](ChatbotMessagesApi.md#sendchatbot) | **POST** /im/chat/messages | Send Chatbot Messages


# **deleteAChatbotMessage**
> \Swagger\Client\Model\InlineResponse20057 deleteAChatbotMessage($message_id, $body)

Delete a Chatbot Message

Delete a message that was sent by your chatbot app.   **Scopes:** `imchat:bot`<br>  **Authorization Flow**: Client Credentials Flow<br><br> To get authorized, make a POST request to `/oauth/token` endpoint with grant type as `client_credentials`. <br>Use `https://api.zoom.us/oauth/token?grant_type=client_credentials` as the endpoint for the request.  You will need to send your ClientID and Secret as a Basic base64 encoded AUthorization header. Ex. `Basic base64Encode({client_id}:{client_sceret})`<br><br> Next, use the token received (access_token) as a bearer token while making the DELETE /im/chat/messages/{message_id} request to delete a message.<br><br> Learn more about how to authotize chatbots in the [Chatbot Authorization](https://marketplace.zoom.us/docs/guides/chatbots/authorization) guide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChatbotMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = "message_id_example"; // string | 
$body = new \Swagger\Client\Model\Body41(); // \Swagger\Client\Model\Body41 | 

try {
    $result = $apiInstance->deleteAChatbotMessage($message_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotMessagesApi->deleteAChatbotMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body41**](../Model/Body41.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editChatbotMessage**
> \Swagger\Client\Model\InlineResponse20056 editChatbotMessage($message_id, $body)

Edit a Chatbot Message

Edit a message that was [sent](https://marketplace.zoom.us/docs/api-reference/zoom-api/im-chat/sendchatbot) by your Chatbot app.<br> After sending a message using the Send Chatbot Message API, you must store the messageId returned in the response so that you can make edits to the associated message using this API.  **Scope:** `imchat:bot`<br><br> **Authorization Flow**: Client Credentials Flow<br><br> To get authorized, make a POST request to `/oauth/token` endpoint with grant type as `client_credentials`. <br>Use `https://api.zoom.us/oauth/token?grant_type=client_credentials` as the endpoint for the request.  You will need to send your ClientID and Secret as a Basic base64 encoded AUthorization header. Ex. `Basic base64Encode({client_id}:{client_sceret})`<br><br> Next, use the token received (access_token) as a bearer token while making the PUT /im/chat/messages/{message_id} request to edit a chatbot message.<br><br> Learn more about how to authotize chatbots in the [Chatbot Authorization](https://marketplace.zoom.us/docs/guides/chatbots/authorization) guide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChatbotMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = "message_id_example"; // string | Unique Identifier of the message that needs to be updated. This should be retrieved from the response of [Send Chatbot Message API](https://marketplace.zoom.us/docs/api-reference/zoom-api/im-chat/sendchatbot).
$body = new \Swagger\Client\Model\Body40(); // \Swagger\Client\Model\Body40 | 

try {
    $result = $apiInstance->editChatbotMessage($message_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotMessagesApi->editChatbotMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Unique Identifier of the message that needs to be updated. This should be retrieved from the response of [Send Chatbot Message API](https://marketplace.zoom.us/docs/api-reference/zoom-api/im-chat/sendchatbot). |
 **body** | [**\Swagger\Client\Model\Body40**](../Model/Body40.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendchatbot**
> sendchatbot($body)

Send Chatbot Messages

Send chatbot messages from your marketplace chatbot app.<br><br> **Scopes:** `imchat:bot`<br> **Authorization Flow**: Client Credentials Flow<br><br> To get authorized, make a POST request to `/oauth/token` endpoint with grant type as `client_credentials`. <br>Use `https://api.zoom.us/oauth/token?grant_type=client_credentials` as the endpoint for the request.  You will need to send your ClientID and Secret as a Basic base64 encoded AUthorization header. Ex. `Basic base64Encode({client_id}:{client_sceret})`<br><br> Next, use the token recieved (access_token) as a bearer token while making the POST /im/chat/messages request to send chatbot messages.<br><br> Learn more about how to authorize chatbots in the [Chatbot Authorization](https://marketplace.zoom.us/docs/guides/chatbots/authorization) guide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChatbotMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body39(); // \Swagger\Client\Model\Body39 | 

try {
    $apiInstance->sendchatbot($body);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotMessagesApi->sendchatbot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body39**](../Model/Body39.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

