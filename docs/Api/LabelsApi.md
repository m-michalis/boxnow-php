# Boxnow\LabelsApi

All URIs are relative to https://boxnow.gr/media/yaml/TBA, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1DeliveryRequestsOrderNumberLabelGet()**](LabelsApi.md#apiV1DeliveryRequestsOrderNumberLabelGet) | **GET** /api/v1/delivery-requests/{orderNumber}/label | Get shipping label data of parcels order |
| [**apiV1DeliveryRequestsOrderNumberLabelTypeGet()**](LabelsApi.md#apiV1DeliveryRequestsOrderNumberLabelTypeGet) | **GET** /api/v1/delivery-requests/{orderNumber}/label.{type} | Get printable labels for all parcels in a delivery request. |
| [**apiV1LabelssearchPost()**](LabelsApi.md#apiV1LabelssearchPost) | **POST** /api/v1/labels:search | Find labels as PDF |
| [**apiV1ParcelsIdLabelGet()**](LabelsApi.md#apiV1ParcelsIdLabelGet) | **GET** /api/v1/parcels/{id}/label | Get shipping label data of parcel |
| [**apiV1ParcelsIdLabelTypeGet()**](LabelsApi.md#apiV1ParcelsIdLabelTypeGet) | **GET** /api/v1/parcels/{id}/label.{type} | Get printable label for parcel. |
| [**uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet()**](LabelsApi.md#uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet) | **GET** /ui/v1/delivery-requests/{orderImportsNumber}/label.pdf | Get printable labels for all parcels in a delivery request. |


## `apiV1DeliveryRequestsOrderNumberLabelGet()`

```php
apiV1DeliveryRequestsOrderNumberLabelGet($order_number): \Boxnow\API\ApiV1DeliveryRequestsOrderNumberLabelGet200Response
```

Get shipping label data of parcels order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = 'order_number_example'; // string | Unique order number in Your system. The same you use to create the delivery request.

try {
    $result = $apiInstance->apiV1DeliveryRequestsOrderNumberLabelGet($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->apiV1DeliveryRequestsOrderNumberLabelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_number** | **string**| Unique order number in Your system. The same you use to create the delivery request. | |

### Return type

[**\Boxnow\API\ApiV1DeliveryRequestsOrderNumberLabelGet200Response**](../Model/ApiV1DeliveryRequestsOrderNumberLabelGet200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1DeliveryRequestsOrderNumberLabelTypeGet()`

```php
apiV1DeliveryRequestsOrderNumberLabelTypeGet($order_number, $type, $dpi, $width, $printer_model): \SplFileObject
```

Get printable labels for all parcels in a delivery request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = 'order_number_example'; // string | Unique order number in Your system. The same you use to create the delivery request.
$type = 'type_example'; // string
$dpi = 200; // float | Only applies to ZPL. 200 or 300 supported.
$width = 100; // float | Label width in mm. Only applies to ZPL.
$printer_model = ZQ310; // string

try {
    $result = $apiInstance->apiV1DeliveryRequestsOrderNumberLabelTypeGet($order_number, $type, $dpi, $width, $printer_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->apiV1DeliveryRequestsOrderNumberLabelTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_number** | **string**| Unique order number in Your system. The same you use to create the delivery request. | |
| **type** | **string**|  | |
| **dpi** | **float**| Only applies to ZPL. 200 or 300 supported. | [optional] [default to 200] |
| **width** | **float**| Label width in mm. Only applies to ZPL. | [optional] |
| **printer_model** | **string**|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1LabelssearchPost()`

```php
apiV1LabelssearchPost($api_v1_labels_search_post_request): mixed
```

Find labels as PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Boxnow\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_v1_labels_search_post_request = new \Boxnow\API\ApiV1LabelsSearchPostRequest(); // \Boxnow\API\ApiV1LabelsSearchPostRequest

try {
    $result = $apiInstance->apiV1LabelssearchPost($api_v1_labels_search_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->apiV1LabelssearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_labels_search_post_request** | [**\Boxnow\API\ApiV1LabelsSearchPostRequest**](../Model/ApiV1LabelsSearchPostRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ParcelsIdLabelGet()`

```php
apiV1ParcelsIdLabelGet($id): \Boxnow\API\ApiV1ParcelsIdLabelGet200Response
```

Get shipping label data of parcel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 123456; // string | Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see `/parcels`

try {
    $result = $apiInstance->apiV1ParcelsIdLabelGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->apiV1ParcelsIdLabelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; | |

### Return type

[**\Boxnow\API\ApiV1ParcelsIdLabelGet200Response**](../Model/ApiV1ParcelsIdLabelGet200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ParcelsIdLabelTypeGet()`

```php
apiV1ParcelsIdLabelTypeGet($id, $type, $dpi, $width, $printer_model): \SplFileObject
```

Get printable label for parcel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 123456; // string | Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see `/parcels`
$type = 'type_example'; // string
$dpi = 200; // float | Only applies to ZPL. 200 or 300 supported.
$width = 100; // float | Label width in mm. Only applies to ZPL.
$printer_model = ZQ310; // string

try {
    $result = $apiInstance->apiV1ParcelsIdLabelTypeGet($id, $type, $dpi, $width, $printer_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->apiV1ParcelsIdLabelTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; | |
| **type** | **string**|  | |
| **dpi** | **float**| Only applies to ZPL. 200 or 300 supported. | [optional] [default to 200] |
| **width** | **float**| Label width in mm. Only applies to ZPL. | [optional] |
| **printer_model** | **string**|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `x-application/zpl`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet()`

```php
uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet($order_imports_number, $content_disposition): \SplFileObject
```

Get printable labels for all parcels in a delivery request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Boxnow\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_imports_number = 'order_imports_number_example'; // string | Unique order number in Your system. The same you use to create the delivery request.
$content_disposition = 'content_disposition_example'; // string | Specify if the downloaded label will be opened or be downloaded.

try {
    $result = $apiInstance->uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet($order_imports_number, $content_disposition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_imports_number** | **string**| Unique order number in Your system. The same you use to create the delivery request. | |
| **content_disposition** | **string**| Specify if the downloaded label will be opened or be downloaded. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
