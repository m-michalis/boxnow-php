# Boxnow\LocationsApi

All URIs are relative to http://TBA, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1DestinationsGet()**](LocationsApi.md#apiV1DestinationsGet) | **GET** /api/v1/destinations | List available destinations to deliver the order to |
| [**apiV1OriginsGet()**](LocationsApi.md#apiV1OriginsGet) | **GET** /api/v1/origins | List available origins to pickup the order from |


## `apiV1DestinationsGet()`

```php
apiV1DestinationsGet($latlng, $radius, $required_size, $location_type, $name, $region_language_tag, $x_partner_id, $limit): \Boxnow\Model\ApiV1DestinationsGet200Response
```

List available destinations to deliver the order to

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$latlng = 48.78081955454138,12.446962472273063; // string | If applied only locations in the specified radius from this gps coord are returned
$radius = 1000; // float | Radius in meters to return only locations within selected radius from given GPS location. Ignored if `latlng` is not present.
$required_size = 1; // float | Return only locations that can accept a package of your `requiredSize`. If defined, the value is used based on your trust factor. Otherwise, `requiredSize` is automatically set based on your usage.
$location_type = array(new \Boxnow\Model\\Boxnow\Model\LocationType()); // \Boxnow\Model\LocationType[] | Return only locations with given types. If not present, filter is not applied.
$name = ΠΑΝΤΕΛΟΓΛΟΥ ΔΗΜΗΤΡΗΣ; // string | Return only locations with matching name
$region_language_tag = 'region_language_tag_example'; // string
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.
$limit = 3.4; // float | Limit the number of returned results. If not defined, all results are returned.

try {
    $result = $apiInstance->apiV1DestinationsGet($latlng, $radius, $required_size, $location_type, $name, $region_language_tag, $x_partner_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->apiV1DestinationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **latlng** | **string**| If applied only locations in the specified radius from this gps coord are returned | [optional] |
| **radius** | **float**| Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. | [optional] [default to 25000] |
| **required_size** | **float**| Return only locations that can accept a package of your &#x60;requiredSize&#x60;. If defined, the value is used based on your trust factor. Otherwise, &#x60;requiredSize&#x60; is automatically set based on your usage. | [optional] |
| **location_type** | [**\Boxnow\Model\LocationType[]**](../Model/\Boxnow\Model\LocationType.md)| Return only locations with given types. If not present, filter is not applied. | [optional] |
| **name** | **string**| Return only locations with matching name | [optional] |
| **region_language_tag** | **string**|  | [optional] |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |
| **limit** | **float**| Limit the number of returned results. If not defined, all results are returned. | [optional] |

### Return type

[**\Boxnow\Model\ApiV1DestinationsGet200Response**](../Model/ApiV1DestinationsGet200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OriginsGet()`

```php
apiV1OriginsGet($latlng, $radius, $required_size, $location_type, $name, $region_language_tag, $x_partner_id): \Boxnow\Model\ApiV1OriginsGet200Response
```

List available origins to pickup the order from

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$latlng = 48.78081955454138,12.446962472273063; // string | If applied only locations in the specified radius from this gps coord are returned
$radius = 1000; // float | Radius in meters to return only locations within selected radius from given GPS location. Ignored if `latlng` is not present.
$required_size = 1; // float | Return only locations that can accept a package of your `requiredSize`. If defined, the value is used based on your trust factor. Otherwise, `requiredSize` is automatically set based on your usage.
$location_type = array(new \Boxnow\Model\\Boxnow\Model\LocationType()); // \Boxnow\Model\LocationType[] | Return only locations with given types. If not present, filter is not applied.
$name = ΠΑΝΤΕΛΟΓΛΟΥ ΔΗΜΗΤΡΗΣ; // string | Return only locations with matching name
$region_language_tag = 'region_language_tag_example'; // string
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.

try {
    $result = $apiInstance->apiV1OriginsGet($latlng, $radius, $required_size, $location_type, $name, $region_language_tag, $x_partner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->apiV1OriginsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **latlng** | **string**| If applied only locations in the specified radius from this gps coord are returned | [optional] |
| **radius** | **float**| Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. | [optional] [default to 25000] |
| **required_size** | **float**| Return only locations that can accept a package of your &#x60;requiredSize&#x60;. If defined, the value is used based on your trust factor. Otherwise, &#x60;requiredSize&#x60; is automatically set based on your usage. | [optional] |
| **location_type** | [**\Boxnow\Model\LocationType[]**](../Model/\Boxnow\Model\LocationType.md)| Return only locations with given types. If not present, filter is not applied. | [optional] |
| **name** | **string**| Return only locations with matching name | [optional] |
| **region_language_tag** | **string**|  | [optional] |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |

### Return type

[**\Boxnow\Model\ApiV1OriginsGet200Response**](../Model/ApiV1OriginsGet200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
