# Boxnow\DeliveryRequestsApi

All URIs are relative to http://TBA, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1DeliveryRequestsCheckAddressDeliveryPost()**](DeliveryRequestsApi.md#apiV1DeliveryRequestsCheckAddressDeliveryPost) | **POST** /api/v1/delivery-requests:checkAddressDelivery | Check delivery for address is available using Google Maps Geocoding API |
| [**apiV1DeliveryRequestsCustomerReturnsPost()**](DeliveryRequestsApi.md#apiV1DeliveryRequestsCustomerReturnsPost) | **POST** /api/v1/delivery-requests:customerReturns | Create a request delivery of parcel that customer would like to return |
| [**apiV1DeliveryRequestsFromCsvPost()**](DeliveryRequestsApi.md#apiV1DeliveryRequestsFromCsvPost) | **POST** /api/v1/delivery-requests:fromCsv | Create delivery requests |
| [**apiV1DeliveryRequestsOrderNumberPut()**](DeliveryRequestsApi.md#apiV1DeliveryRequestsOrderNumberPut) | **PUT** /api/v1/delivery-requests/{orderNumber} | Update a created delivery request |
| [**apiV1DeliveryRequestsPost()**](DeliveryRequestsApi.md#apiV1DeliveryRequestsPost) | **POST** /api/v1/delivery-requests | Create a delivery request for your order |
| [**apiV1SimpleDeliveryRequestsPost()**](DeliveryRequestsApi.md#apiV1SimpleDeliveryRequestsPost) | **POST** /api/v1/simple-delivery-requests | Create delivery request for order with minimal data |
| [**apiV2DeliveryRequestsCheckAddressDeliveryPost()**](DeliveryRequestsApi.md#apiV2DeliveryRequestsCheckAddressDeliveryPost) | **POST** /api/v2/delivery-requests:checkAddressDelivery | Check delivery for address is available using ArcGIS Geocoding API |


## `apiV1DeliveryRequestsCheckAddressDeliveryPost()`

```php
apiV1DeliveryRequestsCheckAddressDeliveryPost($x_partner_id, $api_v1_delivery_requests_check_address_delivery_post_request): \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response
```

Check delivery for address is available using Google Maps Geocoding API

Expect P402 error in case no location can be found for the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.
$api_v1_delivery_requests_check_address_delivery_post_request = new \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest(); // \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest

try {
    $result = $apiInstance->apiV1DeliveryRequestsCheckAddressDeliveryPost($x_partner_id, $api_v1_delivery_requests_check_address_delivery_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestsCheckAddressDeliveryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |
| **api_v1_delivery_requests_check_address_delivery_post_request** | [**\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest**](../Model/ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest.md)|  | [optional] |

### Return type

[**\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response**](../Model/ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1DeliveryRequestsCustomerReturnsPost()`

```php
apiV1DeliveryRequestsCustomerReturnsPost($x_partner_id, $api_v1_delivery_requests_customer_returns_post_request): \Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response
```

Create a request delivery of parcel that customer would like to return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Boxnow\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.
$api_v1_delivery_requests_customer_returns_post_request = new \Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPostRequest(); // \Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPostRequest

try {
    $result = $apiInstance->apiV1DeliveryRequestsCustomerReturnsPost($x_partner_id, $api_v1_delivery_requests_customer_returns_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestsCustomerReturnsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |
| **api_v1_delivery_requests_customer_returns_post_request** | [**\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPostRequest**](../Model/ApiV1DeliveryRequestsCustomerReturnsPostRequest.md)|  | [optional] |

### Return type

[**\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response**](../Model/ApiV1DeliveryRequestsCustomerReturnsPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1DeliveryRequestsFromCsvPost()`

```php
apiV1DeliveryRequestsFromCsvPost($type, $file, $x_partner_id, $allow_return, $show_recipient_information, $delimiter, $origin_contact_email, $origin_contact_number): \Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]
```

Create delivery requests

CSV Example for Delivery from a warehouse:  ``` from_location,destination_location,customer_phone_number,customer_email,customer_full_name,number_of_parcels(default 1),payment_mode(cod, prepaid - default),amount_to_be_collected(default 0.00),price_currency(default EUR) 1,2,+30 21 4 655 1234,someone@example.com,Yiannis Papadopoulos,3,cod,24.00,EUR ```  CSV Example for Delivery from AnyAPM:  ``` destination_location,parcel_size,customer_phone_number,customer_email,customer_full_name,number_of_parcels(default 1),payment_mode(cod, prepaid - default),amount_to_be_collected(default 0.00),price_currency(default EUR) 2,1,+30 21 4 655 1234,someone@example.com,Yiannis Papadopoulos,3,cod,24.00,EUR ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Boxnow\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.
$allow_return = true; // bool | If true, client will be able to return the goods the same way he received it.
$show_recipient_information = True; // bool | If true, recipient phone number and email will be printed on the label.
$delimiter = ','; // string | The selected delimiter is used for parsing CSV file
$origin_contact_email = 'origin_contact_email_example'; // string | Email address of the sender
$origin_contact_number = 'origin_contact_number_example'; // string | Phone number of the sender

try {
    $result = $apiInstance->apiV1DeliveryRequestsFromCsvPost($type, $file, $x_partner_id, $allow_return, $show_recipient_information, $delimiter, $origin_contact_email, $origin_contact_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestsFromCsvPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |
| **allow_return** | **bool**| If true, client will be able to return the goods the same way he received it. | [optional] [default to true] |
| **show_recipient_information** | **bool**| If true, recipient phone number and email will be printed on the label. | [optional] |
| **delimiter** | **string**| The selected delimiter is used for parsing CSV file | [optional] [default to &#39;,&#39;] |
| **origin_contact_email** | **string**| Email address of the sender | [optional] |
| **origin_contact_number** | **string**| Phone number of the sender | [optional] |

### Return type

[**\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]**](../Model/ApiV1DeliveryRequestsFromCsvPost200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1DeliveryRequestsOrderNumberPut()`

```php
apiV1DeliveryRequestsOrderNumberPut($order_number, $x_partner_id, $api_v1_delivery_requests_order_number_put_request): \Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPut200Response
```

Update a created delivery request

Ignore properties you do not wish to change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = 'order_number_example'; // string | Unique order number in Your system. The same you use to create the delivery request.
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.
$api_v1_delivery_requests_order_number_put_request = new \Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPutRequest(); // \Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPutRequest

try {
    $result = $apiInstance->apiV1DeliveryRequestsOrderNumberPut($order_number, $x_partner_id, $api_v1_delivery_requests_order_number_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestsOrderNumberPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_number** | **string**| Unique order number in Your system. The same you use to create the delivery request. | |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |
| **api_v1_delivery_requests_order_number_put_request** | [**\Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPutRequest**](../Model/ApiV1DeliveryRequestsOrderNumberPutRequest.md)|  | [optional] |

### Return type

[**\Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPut200Response**](../Model/ApiV1DeliveryRequestsOrderNumberPut200Response.md)

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
apiV1DeliveryRequestsPost($x_partner_id, $delivery_request): \Boxnow\Model\ApiV1DeliveryRequestsPost200Response
```

Create a delivery request for your order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.
$delivery_request = new \Boxnow\Model\DeliveryRequest(); // \Boxnow\Model\DeliveryRequest

try {
    $result = $apiInstance->apiV1DeliveryRequestsPost($x_partner_id, $delivery_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1DeliveryRequestsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |
| **delivery_request** | [**\Boxnow\Model\DeliveryRequest**](../Model/DeliveryRequest.md)|  | [optional] |

### Return type

[**\Boxnow\Model\ApiV1DeliveryRequestsPost200Response**](../Model/ApiV1DeliveryRequestsPost200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SimpleDeliveryRequestsPost()`

```php
apiV1SimpleDeliveryRequestsPost($x_partner_id, $api_v1_simple_delivery_requests_post_request): \Boxnow\Model\ApiV1SimpleDeliveryRequestsPost200Response
```

Create delivery request for order with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Boxnow\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.
$api_v1_simple_delivery_requests_post_request = new \Boxnow\Model\ApiV1SimpleDeliveryRequestsPostRequest(); // \Boxnow\Model\ApiV1SimpleDeliveryRequestsPostRequest

try {
    $result = $apiInstance->apiV1SimpleDeliveryRequestsPost($x_partner_id, $api_v1_simple_delivery_requests_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV1SimpleDeliveryRequestsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |
| **api_v1_simple_delivery_requests_post_request** | [**\Boxnow\Model\ApiV1SimpleDeliveryRequestsPostRequest**](../Model/ApiV1SimpleDeliveryRequestsPostRequest.md)|  | [optional] |

### Return type

[**\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost200Response**](../Model/ApiV1SimpleDeliveryRequestsPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DeliveryRequestsCheckAddressDeliveryPost()`

```php
apiV2DeliveryRequestsCheckAddressDeliveryPost($x_partner_id, $api_v2_delivery_requests_check_address_delivery_post_request): \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response
```

Check delivery for address is available using ArcGIS Geocoding API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\DeliveryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.
$api_v2_delivery_requests_check_address_delivery_post_request = new \Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest(); // \Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest

try {
    $result = $apiInstance->apiV2DeliveryRequestsCheckAddressDeliveryPost($x_partner_id, $api_v2_delivery_requests_check_address_delivery_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryRequestsApi->apiV2DeliveryRequestsCheckAddressDeliveryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |
| **api_v2_delivery_requests_check_address_delivery_post_request** | [**\Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest**](../Model/ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest.md)|  | [optional] |

### Return type

[**\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response**](../Model/ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
