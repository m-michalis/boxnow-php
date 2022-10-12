# Swagger\Client\LocationsApi

All URIs are relative to *https://boxnow.gr/media/yaml/TBA*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1DestinationsGet**](LocationsApi.md#apiv1destinationsget) | **GET** /api/v1/destinations | List available destinations to deliver the order to
[**apiV1OriginsGet**](LocationsApi.md#apiv1originsget) | **GET** /api/v1/origins | List available origins to pickup the order from

# **apiV1DestinationsGet**
> \Swagger\Client\Boxnow\InlineResponse2001 apiV1DestinationsGet($latlng, $radius, $required_size, $location_type, $name)

List available destinations to deliver the order to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\BoxnowAPI\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$latlng = "latlng_example"; // string | If applied only locations in the specified radius from this gps coord are returned
$radius = 25000; // float | Radius in meters to return only locations within selected radius from given GPS location. Ignored if `latlng` is not present.
$required_size = 1.2; // float | Return only locations that can accept a package of your `requiredSize`
$location_type = array(new \Swagger\Client\Boxnow\LocationType()); // \Swagger\Client\Boxnow\LocationType[] | Return only locations with given types. If not present, filter is not applied.
$name = "name_example"; // string | Return only locations with matching name

try {
    $result = $apiInstance->apiV1DestinationsGet($latlng, $radius, $required_size, $location_type, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->apiV1DestinationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latlng** | **string**| If applied only locations in the specified radius from this gps coord are returned | [optional]
 **radius** | **float**| Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. | [optional] [default to 25000]
 **required_size** | **float**| Return only locations that can accept a package of your &#x60;requiredSize&#x60; | [optional]
 **location_type** | [**\Swagger\Client\Boxnow\LocationType[]**](../Model/\Swagger\Client\Boxnow\LocationType.md)| Return only locations with given types. If not present, filter is not applied. | [optional]
 **name** | **string**| Return only locations with matching name | [optional]

### Return type

[**\Swagger\Client\Boxnow\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1OriginsGet**
> \Swagger\Client\Boxnow\InlineResponse2002 apiV1OriginsGet($latlng, $radius, $required_size, $location_type, $name)

List available origins to pickup the order from

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\BoxnowAPI\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$latlng = "latlng_example"; // string | If applied only locations in the specified radius from this gps coord are returned
$radius = 25000; // float | Radius in meters to return only locations within selected radius from given GPS location. Ignored if `latlng` is not present.
$required_size = 1.2; // float | Return only locations that can accept a package of your `requiredSize`
$location_type = array(new \Swagger\Client\Boxnow\LocationType()); // \Swagger\Client\Boxnow\LocationType[] | Return only locations with given types. If not present, filter is not applied.
$name = "name_example"; // string | Return only locations with matching name

try {
    $result = $apiInstance->apiV1OriginsGet($latlng, $radius, $required_size, $location_type, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->apiV1OriginsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latlng** | **string**| If applied only locations in the specified radius from this gps coord are returned | [optional]
 **radius** | **float**| Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. | [optional] [default to 25000]
 **required_size** | **float**| Return only locations that can accept a package of your &#x60;requiredSize&#x60; | [optional]
 **location_type** | [**\Swagger\Client\Boxnow\LocationType[]**](../Model/\Swagger\Client\Boxnow\LocationType.md)| Return only locations with given types. If not present, filter is not applied. | [optional]
 **name** | **string**| Return only locations with matching name | [optional]

### Return type

[**\Swagger\Client\Boxnow\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

