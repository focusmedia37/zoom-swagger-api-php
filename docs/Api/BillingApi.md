# Swagger\Client\BillingApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBilling**](BillingApi.md#accountBilling) | **GET** /accounts/{accountId}/billing | Get Billing Information
[**accountBillingUpdate**](BillingApi.md#accountBillingUpdate) | **PATCH** /accounts/{accountId}/billing | Update Billing Information
[**accountPlanAddonCancel**](BillingApi.md#accountPlanAddonCancel) | **PATCH** /accounts/{accountId}/plans/addons/status | Cancel  Additional Plans
[**accountPlanAddonCreate**](BillingApi.md#accountPlanAddonCreate) | **POST** /accounts/{accountId}/plans/addons | Add an Additional Plan
[**accountPlanAddonUpdate**](BillingApi.md#accountPlanAddonUpdate) | **PUT** /accounts/{accountId}/plans/addons | Update an Additional Plan
[**accountPlanBaseDelete**](BillingApi.md#accountPlanBaseDelete) | **PATCH** /accounts/{accountId}/plans/base/status | Cancel Base Plan
[**accountPlanBaseUpdate**](BillingApi.md#accountPlanBaseUpdate) | **PUT** /accounts/{accountId}/plans/base | Update a Base Plan
[**accountPlanCreate**](BillingApi.md#accountPlanCreate) | **POST** /accounts/{accountId}/plans | Subscribe to Plans
[**accountPlans**](BillingApi.md#accountPlans) | **GET** /accounts/{accountId}/plans | Get Plan Information
[**getPlanUsage**](BillingApi.md#getPlanUsage) | **GET** /accounts/{accountId}/plans/usage | Get Plan Usage


# **accountBilling**
> \Swagger\Client\Model\InlineResponse20014 accountBilling($account_id)

Get Billing Information

Get [billing information](https://support.zoom.us/hc/en-us/articles/201363263-About-Billing) of a Sub Account under a Master Account.<br><br>  **Prerequisites:** * Pro or a higher paid account with Master Account option enabled. <br> **Scope**:`billing:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.

try {
    $result = $apiInstance->accountBilling($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountBilling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountBillingUpdate**
> accountBillingUpdate($account_id, $body)

Update Billing Information

Update [billing information](https://support.zoom.us/hc/en-us/articles/201363263-About-Billing) for a Sub Account under a Master account. <aside>This is only for a paid sub account that is paid by a master account.</aside><br><br>  **Prerequisites:** * Pro or a higher paid account with Master Account option enabled. <br> **Scope**:`billing:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.
$body = new \Swagger\Client\Model\Body12(); // \Swagger\Client\Model\Body12 | 

try {
    $apiInstance->accountBillingUpdate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountBillingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | [**\Swagger\Client\Model\Body12**](../Model/Body12.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlanAddonCancel**
> accountPlanAddonCancel($account_id, $body)

Cancel  Additional Plans

[Cancel additional plan](https://support.zoom.us/hc/en-us/articles/203634215-How-Do-I-Cancel-My-Subscription-) for a sub account. Only a Master account holder who pays for this sub account can cancel the add-on. The cancellation does not provide refund for the current subscription. The service remains active for the current session.  **Prerequisites:**<br> * Pro or a higher plan with Master Account option enabled. * The Sub Account must be a paid account.<br> **Scope:** `billing:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | 
$body = new \Swagger\Client\Model\Body49(); // \Swagger\Client\Model\Body49 | 

try {
    $apiInstance->accountPlanAddonCancel($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanAddonCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body49**](../Model/Body49.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlanAddonCreate**
> accountPlanAddonCreate($account_id, $body)

Add an Additional Plan

Add an additional plan for a sub account. <br> <br>**Prerequisites:**<br> * Pro or a higher plan with Master Account enabled. * The Sub Account must be a paid account. The billing charges for the Sub Account must be paid by the Master Account.<br> **Scopes**: `billing:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.
$body = new \stdClass; // object | 

try {
    $apiInstance->accountPlanAddonCreate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanAddonCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | **object**|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlanAddonUpdate**
> accountPlanAddonUpdate($account_id, $body)

Update an Additional Plan

Update an additional plan for a sub account.<br> <br>**Prerequisites:**<br> * Pro or a higher plan with Master Account enabled. * The Sub Account must be a paid account. The billing charges for the Sub Account must be paid by the Master Account.<br> **Scopes**: `billing:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.
$body = new \Swagger\Client\Model\Body14(); // \Swagger\Client\Model\Body14 | 

try {
    $apiInstance->accountPlanAddonUpdate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanAddonUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | [**\Swagger\Client\Model\Body14**](../Model/Body14.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlanBaseDelete**
> accountPlanBaseDelete($account_id, $body)

Cancel Base Plan

[Cancel a base plan](https://support.zoom.us/hc/en-us/articles/203634215-How-Do-I-Cancel-My-Subscription-) for a sub account. Only a master account holder who pays for this sub account can cancel the plan. The cancellation does not provide refund for the current subscription.  The service remains active for the current session.  **Scopes**: `billing:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | 
$body = new \Swagger\Client\Model\Body48(); // \Swagger\Client\Model\Body48 | 

try {
    $apiInstance->accountPlanBaseDelete($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanBaseDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body48**](../Model/Body48.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlanBaseUpdate**
> accountPlanBaseUpdate($account_id, $body)

Update a Base Plan

Update a base plan of a Sub Account. <aside> This can only update a base plan for a paid Sub Account that is paid by a Master Account.</aside><br><br> **Scopes:** `billing:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.
$body = new \Swagger\Client\Model\Body13(); // \Swagger\Client\Model\Body13 | 

try {
    $apiInstance->accountPlanBaseUpdate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanBaseUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | [**\Swagger\Client\Model\Body13**](../Model/Body13.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlanCreate**
> accountPlanCreate($account_id, $body)

Subscribe to Plans

Subscribe plans for a Sub Account under a Master Account. <aside> The plans can only be subscribed for an existing free Sub Account and the subscriptions charge should be paid by a Master Account.</aside><br><br> **Scopes**: `billing:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.
$body = new \stdClass; // object | 

try {
    $apiInstance->accountPlanCreate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | [**object**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlans**
> \Swagger\Client\Model\InlineResponse20015 accountPlans($account_id)

Get Plan Information

Get plan information for a Sub Account under the Master account.  <aside> This is only for a Sub Account that is paid by a Master Account.</aside><br><br> **Scopes:** `billing:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.

try {
    $result = $apiInstance->accountPlans($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlanUsage**
> \Swagger\Client\Model\InlineResponse20071 getPlanUsage($account_id)

Get Plan Usage

Get information on usage of [plans](https://marketplace.zoom.us/docs/api-reference/other-references/plans) on a Master Account.  **Prerequisite**:<br> Account type: Master Account on a paid Pro, Business or Enterprise plan.<br> **Scope:** `billing:master`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->getPlanUsage($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getPlanUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20071**](../Model/InlineResponse20071.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

