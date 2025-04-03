# Boxnow\ParcelsApi

All URIs are relative to http://TBA, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1ParcelsGet()**](ParcelsApi.md#apiV1ParcelsGet) | **GET** /api/v1/parcels | List parcel info related to your delivery requests |
| [**apiV1ParcelsIdCancelPost()**](ParcelsApi.md#apiV1ParcelsIdCancelPost) | **POST** /api/v1/parcels/{id}:cancel | Cancel parcel delivery |
| [**apiV1ParcelsIdConfirmAnyapmDeliveryPost()**](ParcelsApi.md#apiV1ParcelsIdConfirmAnyapmDeliveryPost) | **POST** /api/v1/parcels/{id}:confirm-anyapm-delivery | Confirm parcel has been delivered to AnyAPM |
| [**apiV1ParcelsIdDeclareDeliveryPartnerReturnPost()**](ParcelsApi.md#apiV1ParcelsIdDeclareDeliveryPartnerReturnPost) | **POST** /api/v1/parcels/{id}:declareDeliveryPartnerReturn | Initiate a parcel return from a delivery partner |
| [**uiV1ParcelsCsvGet()**](ParcelsApi.md#uiV1ParcelsCsvGet) | **GET** /ui/v1/parcels.csv | List parcels to csv file |


## `apiV1ParcelsGet()`

```php
apiV1ParcelsGet($q, $limit, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to, $page_token): \Boxnow\Model\ApiV1ParcelsGet200Response
```

List parcel info related to your delivery requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number. Allowed only for partner portal users.
$limit = 50; // float | Page size
$order_number = 'order_number_example'; // string | Order number in your system. Return only parcels related to this order number.
$parcel_id = 'parcel_id_example'; // string | ID of the parcel in our system. Return only parcel/s with this ID.
$payment_state = new \Boxnow\Model\\Boxnow\Model\PaymentState(); // \Boxnow\Model\PaymentState
$payment_mode = new \Boxnow\Model\\Boxnow\Model\PaymentMode(); // \Boxnow\Model\PaymentMode
$state = array(new \Boxnow\Model\\Boxnow\Model\ParcelState()); // \Boxnow\Model\ParcelState[]
$created_from = 'created_from_example'; // string | UNIX timestamp in milliseconds
$created_to = 'created_to_example'; // string | UNIX timestamp in milliseconds
$page_token = 'page_token_example'; // string | Set this token to return records for given page. You get this for each response.

try {
    $result = $apiInstance->apiV1ParcelsGet($q, $limit, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->apiV1ParcelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number. Allowed only for partner portal users. | [optional] |
| **limit** | **float**| Page size | [optional] [default to 50] |
| **order_number** | **string**| Order number in your system. Return only parcels related to this order number. | [optional] |
| **parcel_id** | **string**| ID of the parcel in our system. Return only parcel/s with this ID. | [optional] |
| **payment_state** | [**\Boxnow\Model\PaymentState**](../Model/.md)|  | [optional] |
| **payment_mode** | [**\Boxnow\Model\PaymentMode**](../Model/.md)|  | [optional] |
| **state** | [**\Boxnow\Model\ParcelState[]**](../Model/\Boxnow\Model\ParcelState.md)|  | [optional] |
| **created_from** | **string**| UNIX timestamp in milliseconds | [optional] |
| **created_to** | **string**| UNIX timestamp in milliseconds | [optional] |
| **page_token** | **string**| Set this token to return records for given page. You get this for each response. | [optional] |

### Return type

[**\Boxnow\Model\ApiV1ParcelsGet200Response**](../Model/ApiV1ParcelsGet200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ParcelsIdCancelPost()`

```php
apiV1ParcelsIdCancelPost($id, $x_partner_id)
```

Cancel parcel delivery

Canceling a canceled parcel has no effect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 123456; // string | Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see `/parcels`
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.

try {
    $apiInstance->apiV1ParcelsIdCancelPost($id, $x_partner_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->apiV1ParcelsIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; | |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ParcelsIdConfirmAnyapmDeliveryPost()`

```php
apiV1ParcelsIdConfirmAnyapmDeliveryPost($id, $x_partner_id)
```

Confirm parcel has been delivered to AnyAPM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 123456; // string | Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see `/parcels`
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.

try {
    $apiInstance->apiV1ParcelsIdConfirmAnyapmDeliveryPost($id, $x_partner_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->apiV1ParcelsIdConfirmAnyapmDeliveryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; | |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ParcelsIdDeclareDeliveryPartnerReturnPost()`

```php
apiV1ParcelsIdDeclareDeliveryPartnerReturnPost($id, $x_partner_id)
```

Initiate a parcel return from a delivery partner

Similar to `parcels/{id}:cancel`, but designed to work for cases when a delivery partner is going to be returning a parcel for any reason, e.g. cancellation, standard return.  When successfully invoked, parcel will travel back to the sender.  Applicable for parcels that use a destination delivery partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Boxnow\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Boxnow\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 123456; // string | Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see `/parcels`
$x_partner_id = 1; // string | Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint.

try {
    $apiInstance->apiV1ParcelsIdDeclareDeliveryPartnerReturnPost($id, $x_partner_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->apiV1ParcelsIdDeclareDeliveryPartnerReturnPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; | |
| **x_partner_id** | **string**| Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. | [optional] |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uiV1ParcelsCsvGet()`

```php
uiV1ParcelsCsvGet($q, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to): string
```

List parcels to csv file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Boxnow\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string | Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number
$order_number = 'order_number_example'; // string | Order number in your system. Return only parcels related to this order number.
$parcel_id = 'parcel_id_example'; // string | ID of the parcel in our system. Return only parcel/s with this ID.
$payment_state = new \Boxnow\Model\\Boxnow\Model\PaymentState(); // \Boxnow\Model\PaymentState
$payment_mode = new \Boxnow\Model\\Boxnow\Model\PaymentMode(); // \Boxnow\Model\PaymentMode
$state = array(new \Boxnow\Model\\Boxnow\Model\ParcelState()); // \Boxnow\Model\ParcelState[]
$created_from = 'created_from_example'; // string | UNIX timestamp in milliseconds
$created_to = 'created_to_example'; // string | UNIX timestamp in milliseconds

try {
    $result = $apiInstance->uiV1ParcelsCsvGet($q, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->uiV1ParcelsCsvGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number | [optional] |
| **order_number** | **string**| Order number in your system. Return only parcels related to this order number. | [optional] |
| **parcel_id** | **string**| ID of the parcel in our system. Return only parcel/s with this ID. | [optional] |
| **payment_state** | [**\Boxnow\Model\PaymentState**](../Model/.md)|  | [optional] |
| **payment_mode** | [**\Boxnow\Model\PaymentMode**](../Model/.md)|  | [optional] |
| **state** | [**\Boxnow\Model\ParcelState[]**](../Model/\Boxnow\Model\ParcelState.md)|  | [optional] |
| **created_from** | **string**| UNIX timestamp in milliseconds | [optional] |
| **created_to** | **string**| UNIX timestamp in milliseconds | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
