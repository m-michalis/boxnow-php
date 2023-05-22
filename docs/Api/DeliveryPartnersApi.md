# Boxnow\DeliveryPartnersApi

All URIs are relative to https://boxnow.gr/media/yaml/TBA, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1DeliveryPartnersGet()**](DeliveryPartnersApi.md#apiV1DeliveryPartnersGet) | **GET** /api/v1/delivery-partners | List of available delivery partners |


## `apiV1DeliveryPartnersGet()`

```php
apiV1DeliveryPartnersGet(): \Boxnow\Model\ApiV1DeliveryPartnersGet200Response
```

List of available delivery partners

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\DeliveryPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV1DeliveryPartnersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryPartnersApi->apiV1DeliveryPartnersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Boxnow\Model\ApiV1DeliveryPartnersGet200Response**](../Model/ApiV1DeliveryPartnersGet200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
