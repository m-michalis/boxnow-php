# SwaggerClient-php
Document describes the API description for partners in order to create and track delivery requests.  ## Revision history  |Date|Author|Description|Version| |-|-|-|-| |2022-09-22|Šmolík, J.|Add accepted-to-locker parcel event |1.40| |2022-09-08|Šmolík J.| Add support for user to choose partner they want to work with |1.39| |2022-08-10|Šmolík J.| Add /labels:search to download PDF labels for defined criteria |1.38| |2022-08-08|Azizov. J.| Add `region` field to /destinations and /origins endpoints |1.37| |2022-07-27|Vala J.| Add EP for listing shipping label data of parcels order /api/v1/delivery-requests/{orderNumber}/label |1.36| |2022-07-27|Vala J.| Add EP for listing shipping label data of parcel /api/v1/parcels/{id}/label |1.35| |2022-07-22|Vala J.| Add destination_public_id column to csv export of parcels |1.34| |2022-07-08|Vala J.| <ul><li>Add exportCsvUrl to headers ['X-export-url-csv'] to response from /api/v1/parcels</li><li>Add endpoint to export parcels to csv file /ui/v1/parcels.csv</li></ul> |1.33| |2022-06-27|Vala J.| Add width and printerModel query parameters for zpl shipping labels for /api/v1/delivery-requests/{orderNumber}/label.{type} and /api/v1/parcels/{id}/label.{type} |1.32| |2022-06-17|Šmolík, J.| Allow to select return location for delivery request |1.31| |2022-05-25|Vala, J.| Add single labelUrlPdf to headers ['X-labels-url-pdf'] in response from /api/v1/delivery-requests:fromCsv |1.30| |2022-05-25|Vala, J.| Add EP to handle csv import orders printing of shipping label /ui/v1/delivery-requests/{orderImportsNumber}/label.pdf |1.29| |2022-05-20|Vala, J.| Add possibility to overwrite 4 rows in shipping label sender info to /api/v1/delivery-requests endpoint |1.28| |2022-05-04|Azizov, J.| Add state and created filters to to /api/v1/parcels endpoint |1.27| |2022-05-03|Azizov, J.| Add possibility to search parcels to /api/v1/parcels endpoint |1.26| |2022-04-27|Azizov, J.| Add /api/v1/delivery-requests:customerReturns for customer returns delivery requests |1.25| |2022-04-26|Vala, J.| Add createTime, updateTime to parcel list response |1.24| |2022-04-21|Šmolík, J.| Add payment info to parcels |1.23| |2022-02-22|Azizov, J.| Add P408 and P409 error codes |1.22| |2022-02-22|Azizov, J.| Add notifySMSOnAccepted to DeliveryRequest |1.21| |2022-02-01|Šmolík, J.| <ul><li>Add check address delivery endpoint</li><li>Add /api/v1/simple-delivery-requests for simpler delivery creation</li></ul> |1.20| |2022-01-20|Šmolík, J.| Add P405, P406 and P407 error codes |1.19| |2022-01-10|Šmolík, J.| <ul><li>Add CSV import endpoint</li><li>Add JWT custom claims description</li><li>Move 403 error codes to own section</li></ul> |1.18| |2021-12-23|Šmolík, J.| <ul><li>Add new endpoint to confirm AnyAPM delivery of a parcel</li><li>Partition error codes by HTTP status response</li></ul> |1.17| |2021-12-16|Šmolík, J.| Add new error code P403 |1.16| |2021-12-09|Šmolík, J.| Add new error codes P401, P402 |1.15| |2021-11-30|Šmolík, J.| Add delivery request origin, destination and items fields description |1.14| |2021-11-11|Šmolík, J.| Add endpoint for parcel delivery cancellation |1.13| |2021-11-09|Šmolík, J.| Add X403 error code spec |1.12| |2021-10-14|Šmolík, J.| Add Accepted for return event |1.11| |2021-10-05|Šmolík, J.| Make DeliveryRequest.items required |1.10| |2021-09-22|Šmolík, J.| Add canceled event state and event|1.9| |2021-09-17|Šmolík, J.| Add PDF label URLs to parcels response |1.8 |2021-09-13|Šmolík, J.| <ul><li>Update parcel state enum values</li><li>Remove history event displayName, add type</li></ul>|1.7 |2021-08-25|Azizov, J.| <ul><li>Add possibility to print labels for all parcels in order</li><li>Make contact information of origin optional in delivery request</li></ul>|1.6 |2021-08-02|Azizov, J.| Add items metadata to parcel |1.5| |2021-07-15|Šmolík, J.| Add destination expected delivery time |1.4| |2021-06-23|Šmolík, J.| Update money value fields description |1.3| |2021-06-21|Šmolík, J.| <ul><li>Update Requesting a delivery text</li><li>Add `name` filter to origins and destinations </li><li>Rename delivery request code of description to plain description</li><li>Add more specific info to value amount fields</li><li>Update address country to match ISO Code</li><li>Update address postal code formatting</li><li>Update origin/destination for delivery request</li><li>Remove height, length, width from order item</li><li>Add events to parcel info</li><li>Update delivery request response</li><li>Update order number description</li><li>Add parcel id filter to /parcels</li><li>Add message to error</li><li>Make contact name required</li><li>Add delivery partner parcel ids</li><li>Remove order items' code and status</li></ul> |1.2| |2021-06-14|Šmolík, J.| <ul><li>Add a todo to specify client notification type after accepting the order.</li><li> Let the partner choose to receive an email when successful delivery request is made.</li><li> Remove `typeOfOrder` from delivery request.</li><li>Add option to select delivery partner for pickup</li><li>Make item weight in the order optional</li><li>Make origin contact email required</li><li>Add support to add sender's name when making delivery request</li><li>Remove landmark and code from address</li><li>Add new error code or partners not eligible to create COD delivery requests</li><li>Add support to filter destinations/origins by type</li><li>Add support to send compartment size for order item, required for APM origin</li><li>Make `typeOfService` optional</li></ul> |1.1| |2021-06-09|Šmolík, J.|Initial version|1.0|  # Setup  Register your company through our support.  We are going to need   - Company name   - List of Phone numbers for SMS OTP authentication of people who'll you want to have access to the Partner CMS   - List of addresses for pickup points - where do we pickup your order for delivery  You will get in return - `OAUTH_CLIENT_ID` - OAuth2 Client ID for authenticating with the Partner API. Keep it safe. Value may vary for each environment. - `OAUTH_CLIENT_SECRET` - OAuth2 Client Secret for authenticating with the Partner API. Keep it safe. Value may vary for each environment. - `API_URL` - Base URL for Partner API  ## Environments  Product offers multiple environments   - Sandbox - For you to test the integration. Limited functionality.   - Production - Connected to real end-users. Use with care.  Environment setting summary: | Value \\ Env | Sandbox |  Production | |---|---|---| | `API_URL`  | N/A  | N/A | | `OAUTH_CLIENT_SECRET`  | Contact Support | Contact Support | | `OAUTH_CLIENT_ID`  | Contact Support  | Contact Support |   # API  ## Authentication  Authentication is based on OAuth2 standard, Client Credentials grant. Token endpoint `/auth-sessions`, see examples below.  Client ID and Secret MUST be passed to you from BoxNow support in advance.  In order to use the API, you MUST attach the access token to Authorization header as a Bearer token.  ### Custom JWT claims  You can find additional user information in custom claims under namespace key `https://boxnow.gr`. For example  ```json {   \"iat\": 1641980553,   \"exp\": 1641984153,   \"https://boxnow.gr\": {     \"permission\": {       \"warehouseAsOrigin\": true,       \"anyApmAsOrigin\": true,       \"anyApmToSameApmDelivery\": true,       \"anyApmToSameApmDeliveryWithoutConfirmation\": true,       \"depotAsOrigin\": true     }   } } ```  ## Listing available destinations  You can skip this if you don't want to deliver your order to one of our APMs.  Use `/destinations` to list available APM locations we can deliver the goods to. You will refer to these records by `id` when requesting delivery later on.  ## Requesting a delivery  Create a delivery request to delivery your order to the client. Use `/delivery-requests` endpoint for this operation.  Once a successful request delivery is made   - (optional) we send you an email notifying about successful delivery request creation, if you choose to receive this email   - you should fetch the PDF label for each of the parcel from `/parcels/{id}/label.pdf`, print it and stick it to the parcel/s   - we send a courier to pick up the labeled parcel/s   - we notify the client via email that we have accepted the order from you and its being delivered by us  ## Modifying a delivery request  After a delivery request is successfully made, you can alter some parts of it later on. Use `/delivery-requests/{id}` endpoint for these modifications.  ## Checking on the deliveries  You can list parcel related to your delivery requests via `/parcels` endpoint.   ## Error codes  ### Description of codes for `400 Unprocessable entity` responses  - `P400` - Invalid request data. Make sure are sending the request according to this documentation. - `P401` - Invalid request origin location reference. Make sure you are referencing a valid location ID from Origins endpoint or valid address. - `P402` - Invalid request destination location reference. Make sure you are referencing a valid location ID from Destinations endpoint or valid address. - `P403` - You are not allowed to use AnyAPM-SameAPM delivery. Contact support if you believe this is a mistake. - `P404` - Invalid import CSV. See error contents for additional info. - `P405` - Invalid phone number. Make sure you are sending the phone number in full international format, e.g. +30 xx x xxx xxxx. - `P406` - Invalid compartment/parcel size. Make sure you are sending one of required sizes 1, 2 or 3. Size is required when sending from AnyAPM directly. - `P407` - Invalid country code. Make sure you are sending country code in ISO 3166-1 alpha-2 format, e.g. GR. - `P408` - Invalid amountToBeCollected amount. Make sure you are sending amount in the valid range of (0, 5000> - `P409` - Invalid delivery partner reference. Make sure you are referencing a valid delivery partner ID from Delivery partners endpoint. - `P410` - Order number conflict. You are trying to create a delivery request for order ID that has already been created. Choose another order id. - `P411` - You are not eligible to use Cash-on-delivery payment type. Use another payment type or contact our support. - `P412` - You are not allowed to create customer returns deliveries. Contact support if you believe this is a mistake. - `P413` - Invalid return location reference. Make sure you are referencing a valid location warehouse ID from Origins  endpoint or valid address. - `P420` - Parcel not ready for cancel. You can cancel only new, undelivered, or parcels that are not returned or lost. Make sure parcel is in transit and try again. - `P430` - Parcel not ready for AnyAPM confirmation. Parcel is probably already confirmed or being delivered. Contact support if you believe this is a mistake.  ### Description of codes for `403 Forbidden` responses  - `X403` - Account disabled. Your account had been disabled, contact support. - `P414` - Unauthorized parcel access. You are trying to access information to parcel/s that don't belong to you. Make sure you are requesting information for parcels you have access to.  ### Description of codes for `503 Service Unavailable` responses  | Code | Description | |---|---| | `P600` | Locker bridge communication failed. There has been some error when communicating with the locker bridge. Try again later or contact support. | | `P610` | Geolocation API failed. There has been some error when translating address to gps coordinates. Try again later or contact support. |

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.40
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/m-michalis/boxnow-api.git"
    }
  ],
  "require": {
    "m-michalis/boxnow-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\BoxnowAPI\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Boxnow\V1AuthsessionsBody(); // \Swagger\Client\Boxnow\V1AuthsessionsBody | 

try {
    $result = $apiInstance->apiV1AuthSessionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->apiV1AuthSessionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://boxnow.gr/media/yaml/TBA*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**apiV1AuthSessionsPost**](docs/Api/AuthenticationApi.md#apiv1authsessionspost) | **POST** /api/v1/auth-sessions | Obtain authentication tokens
*DeliveryPartnersApi* | [**apiV1DeliveryPartnersGet**](docs/Api/DeliveryPartnersApi.md#apiv1deliverypartnersget) | **GET** /api/v1/delivery-partners | List of available delivery partners
*DeliveryRequestsApi* | [**apiV1DeliveryRequestsOrderNumberPut**](docs/Api/DeliveryRequestsApi.md#apiv1deliveryrequestsordernumberput) | **PUT** /api/v1/delivery-requests/{orderNumber} | Update a created delivery request
*DeliveryRequestsApi* | [**apiV1DeliveryRequestsPost**](docs/Api/DeliveryRequestsApi.md#apiv1deliveryrequestspost) | **POST** /api/v1/delivery-requests | Create a delivery request for your order
*DeliveryRequestsApi* | [**apiV1DeliveryRequestscheckAddressDeliveryPost**](docs/Api/DeliveryRequestsApi.md#apiv1deliveryrequestscheckaddressdeliverypost) | **POST** /api/v1/delivery-requests:checkAddressDelivery | Check delivery for address is available
*DeliveryRequestsApi* | [**apiV1DeliveryRequestscustomerReturnsPost**](docs/Api/DeliveryRequestsApi.md#apiv1deliveryrequestscustomerreturnspost) | **POST** /api/v1/delivery-requests:customerReturns | Create a request delivery of parcel that customer would like to return
*DeliveryRequestsApi* | [**apiV1DeliveryRequestsfromCsvPost**](docs/Api/DeliveryRequestsApi.md#apiv1deliveryrequestsfromcsvpost) | **POST** /api/v1/delivery-requests:fromCsv | Create delivery requests
*DeliveryRequestsApi* | [**apiV1SimpleDeliveryRequestsPost**](docs/Api/DeliveryRequestsApi.md#apiv1simpledeliveryrequestspost) | **POST** /api/v1/simple-delivery-requests | Create delivery request for order with minimal data
*LabelsApi* | [**apiV1DeliveryRequestsOrderNumberLabelGet**](docs/Api/LabelsApi.md#apiv1deliveryrequestsordernumberlabelget) | **GET** /api/v1/delivery-requests/{orderNumber}/label | Get shipping label data of parcels order
*LabelsApi* | [**apiV1DeliveryRequestsOrderNumberLabelTypeGet**](docs/Api/LabelsApi.md#apiv1deliveryrequestsordernumberlabeltypeget) | **GET** /api/v1/delivery-requests/{orderNumber}/label.{type} | Get printable labels for all parcels in a delivery request.
*LabelsApi* | [**apiV1LabelssearchPost**](docs/Api/LabelsApi.md#apiv1labelssearchpost) | **POST** /api/v1/labels:search | Find labels as PDF
*LabelsApi* | [**apiV1ParcelsIdLabelGet**](docs/Api/LabelsApi.md#apiv1parcelsidlabelget) | **GET** /api/v1/parcels/{id}/label | Get shipping label data of parcel
*LabelsApi* | [**apiV1ParcelsIdLabelTypeGet**](docs/Api/LabelsApi.md#apiv1parcelsidlabeltypeget) | **GET** /api/v1/parcels/{id}/label.{type} | Get printable label for parcel.
*LabelsApi* | [**uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet**](docs/Api/LabelsApi.md#uiv1deliveryrequestsorderimportsnumberlabelpdfget) | **GET** /ui/v1/delivery-requests/{orderImportsNumber}/label.pdf | Get printable labels for all parcels in a delivery request.
*LocationsApi* | [**apiV1DestinationsGet**](docs/Api/LocationsApi.md#apiv1destinationsget) | **GET** /api/v1/destinations | List available destinations to deliver the order to
*LocationsApi* | [**apiV1OriginsGet**](docs/Api/LocationsApi.md#apiv1originsget) | **GET** /api/v1/origins | List available origins to pickup the order from
*ParcelsApi* | [**apiV1ParcelsGet**](docs/Api/ParcelsApi.md#apiv1parcelsget) | **GET** /api/v1/parcels | List parcel info related to your delivery requests
*ParcelsApi* | [**apiV1ParcelsIdcancelPost**](docs/Api/ParcelsApi.md#apiv1parcelsidcancelpost) | **POST** /api/v1/parcels/{id}:cancel | Cancel parcel delivery
*ParcelsApi* | [**apiV1ParcelsIdconfirmAnyapmDeliveryPost**](docs/Api/ParcelsApi.md#apiv1parcelsidconfirmanyapmdeliverypost) | **POST** /api/v1/parcels/{id}:confirm-anyapm-delivery | Confirm parcel has been delivered to AnyAPM
*ParcelsApi* | [**uiV1ParcelsCsvGet**](docs/Api/ParcelsApi.md#uiv1parcelscsvget) | **GET** /ui/v1/parcels.csv | List parcels to csv file

## Documentation For Models

 - [AllOfDeliveryRequestDestination](docs/Model/AllOfDeliveryRequestDestination.md)
 - [AllOfDeliveryRequestOrigin](docs/Model/AllOfDeliveryRequestOrigin.md)
 - [AllOfDeliveryRequestV2Destination](docs/Model/AllOfDeliveryRequestV2Destination.md)
 - [AllOfDeliveryRequestV2Origin](docs/Model/AllOfDeliveryRequestV2Origin.md)
 - [AllOfEventsInnerCreateTime](docs/Model/AllOfEventsInnerCreateTime.md)
 - [AllOfv1SimpledeliveryrequestsBodyDestination](docs/Model/AllOfv1SimpledeliveryrequestsBodyDestination.md)
 - [AllowReturn](docs/Model/AllowReturn.md)
 - [AmountToBeCollected](docs/Model/AmountToBeCollected.md)
 - [AnyOfDeliveryRequestReturnLocation](docs/Model/AnyOfDeliveryRequestReturnLocation.md)
 - [Apiv1deliveryrequestscustomerReturnsDestination](docs/Model/Apiv1deliveryrequestscustomerReturnsDestination.md)
 - [Apiv1deliveryrequestscustomerReturnsParcels](docs/Model/Apiv1deliveryrequestscustomerReturnsParcels.md)
 - [Apiv1deliveryrequestscustomerReturnsSender](docs/Model/Apiv1deliveryrequestscustomerReturnsSender.md)
 - [Apiv1deliveryrequestsfromCsvDestination](docs/Model/Apiv1deliveryrequestsfromCsvDestination.md)
 - [Apiv1deliveryrequestsfromCsvParcels](docs/Model/Apiv1deliveryrequestsfromCsvParcels.md)
 - [Apiv1simpledeliveryrequestsOrigin](docs/Model/Apiv1simpledeliveryrequestsOrigin.md)
 - [Apiv1simpledeliveryrequestsParcels](docs/Model/Apiv1simpledeliveryrequestsParcels.md)
 - [ApmDelivery](docs/Model/ApmDelivery.md)
 - [DateTime](docs/Model/DateTime.md)
 - [DeliveryDeliveryPartnerInformation](docs/Model/DeliveryDeliveryPartnerInformation.md)
 - [DeliveryLocationAddress](docs/Model/DeliveryLocationAddress.md)
 - [DeliveryPartner](docs/Model/DeliveryPartner.md)
 - [DeliveryPartnerDelivery](docs/Model/DeliveryPartnerDelivery.md)
 - [DeliveryPayment](docs/Model/DeliveryPayment.md)
 - [DeliveryRequest](docs/Model/DeliveryRequest.md)
 - [DeliveryRequestItems](docs/Model/DeliveryRequestItems.md)
 - [DeliveryRequestOverwriteSenderShippingLabelInfo](docs/Model/DeliveryRequestOverwriteSenderShippingLabelInfo.md)
 - [DeliveryRequestV2](docs/Model/DeliveryRequestV2.md)
 - [DeliveryRequestV2Parcels](docs/Model/DeliveryRequestV2Parcels.md)
 - [DeliveryrequestsOrderNumberBody](docs/Model/DeliveryrequestsOrderNumberBody.md)
 - [Destination](docs/Model/Destination.md)
 - [EP400](docs/Model/EP400.md)
 - [EP401](docs/Model/EP401.md)
 - [EP402](docs/Model/EP402.md)
 - [EP403](docs/Model/EP403.md)
 - [EP404](docs/Model/EP404.md)
 - [EP405](docs/Model/EP405.md)
 - [EP406](docs/Model/EP406.md)
 - [EP407](docs/Model/EP407.md)
 - [EP408](docs/Model/EP408.md)
 - [EP409](docs/Model/EP409.md)
 - [EP410](docs/Model/EP410.md)
 - [EP411](docs/Model/EP411.md)
 - [EP412](docs/Model/EP412.md)
 - [EP413](docs/Model/EP413.md)
 - [EP414](docs/Model/EP414.md)
 - [EP420](docs/Model/EP420.md)
 - [EP430](docs/Model/EP430.md)
 - [EP600](docs/Model/EP600.md)
 - [EP610](docs/Model/EP610.md)
 - [EX403](docs/Model/EX403.md)
 - [Events](docs/Model/Events.md)
 - [EventsInner](docs/Model/EventsInner.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20012Data](docs/Model/InlineResponse20012Data.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2003Parcels](docs/Model/InlineResponse2003Parcels.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2004Parcels](docs/Model/InlineResponse2004Parcels.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse2009Data](docs/Model/InlineResponse2009Data.md)
 - [InlineResponse2009Pagination](docs/Model/InlineResponse2009Pagination.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InlineResponse4001](docs/Model/InlineResponse4001.md)
 - [InlineResponse4002](docs/Model/InlineResponse4002.md)
 - [InlineResponse4003](docs/Model/InlineResponse4003.md)
 - [InlineResponse4004](docs/Model/InlineResponse4004.md)
 - [InlineResponse4005](docs/Model/InlineResponse4005.md)
 - [InlineResponse4006](docs/Model/InlineResponse4006.md)
 - [InlineResponse4007](docs/Model/InlineResponse4007.md)
 - [InlineResponse403](docs/Model/InlineResponse403.md)
 - [InlineResponse4031](docs/Model/InlineResponse4031.md)
 - [InlineResponse4032](docs/Model/InlineResponse4032.md)
 - [InlineResponse503](docs/Model/InlineResponse503.md)
 - [InlineResponse5031](docs/Model/InlineResponse5031.md)
 - [LabelType](docs/Model/LabelType.md)
 - [Labels](docs/Model/Labels.md)
 - [LabelsInner](docs/Model/LabelsInner.md)
 - [LanguageTag](docs/Model/LanguageTag.md)
 - [Location](docs/Model/Location.md)
 - [LocationAddress](docs/Model/LocationAddress.md)
 - [LocationType](docs/Model/LocationType.md)
 - [Money](docs/Model/Money.md)
 - [OneOfParcelLabelDataDelivery](docs/Model/OneOfParcelLabelDataDelivery.md)
 - [OneOfParcelLabelDataPayment](docs/Model/OneOfParcelLabelDataPayment.md)
 - [ParcelLabelData](docs/Model/ParcelLabelData.md)
 - [ParcelLabelDataParcel](docs/Model/ParcelLabelDataParcel.md)
 - [ParcelLabelDataRecipient](docs/Model/ParcelLabelDataRecipient.md)
 - [ParcelLabelDataSender](docs/Model/ParcelLabelDataSender.md)
 - [ParcelState](docs/Model/ParcelState.md)
 - [PaymentCOD](docs/Model/PaymentCOD.md)
 - [PaymentMode](docs/Model/PaymentMode.md)
 - [PaymentPrepaid](docs/Model/PaymentPrepaid.md)
 - [PaymentState](docs/Model/PaymentState.md)
 - [PickupDeliveryPartnerInformation](docs/Model/PickupDeliveryPartnerInformation.md)
 - [RecipientEshopOrP2P](docs/Model/RecipientEshopOrP2P.md)
 - [RecipientReturns](docs/Model/RecipientReturns.md)
 - [SenderEshop](docs/Model/SenderEshop.md)
 - [SenderP2P](docs/Model/SenderP2P.md)
 - [SenderReturns](docs/Model/SenderReturns.md)
 - [V1AuthsessionsBody](docs/Model/V1AuthsessionsBody.md)
 - [V1DeliveryrequestscheckAddressDeliveryBody](docs/Model/V1DeliveryrequestscheckAddressDeliveryBody.md)
 - [V1DeliveryrequestscustomerReturnsBody](docs/Model/V1DeliveryrequestscustomerReturnsBody.md)
 - [V1DeliveryrequestsfromCsvBody](docs/Model/V1DeliveryrequestsfromCsvBody.md)
 - [V1LabelssearchBody](docs/Model/V1LabelssearchBody.md)
 - [V1SimpledeliveryrequestsBody](docs/Model/V1SimpledeliveryrequestsBody.md)

## Documentation For Authorization


## bearer

- **Type**: HTTP bearer authentication


## Author



