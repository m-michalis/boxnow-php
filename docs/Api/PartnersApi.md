# Boxnow\PartnersApi

All URIs are relative to http://TBA, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1EntrustedPartnersGet()**](PartnersApi.md#apiV1EntrustedPartnersGet) | **GET** /api/v1/entrusted-partners | Get list of partner you can manage |


## `apiV1EntrustedPartnersGet()`

```php
apiV1EntrustedPartnersGet(): \Boxnow\Model\ApiV1EntrustedPartnersGet200ResponseInner[]
```

Get list of partner you can manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV1EntrustedPartnersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->apiV1EntrustedPartnersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Boxnow\Model\ApiV1EntrustedPartnersGet200ResponseInner[]**](../Model/ApiV1EntrustedPartnersGet200ResponseInner.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
