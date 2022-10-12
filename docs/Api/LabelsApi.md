# Swagger\Client\LabelsApi

All URIs are relative to *https://boxnow.gr/media/yaml/TBA*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1DeliveryRequestsOrderNumberLabelGet**](LabelsApi.md#apiv1deliveryrequestsordernumberlabelget) | **GET** /api/v1/delivery-requests/{orderNumber}/label | Get shipping label data of parcels order
[**apiV1DeliveryRequestsOrderNumberLabelTypeGet**](LabelsApi.md#apiv1deliveryrequestsordernumberlabeltypeget) | **GET** /api/v1/delivery-requests/{orderNumber}/label.{type} | Get printable labels for all parcels in a delivery request.
[**apiV1ParcelsIdLabelGet**](LabelsApi.md#apiv1parcelsidlabelget) | **GET** /api/v1/parcels/{id}/label | Get shipping label data of parcel
[**apiV1ParcelsIdLabelTypeGet**](LabelsApi.md#apiv1parcelsidlabeltypeget) | **GET** /api/v1/parcels/{id}/label.{type} | Get printable label for parcel.
[**uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet**](LabelsApi.md#uiv1deliveryrequestsorderimportsnumberlabelpdfget) | **GET** /ui/v1/delivery-requests/{orderImportsNumber}/label.pdf | Get printable labels for all parcels in a delivery request.

# **apiV1DeliveryRequestsOrderNumberLabelGet**
> \Swagger\Client\Boxnow\InlineResponse20011 apiV1DeliveryRequestsOrderNumberLabelGet($order_number)

Get shipping label data of parcels order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\BoxnowAPI\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Unique order number in Your system. The same you use to create the delivery request.

try {
    $result = $apiInstance->apiV1DeliveryRequestsOrderNumberLabelGet($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->apiV1DeliveryRequestsOrderNumberLabelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Unique order number in Your system. The same you use to create the delivery request. |

### Return type

[**\Swagger\Client\Boxnow\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1DeliveryRequestsOrderNumberLabelTypeGet**
> string apiV1DeliveryRequestsOrderNumberLabelTypeGet($order_number, $type, $dpi, $width, $printer_model)

Get printable labels for all parcels in a delivery request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\BoxnowAPI\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | Unique order number in Your system. The same you use to create the delivery request.
$type = "type_example"; // string | 
$dpi = 200; // float | Only applies to ZPL. 200 or 300 supported.
$width = 1.2; // float | Label width in mm. Only applies to ZPL.
$printer_model = "printer_model_example"; // string | 

try {
    $result = $apiInstance->apiV1DeliveryRequestsOrderNumberLabelTypeGet($order_number, $type, $dpi, $width, $printer_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->apiV1DeliveryRequestsOrderNumberLabelTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Unique order number in Your system. The same you use to create the delivery request. |
 **type** | **string**|  |
 **dpi** | **float**| Only applies to ZPL. 200 or 300 supported. | [optional] [default to 200]
 **width** | **float**| Label width in mm. Only applies to ZPL. | [optional]
 **printer_model** | **string**|  | [optional]

### Return type

**string**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ParcelsIdLabelGet**
> \Swagger\Client\Boxnow\InlineResponse20010 apiV1ParcelsIdLabelGet($id)

Get shipping label data of parcel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\BoxnowAPI\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see `/parcels`

try {
    $result = $apiInstance->apiV1ParcelsIdLabelGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->apiV1ParcelsIdLabelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; |

### Return type

[**\Swagger\Client\Boxnow\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ParcelsIdLabelTypeGet**
> string apiV1ParcelsIdLabelTypeGet($id, $type, $dpi, $width, $printer_model)

Get printable label for parcel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\BoxnowAPI\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see `/parcels`
$type = "type_example"; // string | 
$dpi = 200; // float | Only applies to ZPL. 200 or 300 supported.
$width = 1.2; // float | Label width in mm. Only applies to ZPL.
$printer_model = "printer_model_example"; // string | 

try {
    $result = $apiInstance->apiV1ParcelsIdLabelTypeGet($id, $type, $dpi, $width, $printer_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->apiV1ParcelsIdLabelTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; |
 **type** | **string**|  |
 **dpi** | **float**| Only applies to ZPL. 200 or 300 supported. | [optional] [default to 200]
 **width** | **float**| Label width in mm. Only applies to ZPL. | [optional]
 **printer_model** | **string**|  | [optional]

### Return type

**string**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, x-application/zpl, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet**
> string uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet($order_imports_number, $content_disposition)

Get printable labels for all parcels in a delivery request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\BoxnowAPI\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_imports_number = "order_imports_number_example"; // string | Unique order number in Your system. The same you use to create the delivery request.
$content_disposition = "content_disposition_example"; // string | Specify if the downloaded label will be opened or be downloaded.

try {
    $result = $apiInstance->uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet($order_imports_number, $content_disposition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_imports_number** | **string**| Unique order number in Your system. The same you use to create the delivery request. |
 **content_disposition** | **string**| Specify if the downloaded label will be opened or be downloaded. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

