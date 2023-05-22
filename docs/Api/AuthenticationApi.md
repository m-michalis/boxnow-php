# OpenAPI\Client\AuthenticationApi

All URIs are relative to https://boxnow.gr/media/yaml/TBA, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1AuthSessionsPost()**](AuthenticationApi.md#apiV1AuthSessionsPost) | **POST** /api/v1/auth-sessions | Obtain authentication tokens |


## `apiV1AuthSessionsPost()`

```php
apiV1AuthSessionsPost($api_v1_auth_sessions_post_request): \OpenAPI\Client\Model\ApiV1AuthSessionsPost200Response
```

Obtain authentication tokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_v1_auth_sessions_post_request = new \OpenAPI\Client\Model\ApiV1AuthSessionsPostRequest(); // \OpenAPI\Client\Model\ApiV1AuthSessionsPostRequest

try {
    $result = $apiInstance->apiV1AuthSessionsPost($api_v1_auth_sessions_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->apiV1AuthSessionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_auth_sessions_post_request** | [**\OpenAPI\Client\Model\ApiV1AuthSessionsPostRequest**](../Model/ApiV1AuthSessionsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV1AuthSessionsPost200Response**](../Model/ApiV1AuthSessionsPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
