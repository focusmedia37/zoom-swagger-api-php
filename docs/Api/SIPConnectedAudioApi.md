# Swagger\Client\SIPConnectedAudioApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignSIPConfig**](SIPConnectedAudioApi.md#assignSIPConfig) | **PATCH** /accounts/{accountId}/sip_trunk/settings | Assign SIP Trunk Configuration
[**assignSipTrunkNumbers**](SIPConnectedAudioApi.md#assignSipTrunkNumbers) | **POST** /accounts/{accountId}/sip_trunk/numbers | Assign Numbers
[**deleteAllSipNumbers**](SIPConnectedAudioApi.md#deleteAllSipNumbers) | **DELETE** /accounts/{accountId}/sip_trunk/numbers | Delete All Numbers
[**listSipTrunkNumbers**](SIPConnectedAudioApi.md#listSipTrunkNumbers) | **GET** /sip_trunk/numbers | List SIP Trunk Numbers


# **assignSIPConfig**
> object assignSIPConfig($account_id, $body)

Assign SIP Trunk Configuration

With SIP-connected audio, Zoom establishes a SIP trunk (a network connection specifically designed to make and deliver phone calls) over a direct and private connection between the customer’s network and the Zoom cloud. Meeting participants that dial into a meeting or have the meeting call them, and are On-Net from the perspective of the customers' IP telephony network, will be connected over this trunk rather than over the PSTN. <br><br> Using this API, a Master Account owner can copy the SIP Connected Audio configurations applied on the Master Account and enable those configurations on a Sub Account. The owner can also disable the configuration in the Sub Account where it was previously enabled.  **Prerequisites:**<br> * Pro or a higher account with SIP Connected Audio plan enabled. * Master Account Owner<br> **Scopes:** `sip_trunk:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | 
$body = new \Swagger\Client\Model\Body60(); // \Swagger\Client\Model\Body60 | 

try {
    $result = $apiInstance->assignSIPConfig($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->assignSIPConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body60**](../Model/Body60.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignSipTrunkNumbers**
> object assignSipTrunkNumbers($account_id, $body)

Assign Numbers

With SIP-connected audio, Zoom establishes a SIP trunk (a network connection specifically designed to make and deliver phone calls) over a direct and private connection between the customer’s network and the Zoom cloud. Meeting participants that dial into a meeting or have the meeting call them, and are On-Net from the perspective of the customers' IP telephony network, will be connected over this trunk rather than over the PSTN. <br><br>Use this API to assign internal numbers to a Sub Account.  **Prerequisites:**<br> * Pro or a higher account with SIP Connected Audio plan enabled. * The account must be a Master Account<br> **Scopes:** `sip_trunk:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | Unique Identifier of the Sub Account.
$body = new \Swagger\Client\Model\Body61(); // \Swagger\Client\Model\Body61 | 

try {
    $result = $apiInstance->assignSipTrunkNumbers($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->assignSipTrunkNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique Identifier of the Sub Account. |
 **body** | [**\Swagger\Client\Model\Body61**](../Model/Body61.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllSipNumbers**
> object deleteAllSipNumbers($account_id)

Delete All Numbers

With SIP-connected audio, Zoom establishes a SIP trunk (a network connection specifically designed to make and deliver phone calls) over a direct and private connection between the customer’s network and the Zoom cloud. Meeting participants that dial into a meeting or have the meeting call them, and are On-Net from the perspective of the customers' IP telephony network, will be connected over this trunk rather than over the PSTN. <br><br>Use this API to delete all internal numbers assigned to a Sub Account. **Prerequisites:**<br>  * Pro or a higher account with SIP Connected Audio plan enabled. * The account must be a Master Account<br> **Scopes:** `sip_trunk:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | Account ID of the Sub Account from which the numbers are to be deleted. This can be retrieved from [List Sub Accounts](https://marketplace.zoom.us/docs/api-reference/zoom-api/accounts/account) API.

try {
    $result = $apiInstance->deleteAllSipNumbers($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->deleteAllSipNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID of the Sub Account from which the numbers are to be deleted. This can be retrieved from [List Sub Accounts](https://marketplace.zoom.us/docs/api-reference/zoom-api/accounts/account) API. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSipTrunkNumbers**
> \Swagger\Client\Model\InlineResponse20081 listSipTrunkNumbers()

List SIP Trunk Numbers

With SIP-connected audio, Zoom establishes a SIP trunk (a network connection specifically designed to make and deliver phone calls) over a direct and private connection between the customer’s network and the Zoom cloud. Meeting participants that dial into a meeting or have the meeting call them, and are On-Net from the perspective of the customers' IP telephony network, will be connected over this trunk rather than over the PSTN. <br><br>Use this API to list all the internal numbers that are configured for SIP Connected Audio in a Zoom Account.  **Prerequisites:**<br> * Pro or a higher account with SIP Connected Audio plan enabled. * The account must be a Master Account<br> **Scopes:** `sip_trunk:master`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSipTrunkNumbers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->listSipTrunkNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20081**](../Model/InlineResponse20081.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

