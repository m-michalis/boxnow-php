# Swagger\Client\DeliveryRequestsApi

All URIs are relative to *https://boxnow.gr/media/yaml/TBA*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1DeliveryRequestsOrderNumberPut**](DeliveryRequestsApi.md#apiv1deliveryrequestsordernumberput) | **PUT** /api/v1/delivery-requests/{orderNumber} | Update a created delivery request
[**apiV1DeliveryRequestsPost**](DeliveryRequestsApi.md#apiv1deliveryrequestspost) | **POST** /api/v1/delivery-requests | Create a delivery request for your order
[**apiV1DeliveryRequestscheckAddressDeliveryPost**](DeliveryRequestsApi.md#apiv1deliveryrequestscheckaddressdeliverypost) | **POST** /api/v1/delivery-requests:checkAddressDelivery | Check delivery for address is available
[**apiV1DeliveryRequestscustomerReturnsPost**](DeliveryRequestsApi.md#apiv1deliveryrequestscustomerreturnspost) | **POST** /api/v1/delivery-requests:customerReturns | Create a request delivery of parcel that customer would like to return
[**apiV1DeliveryRequestsfromCsvPost**](DeliveryRequestsApi.md#apiv1deliveryrequestsfromcsvpost) | **POST** /api/v1/delivery-requests:fromCsv | Create delivery requests
[**apiV1SimpleDeliveryRequestsPost**](DeliveryRequestsApi.md#apiv1simpledeliveryrequestspost) | **POST** /api/v1/simple-delivery-requests | Create delivery request for order with minimal data

# **apiV1DeliveryRequestsOrderNumberPut**
> \Swagger\Client\Boxnow\InlineResponse2008 apiV1DeliveryRequestsOrderNumberPut($order_number, $body)

Update a created delivery request

Ignore properties you do not wish to change.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\BoxnowAPI\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Unique order number in Your system. The same you use to create the delivery request.
$body = new \Swagger\Client\Boxnow\DeliveryrequestsOrderNumberBody(); // \Swagger\Client\Boxnow\DeliveryrequestsOrderNumberBody | 

try {
    $result = $apiInstance->apiV1DeliveryRequestsOrderNumberPut($order_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestsOrderNumberPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Unique order number in Your system. The same you use to create the delivery request. |
 **body** | [**\Swagger\Client\Boxnow\DeliveryrequestsOrderNumberBody**](../Model/DeliveryrequestsOrderNumberBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Boxnow\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1DeliveryRequestsPost**
> \Swagger\Client\Boxnow\InlineResponse2003 apiV1DeliveryRequestsPost($body)

Create a delivery request for your order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\BoxnowAPI\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Boxnow\DeliveryRequest(); // \Swagger\Client\Boxnow\DeliveryRequest | 

try {
    $result = $apiInstance->apiV1DeliveryRequestsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Boxnow\DeliveryRequest**](../Model/DeliveryRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Boxnow\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1DeliveryRequestscheckAddressDeliveryPost**
> \Swagger\Client\Boxnow\InlineResponse2007 apiV1DeliveryRequestscheckAddressDeliveryPost($body)

Check delivery for address is available

Expect P402 error in case no location can be found for the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\BoxnowAPI\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Boxnow\V1DeliveryrequestscheckAddressDeliveryBody(); // \Swagger\Client\Boxnow\V1DeliveryrequestscheckAddressDeliveryBody | 

try {
    $result = $apiInstance->apiV1DeliveryRequestscheckAddressDeliveryPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestscheckAddressDeliveryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Boxnow\V1DeliveryrequestscheckAddressDeliveryBody**](../Model/V1DeliveryrequestscheckAddressDeliveryBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Boxnow\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1DeliveryRequestscustomerReturnsPost**
> \Swagger\Client\Boxnow\InlineResponse2006 apiV1DeliveryRequestscustomerReturnsPost($body)

Create a request delivery of parcel that customer would like to return

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\BoxnowAPI\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Boxnow\V1DeliveryrequestscustomerReturnsBody(); // \Swagger\Client\Boxnow\V1DeliveryrequestscustomerReturnsBody | 

try {
    $result = $apiInstance->apiV1DeliveryRequestscustomerReturnsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestscustomerReturnsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Boxnow\V1DeliveryrequestscustomerReturnsBody**](../Model/V1DeliveryrequestscustomerReturnsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Boxnow\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1DeliveryRequestsfromCsvPost**
> \Swagger\Client\Boxnow\InlineResponse2005[] apiV1DeliveryRequestsfromCsvPost($type, $file)

Create delivery requests

CSV Example for Delivery from a warehouse:  ``` from_location,destination_location,customer_phone_number,customer_email,customer_full_name,number_of_parcels(default 1),payment_mode(cod, prepaid - default),amount_to_be_collected(default 0.00),price_currency(default EUR) 1,2,+30 21 4 655 1234,someone@example.com,Yiannis Papadopoulos,3,cod,24.00,EUR ```  CSV Example for Delivery from AnyAPM:  ``` destination_location,parcel_size,customer_phone_number,customer_email,customer_full_name,number_of_parcels(default 1),payment_mode(cod, prepaid - default),amount_to_be_collected(default 0.00),price_currency(default EUR) 2,1,+30 21 4 655 1234,someone@example.com,Yiannis Papadopoulos,3,cod,24.00,EUR ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\BoxnowAPI\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | 
$file = "file_example"; // string | 

try {
    $result = $apiInstance->apiV1DeliveryRequestsfromCsvPost($type, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestsfromCsvPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  | [optional]
 **file** | **string****string**|  | [optional]

### Return type

[**\Swagger\Client\Boxnow\InlineResponse2005[]**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SimpleDeliveryRequestsPost**
> \Swagger\Client\Boxnow\InlineResponse2004 apiV1SimpleDeliveryRequestsPost($body)

Create delivery request for order with minimal data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\BoxnowAPI\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Boxnow\V1SimpledeliveryrequestsBody(); // \Swagger\Client\Boxnow\V1SimpledeliveryrequestsBody | 

try {
    $result = $apiInstance->apiV1SimpleDeliveryRequestsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1SimpleDeliveryRequestsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Boxnow\V1SimpledeliveryrequestsBody**](../Model/V1SimpledeliveryrequestsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Boxnow\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

