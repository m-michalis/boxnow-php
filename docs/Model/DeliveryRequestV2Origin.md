# # DeliveryRequestV2Origin

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_partner_id** | **int** | Use if want to pickup the parcels via another delivery service. ID of Delivery partner, see &#x60;/delivery-partners&#x60; | [optional]
**contact_number** | **string** | Phone number | [optional]
**contact_email** | **string** | E-mail address | [optional]
**contact_name** | **string** | Name, e.g. person or company name | [optional]
**title** | **string** |  | [optional]
**name** | **string** |  | [optional]
**address_line1** | **string** |  |
**address_line2** | **string** |  | [optional]
**postal_code** | **string** | Postal code of the location. If set, must include only numbers |
**country** | **string** | ISO 3166 Alpha-2 code of the country |
**note** | **string** |  | [optional]
**id** | **string** | Location ID from &#x60;/origins&#x60; endpoint |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
