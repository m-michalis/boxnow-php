# Swagger\Client\AuthenticationApi

All URIs are relative to *https://boxnow.gr/media/yaml/TBA*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1AuthSessionsPost**](AuthenticationApi.md#apiv1authsessionspost) | **POST** /api/v1/auth-sessions | Obtain authentication tokens

# **apiV1AuthSessionsPost**
> \Swagger\Client\Boxnow\InlineResponse200 apiV1AuthSessionsPost($body)

Obtain authentication tokens

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\BoxnowAPI\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Boxnow\V1AuthsessionsBody(); // \Swagger\Client\Boxnow\V1AuthsessionsBody | 

try {
    $result = $apiInstance->apiV1AuthSessionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->apiV1AuthSessionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Boxnow\V1AuthsessionsBody**](../Model/V1AuthsessionsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Boxnow\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

