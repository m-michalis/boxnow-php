# # ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique location ID |
**type** | [**\Boxnow\Model\LocationType**](LocationType.md) |  |
**image** | **string** | Location image | [optional]
**lat** | **string** |  | [optional]
**lng** | **string** |  | [optional]
**region** | **string** | BCP 47 language tag format | [optional]
**title** | **string** |  | [optional]
**name** | **string** |  | [optional]
**address_line1** | **string** |  | [optional]
**address_line2** | **string** |  | [optional]
**postal_code** | **string** | Postal code of the location. If set, must include only numbers | [optional]
**country** | **string** | ISO 3166 Alpha-2 code of the country | [optional]
**note** | **string** |  | [optional]
**expected_delivery_time** | **\DateTime** | ISO8601 Date time format | [optional]
**distance** | **float** | Distance from the input address in meters. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
