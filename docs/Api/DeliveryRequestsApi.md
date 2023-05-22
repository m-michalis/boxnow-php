# OpenAPI\Client\DeliveryRequestsApi

All URIs are relative to https://boxnow.gr/media/yaml/TBA, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1DeliveryRequestsOrderNumberPut()**](DeliveryRequestsApi.md#apiV1DeliveryRequestsOrderNumberPut) | **PUT** /api/v1/delivery-requests/{orderNumber} | Update a created delivery request |
| [**apiV1DeliveryRequestsPost()**](DeliveryRequestsApi.md#apiV1DeliveryRequestsPost) | **POST** /api/v1/delivery-requests | Create a delivery request for your order |
| [**apiV1DeliveryRequestscheckAddressDeliveryPost()**](DeliveryRequestsApi.md#apiV1DeliveryRequestscheckAddressDeliveryPost) | **POST** /api/v1/delivery-requests:checkAddressDelivery | Check delivery for address is available |
| [**apiV1DeliveryRequestscustomerReturnsPost()**](DeliveryRequestsApi.md#apiV1DeliveryRequestscustomerReturnsPost) | **POST** /api/v1/delivery-requests:customerReturns | Create a request delivery of parcel that customer would like to return |
| [**apiV1DeliveryRequestsfromCsvPost()**](DeliveryRequestsApi.md#apiV1DeliveryRequestsfromCsvPost) | **POST** /api/v1/delivery-requests:fromCsv | Create delivery requests |
| [**apiV1SimpleDeliveryRequestsPost()**](DeliveryRequestsApi.md#apiV1SimpleDeliveryRequestsPost) | **POST** /api/v1/simple-delivery-requests | Create delivery request for order with minimal data |


## `apiV1DeliveryRequestsOrderNumberPut()`

```php
apiV1DeliveryRequestsOrderNumberPut($order_number, $api_v1_delivery_requests_order_number_put_request): \OpenAPI\Client\Model\ApiV1DeliveryRequestsOrderNumberPut200Response
```

Update a created delivery request

Ignore properties you do not wish to change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = 'order_number_example'; // string | Unique order number in Your system. The same you use to create the delivery request.
$api_v1_delivery_requests_order_number_put_request = new \OpenAPI\Client\Model\ApiV1DeliveryRequestsOrderNumberPutRequest(); // \OpenAPI\Client\Model\ApiV1DeliveryRequestsOrderNumberPutRequest

try {
    $result = $apiInstance->apiV1DeliveryRequestsOrderNumberPut($order_number, $api_v1_delivery_requests_order_number_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestsOrderNumberPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_number** | **string**| Unique order number in Your system. The same you use to create the delivery request. | |
| **api_v1_delivery_requests_order_number_put_request** | [**\OpenAPI\Client\Model\ApiV1DeliveryRequestsOrderNumberPutRequest**](../Model/ApiV1DeliveryRequestsOrderNumberPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV1DeliveryRequestsOrderNumberPut200Response**](../Model/ApiV1DeliveryRequestsOrderNumberPut200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1DeliveryRequestsPost()`

```php
apiV1DeliveryRequestsPost($delivery_request): \OpenAPI\Client\Model\ApiV1DeliveryRequestsPost200Response
```

Create a delivery request for your order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_request = new \OpenAPI\Client\Model\DeliveryRequest(); // \OpenAPI\Client\Model\DeliveryRequest

try {
    $result = $apiInstance->apiV1DeliveryRequestsPost($delivery_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_request** | [**\OpenAPI\Client\Model\DeliveryRequest**](../Model/DeliveryRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV1DeliveryRequestsPost200Response**](../Model/ApiV1DeliveryRequestsPost200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1DeliveryRequestscheckAddressDeliveryPost()`

```php
apiV1DeliveryRequestscheckAddressDeliveryPost($api_v1_delivery_requests_check_address_delivery_post_request): \OpenAPI\Client\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response
```

Check delivery for address is available

Expect P402 error in case no location can be found for the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v1_delivery_requests_check_address_delivery_post_request = new \OpenAPI\Client\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest(); // \OpenAPI\Client\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest

try {
    $result = $apiInstance->apiV1DeliveryRequestscheckAddressDeliveryPost($api_v1_delivery_requests_check_address_delivery_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestscheckAddressDeliveryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_delivery_requests_check_address_delivery_post_request** | [**\OpenAPI\Client\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest**](../Model/ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response**](../Model/ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1DeliveryRequestscustomerReturnsPost()`

```php
apiV1DeliveryRequestscustomerReturnsPost($api_v1_delivery_requests_customer_returns_post_request): \OpenAPI\Client\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response
```

Create a request delivery of parcel that customer would like to return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_v1_delivery_requests_customer_returns_post_request = new \OpenAPI\Client\Model\ApiV1DeliveryRequestsCustomerReturnsPostRequest(); // \OpenAPI\Client\Model\ApiV1DeliveryRequestsCustomerReturnsPostRequest

try {
    $result = $apiInstance->apiV1DeliveryRequestscustomerReturnsPost($api_v1_delivery_requests_customer_returns_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestscustomerReturnsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_delivery_requests_customer_returns_post_request** | [**\OpenAPI\Client\Model\ApiV1DeliveryRequestsCustomerReturnsPostRequest**](../Model/ApiV1DeliveryRequestsCustomerReturnsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response**](../Model/ApiV1DeliveryRequestsCustomerReturnsPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1DeliveryRequestsfromCsvPost()`

```php
apiV1DeliveryRequestsfromCsvPost($type, $file): \OpenAPI\Client\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]
```

Create delivery requests

CSV Example for Delivery from a warehouse:  ``` from_location,destination_location,customer_phone_number,customer_email,customer_full_name,number_of_parcels(default 1),payment_mode(cod, prepaid - default),amount_to_be_collected(default 0.00),price_currency(default EUR) 1,2,+30 21 4 655 1234,someone@example.com,Yiannis Papadopoulos,3,cod,24.00,EUR ```  CSV Example for Delivery from AnyAPM:  ``` destination_location,parcel_size,customer_phone_number,customer_email,customer_full_name,number_of_parcels(default 1),payment_mode(cod, prepaid - default),amount_to_be_collected(default 0.00),price_currency(default EUR) 2,1,+30 21 4 655 1234,someone@example.com,Yiannis Papadopoulos,3,cod,24.00,EUR ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->apiV1DeliveryRequestsfromCsvPost($type, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestsfromCsvPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\OpenAPI\Client\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]**](../Model/ApiV1DeliveryRequestsFromCsvPost200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SimpleDeliveryRequestsPost()`

```php
apiV1SimpleDeliveryRequestsPost($api_v1_simple_delivery_requests_post_request): \OpenAPI\Client\Model\ApiV1SimpleDeliveryRequestsPost200Response
```

Create delivery request for order with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_v1_simple_delivery_requests_post_request = new \OpenAPI\Client\Model\ApiV1SimpleDeliveryRequestsPostRequest(); // \OpenAPI\Client\Model\ApiV1SimpleDeliveryRequestsPostRequest

try {
    $result = $apiInstance->apiV1SimpleDeliveryRequestsPost($api_v1_simple_delivery_requests_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1SimpleDeliveryRequestsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_simple_delivery_requests_post_request** | [**\OpenAPI\Client\Model\ApiV1SimpleDeliveryRequestsPostRequest**](../Model/ApiV1SimpleDeliveryRequestsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV1SimpleDeliveryRequestsPost200Response**](../Model/ApiV1SimpleDeliveryRequestsPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)