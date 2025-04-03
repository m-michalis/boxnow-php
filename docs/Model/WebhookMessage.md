# # WebhookMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**specversion** | **string** |  |
**type** | **string** | Message type |
**source** | **string** | Message source |
**subject** | **string** | Parcel ID |
**id** | **string** | Message ID |
**time** | [**\DateTimeMixed**](\DateTimeMixed.md) |  |
**datacontenttype** | **string** | Message content type |
**datasignature** | **string** | HMAC SHA256 digest of data for receiver to verify integrity of received data |
**data** | [**\Boxnow\Model\WebhookMessageData**](WebhookMessageData.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
