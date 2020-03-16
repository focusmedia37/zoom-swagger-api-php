# Swagger\Client\RoomsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addARoom**](RoomsApi.md#addARoom) | **POST** /rooms | Add a Zoom Room
[**changeZRLocation**](RoomsApi.md#changeZRLocation) | **PUT** /rooms/{roomId}/location | Change a Zoom Room&#39;s Location
[**deleteAZoomRoom**](RoomsApi.md#deleteAZoomRoom) | **DELETE** /rooms/{roomId} | Delete a Zoom Room
[**getZRProfile**](RoomsApi.md#getZRProfile) | **GET** /rooms/{roomId} | Get Zoom Room Profile
[**getZRSettings**](RoomsApi.md#getZRSettings) | **GET** /rooms/{roomId}/settings | Get Zoom Room Settings
[**listZRDevices**](RoomsApi.md#listZRDevices) | **GET** /rooms/{roomId}/devices | List Zoom Room Devices
[**listZoomRooms**](RoomsApi.md#listZoomRooms) | **GET** /rooms | List Zoom Rooms
[**updateRoomProfile**](RoomsApi.md#updateRoomProfile) | **PATCH** /rooms/{roomId} | Update a Zoom Room Profile
[**updateZRSettings**](RoomsApi.md#updateZRSettings) | **PATCH** /rooms/{roomId}/settings | Update Zoom Room Settings


# **addARoom**
> \Swagger\Client\Model\InlineResponse201 addARoom($body)

Add a Zoom Room

Use this API to [add a Zoom Room](https://support.zoom.us/hc/en-us/articles/202822279-Add-Zoom-Rooms-on-Web-Portal) to a Zoom account.<br><br> **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> **Scopes**: `room:write:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 

try {
    $result = $apiInstance->addARoom($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->addARoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeZRLocation**
> object changeZRLocation($room_id, $body)

Change a Zoom Room's Location

An account owner of a Zoom account can establish a [Zoom Rooms Location Hierarchy](https://support.zoom.us/hc/en-us/articles/115000342983-Zoom-Rooms-Location-Hierarchy) to better organize Zoom Rooms spread accress various location. The location can be structured in a hierarchy with Country being the top-level location, followed by city, campus, building, and floor. Use this API to assign a new location for a Zoom Room. Note that the Zoom Room can be assigned only to the lowest level location available in the hierarchy. **Prerequisite:**<br> * Account owner or admin permission * Zoom Rooms version 4.0 or higher<br> **Scopes:** `room:write:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = "room_id_example"; // string | Unique Identifier of the Zoom Room.
$body = new \Swagger\Client\Model\Body64(); // \Swagger\Client\Model\Body64 | 

try {
    $result = $apiInstance->changeZRLocation($room_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->changeZRLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of the Zoom Room. |
 **body** | [**\Swagger\Client\Model\Body64**](../Model/Body64.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAZoomRoom**
> object deleteAZoomRoom($room_id)

Delete a Zoom Room

[Remove](https://support.zoom.us/hc/en-us/articles/360033432032-Zoom-Room-Device-Profiles#h_e55b2092-c418-4b02-819f-44de51448900) a specific Zoom Room profile from a Zoom account.<br><br> **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> **Scopes**: `room:write:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = "room_id_example"; // string | Unique Identifier of a Zoom Room.

try {
    $result = $apiInstance->deleteAZoomRoom($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deleteAZoomRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of a Zoom Room. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZRProfile**
> \Swagger\Client\Model\InlineResponse20079 getZRProfile($room_id)

Get Zoom Room Profile

Zoom Rooms is a software-based room system that provides an integrated experience for audio conferencing, wireless screen sharing and video conferencing. Use this API to get detailed information on a specific Zoom Room in a Zoom account.  **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> **Scopes**: `room:read:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = "room_id_example"; // string | Unique Identifier of the Zoom Room. This can be retrieved from the response of [List Zoom Rooms](https://marketplace.zoom.us/docs/api-reference/zoom-api/rooms/listzoomrooms) API.

try {
    $result = $apiInstance->getZRProfile($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getZRProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of the Zoom Room. This can be retrieved from the response of [List Zoom Rooms](https://marketplace.zoom.us/docs/api-reference/zoom-api/rooms/listzoomrooms) API. |

### Return type

[**\Swagger\Client\Model\InlineResponse20079**](../Model/InlineResponse20079.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZRSettings**
> object getZRSettings($setting_type, $room_id)

Get Zoom Room Settings

Get information on meeting or alert settings applied to a specific Zoom Room. By default, only **Meeting Settings** are returned. To view only **Alert Settings**, specify `alert` as the value of the `setting_type` query parameter.<br> **Prerequisites:**<br> * Zoom Room licenses * Owner or Admin privileges on the Zoom Account.<br> **Scopes:** `room:read:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_type = "meeting"; // string | The type of setting that you would like to retrieve.<br> `alert`: Alert Settings applied on the Zoom Rooms Account.<br> `meeting`: Meeting settings of the Zoom Rooms Account.
$room_id = "room_id_example"; // string | Unique identifier of the Zoom Room.

try {
    $result = $apiInstance->getZRSettings($setting_type, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getZRSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_type** | **string**| The type of setting that you would like to retrieve.&lt;br&gt; &#x60;alert&#x60;: Alert Settings applied on the Zoom Rooms Account.&lt;br&gt; &#x60;meeting&#x60;: Meeting settings of the Zoom Rooms Account. | [default to meeting]
 **room_id** | **string**| Unique identifier of the Zoom Room. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listZRDevices**
> \Swagger\Client\Model\InlineResponse20080 listZRDevices($room_id)

List Zoom Room Devices

List information about the devices that are being used for a specific [Zoom Room](https://support.zoom.us/hc/en-us/articles/207483343-Getting-Started-with-Zoom-Rooms) in an account.  **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> * Account owner or admin permissions. **Scopes**: `room:read:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = "room_id_example"; // string | Unique Identifier of the Zoom Room. This can be retrieved from the response of [List Zoom Rooms](https://marketplace.zoom.us/docs/api-reference/zoom-api/rooms/listzoomrooms) API.

try {
    $result = $apiInstance->listZRDevices($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listZRDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of the Zoom Room. This can be retrieved from the response of [List Zoom Rooms](https://marketplace.zoom.us/docs/api-reference/zoom-api/rooms/listzoomrooms) API. |

### Return type

[**\Swagger\Client\Model\InlineResponse20080**](../Model/InlineResponse20080.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listZoomRooms**
> \Swagger\Client\Model\InlineResponse2002 listZoomRooms($status, $type, $unassigned_rooms, $page_size, $next_page_token, $location_id)

List Zoom Rooms

Zoom Rooms is a software-based room system that provides an integrated experience for audio conferencing, wireless screen sharing and video conferencing. Use this API to list all the existing [Zoom Rooms](https://support.zoom.us/hc/en-us/articles/207483343-Getting-Started-with-Zoom-Rooms) in a Zoom account.<br><br> **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> **Scopes**: `room:read:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "status_example"; // string | The status of the Zoom Room.
$type = "type_example"; // string | Type of the Zoom Rooms.
$unassigned_rooms = false; // bool | Use this query parameter with a value of `true` if you would like to see Zoom Rooms in your account that have not been assigned to anyone yet.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$location_id = "location_id_example"; // string | Parent location ID of the Zoom Room.

try {
    $result = $apiInstance->listZoomRooms($status, $type, $unassigned_rooms, $page_size, $next_page_token, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listZoomRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| The status of the Zoom Room. | [optional]
 **type** | **string**| Type of the Zoom Rooms. | [optional]
 **unassigned_rooms** | **bool**| Use this query parameter with a value of &#x60;true&#x60; if you would like to see Zoom Rooms in your account that have not been assigned to anyone yet. | [optional] [default to false]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **location_id** | **string**| Parent location ID of the Zoom Room. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRoomProfile**
> object updateRoomProfile($room_id, $body)

Update a Zoom Room Profile

Update basic information on a specific Zoom Room in a Zoom account.<br>  **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> **Scopes**: `room:write:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = "room_id_example"; // string | Unique Identifier of a Zoom Room.
$body = new \Swagger\Client\Model\Body59(); // \Swagger\Client\Model\Body59 | 

try {
    $result = $apiInstance->updateRoomProfile($room_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateRoomProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of a Zoom Room. |
 **body** | [**\Swagger\Client\Model\Body59**](../Model/Body59.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateZRSettings**
> object updateZRSettings($room_id, $body, $setting_type)

Update Zoom Room Settings

Update either meeting or alert settings applied to a specific Zoom Room. To update **Alert Settings**, specify `alert` as the value of the `setting_type` query parameter. To update **Meeting Settings**, specify `meeting` as the value of the `setting_type` query parameter.<br> **Prerequisites:**<br> * Zoom Room licenses * Owner or Admin privileges on the Zoom Account.<br> **Scopes:** `room:write:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = "room_id_example"; // string | Unique Identifier of the Zoom Room.
$body = new \stdClass; // object | 
$setting_type = "setting_type_example"; // string | The type of setting that you would like to update.<br> `alert`: Alert Settings applied on the Zoom Rooms Account.<br> `meeting`: Meeting settings of the Zoom Rooms Account.

try {
    $result = $apiInstance->updateZRSettings($room_id, $body, $setting_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateZRSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of the Zoom Room. |
 **body** | **object**|  | [optional]
 **setting_type** | **string**| The type of setting that you would like to update.&lt;br&gt; &#x60;alert&#x60;: Alert Settings applied on the Zoom Rooms Account.&lt;br&gt; &#x60;meeting&#x60;: Meeting settings of the Zoom Rooms Account. | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

