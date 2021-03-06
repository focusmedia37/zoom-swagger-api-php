# Swagger\Client\RolesApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRoleMembers**](RolesApi.md#addRoleMembers) | **POST** /roles/{roleId}/members | Assign a Role to Members
[**createRole**](RolesApi.md#createRole) | **POST** /roles | Create a Role
[**deleteRole**](RolesApi.md#deleteRole) | **DELETE** /roles/{roleId} | Delete a Role
[**getRoleInformation**](RolesApi.md#getRoleInformation) | **GET** /roles/{roleId} | Get Role Information
[**roleMemberDelete**](RolesApi.md#roleMemberDelete) | **DELETE** /roles/{roleId}/members/{memberId} | Unassign a Member&#39;s Role
[**roleMembers**](RolesApi.md#roleMembers) | **GET** /roles/{roleId}/members | List Members in a Role
[**roles**](RolesApi.md#roles) | **GET** /roles | List Roles
[**updateRole**](RolesApi.md#updateRole) | **PATCH** /roles/{roleId} | Update Role Information


# **addRoleMembers**
> \Swagger\Client\Model\InlineResponse20115 addRoleMembers($role_id, $body)

Assign a Role to Members

User [roles](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) can have a set of permissions that allows access only to the pages a user needs to view or edit. Use this API to [assign a role](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control#h_748b6fd8-5057-4cf4-bbfd-787909c09db0) to members.  **Scopes:** `role:write:admin`<br>  <br> **Prerequisites:**<br> * A Pro or a higher plan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = "role_id_example"; // string | The role ID
$body = new \Swagger\Client\Model\Body29(); // \Swagger\Client\Model\Body29 | Role members

try {
    $result = $apiInstance->addRoleMembers($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->addRoleMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| The role ID |
 **body** | [**\Swagger\Client\Model\Body29**](../Model/Body29.md)| Role members |

### Return type

[**\Swagger\Client\Model\InlineResponse20115**](../Model/InlineResponse20115.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRole**
> object createRole($body)

Create a Role

Each Zoom user automatically has a role which can either be owner, administrator, or a member.   **Pre-requisite:**<br> * Pro or higher plan. * For setting the initial role, you must be the Account Owner.<br> * For subsequent role management, you must be the Account Owner or user with role management permissions.<br> **Scopes:** `role:write:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body28(); // \Swagger\Client\Model\Body28 | 

try {
    $result = $apiInstance->createRole($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->createRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body28**](../Model/Body28.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRole**
> deleteRole($role_id)

Delete a Role

Each Zoom user automatically has a role which can either be owner, administrator, or a member. Account Owners and users with edit privileges for Role management can add customized roles with a list.  Use this API to delete a role.<br> **Pre-requisite:**<br> * A Pro or higher plan.<br> * For role management and updates, you must be the Account Owner or user with role management permissions.  **Scopes:** `role:write:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = "role_id_example"; // string | Role Id.

try {
    $apiInstance->deleteRole($role_id);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| Role Id. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoleInformation**
> \Swagger\Client\Model\InlineResponse20070 getRoleInformation($role_id)

Get Role Information

Each Zoom user automatically has a role which can either be owner, administrator, or a member. Account Owners and users with edit privileges for Role management can add customized roles with a list of privileges.  Use this API to get information including specific privileges assigned to a [role](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control).<br> **Pre-requisite:**<br> * A Pro or higher plan.<br> * For role management and updates, you must be the Account Owner or user with role management permissions.  **Scopes:** `role:read:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = "role_id_example"; // string | Role Id.

try {
    $result = $apiInstance->getRoleInformation($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRoleInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| Role Id. |

### Return type

[**\Swagger\Client\Model\InlineResponse20070**](../Model/InlineResponse20070.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleMemberDelete**
> roleMemberDelete($role_id, $member_id)

Unassign a Member's Role

User [roles](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) can have a set of permissions that allows access only to the pages a user needs to view or edit. Use this API to unassign a user's role.  **Scope:** `role:write:admin`<br>  <br> **Prerequisites:**<br> * A Pro or a higher plan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = "role_id_example"; // string | The role ID
$member_id = "member_id_example"; // string | Member's ID

try {
    $apiInstance->roleMemberDelete($role_id, $member_id);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->roleMemberDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| The role ID |
 **member_id** | **string**| Member&#39;s ID |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleMembers**
> \Swagger\Client\Model\RoleMembersList roleMembers($role_id)

List Members in a Role

User [roles](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) can have a set of permissions that allows access only to the pages a user needs to view or edit. Use this API to list all the members that are assigned a specific role.  **Scope:** `role:read:admin`<br>  <br>**Prerequisites:**<br> * A Pro or a higher plan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = "role_id_example"; // string | The role ID

try {
    $result = $apiInstance->roleMembers($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->roleMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| The role ID |

### Return type

[**\Swagger\Client\Model\RoleMembersList**](../Model/RoleMembersList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roles**
> object roles()

List Roles

List [roles](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) on your account  **Scopes:** `role:read:admin`<br>  <br> **Prerequisites** : *  Pro or higher plan.  *  For setting the initial role, you must be the Account Owner.  *  For subsequent role management, you must be the Account Owner or user with role management permissions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->roles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->roles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRole**
> object updateRole($role_id, $body)

Update Role Information

Each Zoom user automatically has a [role](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) which can either be owner, administrator, or a member. Account Owners and users with edit privileges for Role management can add customized roles with a list.  Use this API to change the privileges, name and description of a specific role.<br> **Pre-requisite:**<br> * A Pro or higher plan.<br> * For role management and updates, you must be the Account Owner or user with role management permissions.<br>**Scopes:** `role:write:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = "role_id_example"; // string | Role Id
$body = new \Swagger\Client\Model\Body52(); // \Swagger\Client\Model\Body52 | 

try {
    $result = $apiInstance->updateRole($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->updateRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| Role Id |
 **body** | [**\Swagger\Client\Model\Body52**](../Model/Body52.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

