# Swagger\Client\DeliveryPartnersApi

All URIs are relative to *https://boxnow.gr/media/yaml/TBA*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1DeliveryPartnersGet**](DeliveryPartnersApi.md#apiv1deliverypartnersget) | **GET** /api/v1/delivery-partners | List of available delivery partners

# **apiV1DeliveryPartnersGet**
> \Swagger\Client\Boxnow\InlineResponse20012 apiV1DeliveryPartnersGet()

List of available delivery partners

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\BoxnowAPI\DeliveryPartnersApi(
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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Boxnow\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

