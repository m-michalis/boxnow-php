# Boxnow\WebhooksApi

All URIs are relative to http://TBA, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**yourWebhookEndpointPost()**](WebhooksApi.md#yourWebhookEndpointPost) | **POST** /{your-webhook-endpoint} | Your webhook endpoint. Used to send You parcel events messages. You should set this endpoint in your BoxNow account. |


## `yourWebhookEndpointPost()`

```php
yourWebhookEndpointPost($your_webhook_endpoint, $your_optional_header, $webhook_message)
```

Your webhook endpoint. Used to send You parcel events messages. You should set this endpoint in your BoxNow account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Boxnow\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$your_webhook_endpoint = 'your_webhook_endpoint_example'; // string
$your_optional_header = 'your_optional_header_example'; // string
$webhook_message = new \Boxnow\Model\WebhookMessage(); // \Boxnow\Model\WebhookMessage

try {
    $apiInstance->yourWebhookEndpointPost($your_webhook_endpoint, $your_optional_header, $webhook_message);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->yourWebhookEndpointPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **your_webhook_endpoint** | **string**|  | |
| **your_optional_header** | **string**|  | [optional] |
| **webhook_message** | [**\Boxnow\Model\WebhookMessage**](../Model/WebhookMessage.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
