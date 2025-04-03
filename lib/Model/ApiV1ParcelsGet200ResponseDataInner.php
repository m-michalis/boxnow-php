<?php
/**
 * ApiV1ParcelsGet200ResponseDataInner
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Boxnow
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Partner API
 *
 * Document describes the API description for partners in order to create and track delivery requests.  ## Revision history  |Date|Author|Description|Version| |-|-|-|-| |2024-09-26|Hoffmann, P.| Add P466 error code |1.65| |2024-09-25|Filatov, R.| Add P465 error for /api/{v1,v2}/delivery-requests:checkAddressDelivery |1.64| |2024-08-13|Hoffmann, P.| Update `shippingRegions` in /api/v1/entrusted-partners response. |1.63| |2024-07-22|Hoffmann, P.| Add `shippingRegions` and `phoneNumber` to /api/v1/entrusted-partners response. |1.62| |2024-07-11|Filatov, R.| Add P461, P462, P464 errors for ArcGIS validations to /api/v2/delivery-requests:checkAddressDelivery |1.61| |2024-07-08|Hoffmann, P.| Add `email` and `phoneNumber` to /api/v1/entrusted-partners response. Add `originContactEmail` and `originContactNumber` to /api/v1/delivery-requests:fromCsv request body |1.60| |2024-05-23|Balagazova, K.| Add lost parcel event |1.59| |2024-04-08|Hoffmann, P.| Add declareDeliveryPartnerReturn |1.58| |2024-03-15|Šmolík, J.| Add generate upload label link |1.57| |2024-02-02|Šmolík, J.| Add location id to /api/v1/parcels events |1.56| |2023-11-15|Filatov, R.| Add P422, P423, P424 error codes |1.55| |2023-11-13|Filatov, R.| Add new `/api/v2/delivery-requests:checkAddressDelivery` endpoint switched to ArcGIS |1.54| |2023-11-08|Filatov, R.| Add `customerReturnsMaxAllowedSize` for /api/v1/entrusted-partners |1.53| |2023-06-10|Filatov, R.| Add `weight` min/max validation (error cde P421) and always round it to 2 decimals on /api/v1/delivery-requests:customerReturns|1.52| |2023-05-10|Balagazova, K.| Forbid usage of `q` parameter of `api/v1/parcels` for partner server accounts |1.51| |2023-04-28|Hoffmann, P.| Remove `X-Overwrite-Date` request header from /api/v1/delivery-requests and /api/v1/entrusted-partners |1.50| |2023-04-28|Azizov, J.| Add P442 error code |1.49| |2023-04-12|Balagazova, K.|Add `limit` field and automatic ordering by distance to /api/v1/destinations |1.48| |2023-04-04|Balagazova K.| Add `showRecipientInformation` field to /api/v1/delivery-requests /api/v1/delivery-requests:fromCsv |1.47| |2023-02-23|Balagazova K.| Add customer information to the webhook message |1.46| |2022-11-29|Azizov J.| Add Webhook schema and an example endpoint |1.45| |2022-11-28|Vala J.| Add partner permission to /entrusted-partners response |1.44| |2022-11-24|Vala J.| Add partner permission `addressAsDestination`, `codAddressAsDestination`. Validate partner permission for delivery to address and cod payment use for delivery to address when creating delivery request |1.43| |2022-11-14|Vala J.| Add `X-Overwrite-Date` request header for delivery request to test Croatian currency conversion, only testeable on dev |1.42| |2022-10-21|Vala J.| Add validation error code to /api/v1/simple-delivery-requests /api/v1/delivery-requests /api/v1/delivery-requests:customerReturns |1.41| |2022-09-22|Šmolík, J.|Add accepted-to-locker parcel event |1.40| |2022-09-08|Šmolík J.| Add support for user to choose partner they want to work with |1.39| |2022-08-10|Šmolík J.| Add /labels:search to download PDF labels for defined criteria |1.38| |2022-08-08|Azizov. J.| Add `region` field to /destinations and /origins endpoints |1.37| |2022-07-27|Vala J.| Add EP for listing shipping label data of parcels order /api/v1/delivery-requests/{orderNumber}/label |1.36| |2022-07-27|Vala J.| Add EP for listing shipping label data of parcel /api/v1/parcels/{id}/label |1.35| |2022-07-22|Vala J.| Add destination_public_id column to csv export of parcels |1.34| |2022-07-08|Vala J.| <ul><li>Add exportCsvUrl to headers ['X-export-url-csv'] to response from /api/v1/parcels</li><li>Add endpoint to export parcels to csv file /ui/v1/parcels.csv</li></ul> |1.33| |2022-06-27|Vala J.| Add width and printerModel query parameters for zpl shipping labels for /api/v1/delivery-requests/{orderNumber}/label.{type} and /api/v1/parcels/{id}/label.{type} |1.32| |2022-06-17|Šmolík, J.| Allow to select return location for delivery request |1.31| |2022-05-25|Vala, J.| Add single labelUrlPdf to headers ['X-labels-url-pdf'] in response from /api/v1/delivery-requests:fromCsv |1.30| |2022-05-25|Vala, J.| Add EP to handle csv import orders printing of shipping label /ui/v1/delivery-requests/{orderImportsNumber}/label.pdf |1.29| |2022-05-20|Vala, J.| Add possibility to overwrite 4 rows in shipping label sender info to /api/v1/delivery-requests endpoint |1.28| |2022-05-04|Azizov, J.| Add state and created filters to to /api/v1/parcels endpoint |1.27| |2022-05-03|Azizov, J.| Add possibility to search parcels to /api/v1/parcels endpoint |1.26| |2022-04-27|Azizov, J.| Add /api/v1/delivery-requests:customerReturns for customer returns delivery requests |1.25| |2022-04-26|Vala, J.| Add createTime, updateTime to parcel list response |1.24| |2022-04-21|Šmolík, J.| Add payment info to parcels |1.23| |2022-02-22|Azizov, J.| Add P408 and P409 error codes |1.22| |2022-02-22|Azizov, J.| Add notifySMSOnAccepted to DeliveryRequest |1.21| |2022-02-01|Šmolík, J.| <ul><li>Add check address delivery endpoint</li><li>Add /api/v1/simple-delivery-requests for simpler delivery creation</li></ul> |1.20| |2022-01-20|Šmolík, J.| Add P405, P406 and P407 error codes |1.19| |2022-01-10|Šmolík, J.| <ul><li>Add CSV import endpoint</li><li>Add JWT custom claims description</li><li>Move 403 error codes to own section</li></ul> |1.18| |2021-12-23|Šmolík, J.| <ul><li>Add new endpoint to confirm AnyAPM delivery of a parcel</li><li>Partition error codes by HTTP status response</li></ul> |1.17| |2021-12-16|Šmolík, J.| Add new error code P403 |1.16| |2021-12-09|Šmolík, J.| Add new error codes P401, P402 |1.15| |2021-11-30|Šmolík, J.| Add delivery request origin, destination and items fields description |1.14| |2021-11-11|Šmolík, J.| Add endpoint for parcel delivery cancellation |1.13| |2021-11-09|Šmolík, J.| Add X403 error code spec |1.12| |2021-10-14|Šmolík, J.| Add Accepted for return event |1.11| |2021-10-05|Šmolík, J.| Make DeliveryRequest.items required |1.10| |2021-09-22|Šmolík, J.| Add canceled event state and event|1.9| |2021-09-17|Šmolík, J.| Add PDF label URLs to parcels response |1.8 |2021-09-13|Šmolík, J.| <ul><li>Update parcel state enum values</li><li>Remove history event displayName, add type</li></ul>|1.7 |2021-08-25|Azizov, J.| <ul><li>Add possibility to print labels for all parcels in order</li><li>Make contact information of origin optional in delivery request</li></ul>|1.6 |2021-08-02|Azizov, J.| Add items metadata to parcel |1.5| |2021-07-15|Šmolík, J.| Add destination expected delivery time |1.4| |2021-06-23|Šmolík, J.| Update money value fields description |1.3| |2021-06-21|Šmolík, J.| <ul><li>Update Requesting a delivery text</li><li>Add `name` filter to origins and destinations </li><li>Rename delivery request code of description to plain description</li><li>Add more specific info to value amount fields</li><li>Update address country to match ISO Code</li><li>Update address postal code formatting</li><li>Update origin/destination for delivery request</li><li>Remove height, length, width from order item</li><li>Add events to parcel info</li><li>Update delivery request response</li><li>Update order number description</li><li>Add parcel id filter to /parcels</li><li>Add message to error</li><li>Make contact name required</li><li>Add delivery partner parcel ids</li><li>Remove order items' code and status</li></ul> |1.2| |2021-06-14|Šmolík, J.| <ul><li>Add a todo to specify client notification type after accepting the order.</li><li> Let the partner choose to receive an email when successful delivery request is made.</li><li> Remove `typeOfOrder` from delivery request.</li><li>Add option to select delivery partner for pickup</li><li>Make item weight in the order optional</li><li>Make origin contact email required</li><li>Add support to add sender's name when making delivery request</li><li>Remove landmark and code from address</li><li>Add new error code or partners not eligible to create COD delivery requests</li><li>Add support to filter destinations/origins by type</li><li>Add support to send compartment size for order item, required for APM origin</li><li>Make `typeOfService` optional</li></ul> |1.1| |2021-06-09|Šmolík, J.|Initial version|1.0|  # Setup  Register your company through our support.  We are going to need   - Company name   - List of Phone numbers for SMS OTP authentication of people who'll you want to have access to the Partner CMS   - List of addresses for pickup points - where do we pickup your order for delivery  You will get in return - `OAUTH_CLIENT_ID` - OAuth2 Client ID for authenticating with the Partner API. Keep it safe. Value may vary for each environment. - `OAUTH_CLIENT_SECRET` - OAuth2 Client Secret for authenticating with the Partner API. Keep it safe. Value may vary for each environment. - `API_URL` - Base URL for Partner API  ## Environments  Product offers multiple environments   - Sandbox - For you to test the integration. Limited functionality.   - Production - Connected to real end-users. Use with care.  Environment setting summary: | Value \\ Env | Sandbox |  Production | |---|---|---| | `API_URL`  | N/A  | N/A | | `OAUTH_CLIENT_SECRET`  | Contact Support | Contact Support | | `OAUTH_CLIENT_ID`  | Contact Support  | Contact Support |   # API  ## Authentication  Authentication is based on OAuth2 standard, Client Credentials grant. Token endpoint `/auth-sessions`, see examples below.  Client ID and Secret MUST be passed to you from BoxNow support in advance.  In order to use the API, you MUST attach the access token to Authorization header as a Bearer token.  ### Custom JWT claims  You can find additional user information in custom claims under namespace key `https://boxnow.gr`. For example  ```json {   \"iat\": 1641980553,   \"exp\": 1641984153,   \"https://boxnow.gr\": {     \"permission\": {       \"warehouseAsOrigin\": true,       \"anyApmAsOrigin\": true,       \"anyApmToSameApmDelivery\": true,       \"anyApmToSameApmDeliveryWithoutConfirmation\": true,       \"depotAsOrigin\": true     }   } } ```  ## Listing available destinations  You can skip this if you don't want to deliver your order to one of our APMs.  Use `/destinations` to list available APM locations we can deliver the goods to. You will refer to these records by `id` when requesting delivery later on.  ## What can influence `/destinations` endpoint response   - Only APMs with `Box Now Ready` state are considered   - APMs must be available for your required package size (see: '#/components/parameters/LocationRequiredSize')  ## Requesting a delivery  Create a delivery request to delivery your order to the client. Use `/delivery-requests` endpoint for this operation.  Once a successful request delivery is made   - (optional) we send you an email notifying about successful delivery request creation, if you choose to receive this email   - you should fetch the PDF label for each of the parcel from `/parcels/{id}/label.pdf`, print it and stick it to the parcel/s   - we send a courier to pick up the labeled parcel/s   - we notify the client via email that we have accepted the order from you and its being delivered by us  ## Modifying a delivery request  After a delivery request is successfully made, you can alter some parts of it later on. Use `/delivery-requests/{id}` endpoint for these modifications.  ## Checking on the deliveries  You can list parcel related to your delivery requests via `/parcels` endpoint.   ## Error codes  ### Description of codes for `400 Bad Request` responses  - `P400` - Invalid request data. Make sure are sending the request according to this documentation. - `P401` - Invalid request origin location reference. Make sure you are referencing a valid location ID from Origins endpoint or valid address. - `P402` - Invalid request destination location reference. Make sure you are referencing a valid location ID from Destinations endpoint or valid address. - `P403` - You are not allowed to use AnyAPM-SameAPM delivery. Contact support if you believe this is a mistake. - `P404` - Invalid import CSV. See error contents for additional info. - `P405` - Invalid phone number. Make sure you are sending the phone number in full international format, e.g. +30 xx x xxx xxxx. - `C404` - Invalid phone number. Make sure you are sending the phone number in full international format, e.g. +30 xx x xxx xxxx. - `P406` - Invalid compartment/parcel size. Make sure you are sending one of required sizes 1, 2 or 3. Size is required when sending from AnyAPM directly. - `P407` - Invalid country code. Make sure you are sending country code in ISO 3166-1 alpha-2 format, e.g. GR. - `P408` - Invalid amountToBeCollected amount. Make sure you are sending amount in the valid range of (0, 5000> - `P409` - Invalid delivery partner reference. Make sure you are referencing a valid delivery partner ID from Delivery partners endpoint. - `P410` - Order number conflict. You are trying to create a delivery request for order ID that has already been created. Choose another order id. - `P411` - You are not eligible to use Cash-on-delivery payment type. Use another payment type or contact our support. - `P412` - You are not allowed to create customer returns deliveries. Contact support if you believe this is a mistake. - `P413` - Invalid return location reference. Make sure you are referencing a valid location warehouse ID from Origins  endpoint or valid address. - `P415` - You are not allowed to create delivery to home address. Contact support if you believe this is a mistake. - `P416` - You are not allowed to use COD payment for delivery to home address. Contact support if you believe this is a mistake. - `P417` - You are not allowed to use `q` parameter. It is forbidden for server partner accounts. - `P420` - Parcel not ready for cancel. You can cancel only new, undelivered, or parcels that are not returned or lost. Make sure parcel is in transit and try again. - `P421` - Invalid parcel weight. Make sure you are sending value between 0 and 10^6. - `P422` - Address not found. Try to call just with postal code and country. - `P423` - Nearby locker not found. - `P424` - Invalid region format. Please ensure the format includes a language code followed by a country code in ISO 3166-1 alpha-2 format, separated by a hyphen, e.g. el-GR, or region exists in context. - `P425` - Parcel not ready to declare a delivery partner return. Make sure parcel is not in any of the following states in order to declare a delivery partner return: 'canceled-return', 'lost', 'canceled', 'returned', 'expired-return'. - `P426` - Parcel not eligible to declare a delivery partner return. Parcel needs to use a delivery partner in order to declare a return. - `P430` - Parcel not ready for AnyAPM confirmation. Parcel is probably already confirmed or being delivered. Contact support if you believe this is a mistake. - `P440` - Ambiguous partner. Your account is linked to multiple partners and is unclear on whose behalf you want to perform this action. Send `X-PartnerID` header with ID of the partner you want to manage. You can get list of available Partner IDs from /entrusted-partners endpoint. - `P441` - Invalid X-PartnerID header. Value you provided for X-PartnerID header is either invalid or references partner you don't have access to. Make sure you are sending ID from /entrusted-partners endpoint. - `P442` - Invalid limit query parameter. The query limit for this API has been exceeded. Please reduce the size of your query (max allowed is 100). - `P460` - Parcel not eligible for external destination delivery. Delivery request destination.deliveryPartnerId is not set. - `P461` - Invalid street. Make sure the length is not more than 100 characters. - `P462` - Invalid city. Make sure the length is not more than 50 characters. - `P464` - Invalid postal code. Make sure the length is not more than 20 characters.  ### Description of codes for `403 Forbidden` responses  - `X403` - Account disabled. Your account had been disabled, contact support. - `P414` - Unauthorized parcel access. You are trying to access information to parcel/s that don't belong to you. Make sure you are requesting information for parcels you have access to. - `P465` - Partner doesn't have access for checking delivery addresses. - `P466` - You are not allowed to create a delivery request because your account has an overdue flag and you are not a vip partner.  ### Description of codes for `503 Service Unavailable` responses  | Code | Description | |---|---| | `P600` | Locker bridge communication failed. There has been some error when communicating with the locker bridge. Try again later or contact support. | | `P610` | Geolocation API failed. There has been some error when translating address to gps coordinates. Try again later or contact support. |
 *
 * The version of the OpenAPI document: 1.65
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Boxnow\Model;

use \ArrayAccess;
use \Boxnow\ObjectSerializer;

/**
 * ApiV1ParcelsGet200ResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  Boxnow
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiV1ParcelsGet200ResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_api_v1_parcels_get_200_response_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'state' => '\Boxnow\Model\ParcelState',
        'name' => 'string',
        'value' => 'string',
        'weight' => 'string',
        'compartment_size' => 'float',
        'origin_delivery_ref_id' => 'string',
        'destination_delivery_ref_id' => 'string',
        'item_ref_id' => 'string',
        'allow_return' => 'bool',
        'delivery_request' => '\Boxnow\Model\DeliveryRequest',
        'events' => '\Boxnow\Model\EventsInner[]',
        'parcel_label_url' => 'string',
        'order_label_url' => 'string',
        'cancelation_requested' => 'bool',
        'payment' => '\Boxnow\Model\DeliveryPayment',
        'create_time' => '\DateTime',
        'update_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'state' => null,
        'name' => null,
        'value' => null,
        'weight' => null,
        'compartment_size' => null,
        'origin_delivery_ref_id' => null,
        'destination_delivery_ref_id' => null,
        'item_ref_id' => null,
        'allow_return' => null,
        'delivery_request' => null,
        'events' => null,
        'parcel_label_url' => 'uri',
        'order_label_url' => 'uri',
        'cancelation_requested' => null,
        'payment' => null,
        'create_time' => 'date-time',
        'update_time' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'state' => false,
        'name' => false,
        'value' => false,
        'weight' => false,
        'compartment_size' => false,
        'origin_delivery_ref_id' => false,
        'destination_delivery_ref_id' => false,
        'item_ref_id' => false,
        'allow_return' => false,
        'delivery_request' => false,
        'events' => false,
        'parcel_label_url' => false,
        'order_label_url' => false,
        'cancelation_requested' => false,
        'payment' => false,
        'create_time' => false,
        'update_time' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'state' => 'state',
        'name' => 'name',
        'value' => 'value',
        'weight' => 'weight',
        'compartment_size' => 'compartmentSize',
        'origin_delivery_ref_id' => 'originDeliveryRefId',
        'destination_delivery_ref_id' => 'destinationDeliveryRefId',
        'item_ref_id' => 'itemRefId',
        'allow_return' => 'allowReturn',
        'delivery_request' => 'deliveryRequest',
        'events' => 'events',
        'parcel_label_url' => 'parcelLabelUrl',
        'order_label_url' => 'orderLabelUrl',
        'cancelation_requested' => 'cancelationRequested',
        'payment' => 'payment',
        'create_time' => 'createTime',
        'update_time' => 'updateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'name' => 'setName',
        'value' => 'setValue',
        'weight' => 'setWeight',
        'compartment_size' => 'setCompartmentSize',
        'origin_delivery_ref_id' => 'setOriginDeliveryRefId',
        'destination_delivery_ref_id' => 'setDestinationDeliveryRefId',
        'item_ref_id' => 'setItemRefId',
        'allow_return' => 'setAllowReturn',
        'delivery_request' => 'setDeliveryRequest',
        'events' => 'setEvents',
        'parcel_label_url' => 'setParcelLabelUrl',
        'order_label_url' => 'setOrderLabelUrl',
        'cancelation_requested' => 'setCancelationRequested',
        'payment' => 'setPayment',
        'create_time' => 'setCreateTime',
        'update_time' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'name' => 'getName',
        'value' => 'getValue',
        'weight' => 'getWeight',
        'compartment_size' => 'getCompartmentSize',
        'origin_delivery_ref_id' => 'getOriginDeliveryRefId',
        'destination_delivery_ref_id' => 'getDestinationDeliveryRefId',
        'item_ref_id' => 'getItemRefId',
        'allow_return' => 'getAllowReturn',
        'delivery_request' => 'getDeliveryRequest',
        'events' => 'getEvents',
        'parcel_label_url' => 'getParcelLabelUrl',
        'order_label_url' => 'getOrderLabelUrl',
        'cancelation_requested' => 'getCancelationRequested',
        'payment' => 'getPayment',
        'create_time' => 'getCreateTime',
        'update_time' => 'getUpdateTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('compartment_size', $data ?? [], null);
        $this->setIfExists('origin_delivery_ref_id', $data ?? [], null);
        $this->setIfExists('destination_delivery_ref_id', $data ?? [], null);
        $this->setIfExists('item_ref_id', $data ?? [], null);
        $this->setIfExists('allow_return', $data ?? [], null);
        $this->setIfExists('delivery_request', $data ?? [], null);
        $this->setIfExists('events', $data ?? [], null);
        $this->setIfExists('parcel_label_url', $data ?? [], null);
        $this->setIfExists('order_label_url', $data ?? [], null);
        $this->setIfExists('cancelation_requested', $data ?? [], null);
        $this->setIfExists('payment', $data ?? [], null);
        $this->setIfExists('create_time', $data ?? [], null);
        $this->setIfExists('update_time', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['delivery_request'] === null) {
            $invalidProperties[] = "'delivery_request' can't be null";
        }
        if ($this->container['cancelation_requested'] === null) {
            $invalidProperties[] = "'cancelation_requested' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Reference number in our system. You should use this when contacting support
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Boxnow\Model\ParcelState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Boxnow\Model\ParcelState $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name for the parcel contents
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value Value in default current
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string|null $weight Weight in kg
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets compartment_size
     *
     * @return float|null
     */
    public function getCompartmentSize()
    {
        return $this->container['compartment_size'];
    }

    /**
     * Sets compartment_size
     *
     * @param float|null $compartment_size Selected compartment size
     *
     * @return self
     */
    public function setCompartmentSize($compartment_size)
    {
        if (is_null($compartment_size)) {
            throw new \InvalidArgumentException('non-nullable compartment_size cannot be null');
        }
        $this->container['compartment_size'] = $compartment_size;

        return $this;
    }

    /**
     * Gets origin_delivery_ref_id
     *
     * @return string|null
     */
    public function getOriginDeliveryRefId()
    {
        return $this->container['origin_delivery_ref_id'];
    }

    /**
     * Sets origin_delivery_ref_id
     *
     * @param string|null $origin_delivery_ref_id Parcel ID in origin delivery partner system
     *
     * @return self
     */
    public function setOriginDeliveryRefId($origin_delivery_ref_id)
    {
        if (is_null($origin_delivery_ref_id)) {
            throw new \InvalidArgumentException('non-nullable origin_delivery_ref_id cannot be null');
        }
        $this->container['origin_delivery_ref_id'] = $origin_delivery_ref_id;

        return $this;
    }

    /**
     * Gets destination_delivery_ref_id
     *
     * @return string|null
     */
    public function getDestinationDeliveryRefId()
    {
        return $this->container['destination_delivery_ref_id'];
    }

    /**
     * Sets destination_delivery_ref_id
     *
     * @param string|null $destination_delivery_ref_id Parcel ID in destination delivery partner system
     *
     * @return self
     */
    public function setDestinationDeliveryRefId($destination_delivery_ref_id)
    {
        if (is_null($destination_delivery_ref_id)) {
            throw new \InvalidArgumentException('non-nullable destination_delivery_ref_id cannot be null');
        }
        $this->container['destination_delivery_ref_id'] = $destination_delivery_ref_id;

        return $this;
    }

    /**
     * Gets item_ref_id
     *
     * @return string|null
     */
    public function getItemRefId()
    {
        return $this->container['item_ref_id'];
    }

    /**
     * Sets item_ref_id
     *
     * @param string|null $item_ref_id Parcel reference number in your system
     *
     * @return self
     */
    public function setItemRefId($item_ref_id)
    {
        if (is_null($item_ref_id)) {
            throw new \InvalidArgumentException('non-nullable item_ref_id cannot be null');
        }
        $this->container['item_ref_id'] = $item_ref_id;

        return $this;
    }

    /**
     * Gets allow_return
     *
     * @return bool|null
     */
    public function getAllowReturn()
    {
        return $this->container['allow_return'];
    }

    /**
     * Sets allow_return
     *
     * @param bool|null $allow_return Selected return value of the order
     *
     * @return self
     */
    public function setAllowReturn($allow_return)
    {
        if (is_null($allow_return)) {
            throw new \InvalidArgumentException('non-nullable allow_return cannot be null');
        }
        $this->container['allow_return'] = $allow_return;

        return $this;
    }

    /**
     * Gets delivery_request
     *
     * @return \Boxnow\Model\DeliveryRequest
     */
    public function getDeliveryRequest()
    {
        return $this->container['delivery_request'];
    }

    /**
     * Sets delivery_request
     *
     * @param \Boxnow\Model\DeliveryRequest $delivery_request delivery_request
     *
     * @return self
     */
    public function setDeliveryRequest($delivery_request)
    {
        if (is_null($delivery_request)) {
            throw new \InvalidArgumentException('non-nullable delivery_request cannot be null');
        }
        $this->container['delivery_request'] = $delivery_request;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \Boxnow\Model\EventsInner[]|null
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \Boxnow\Model\EventsInner[]|null $events events
     *
     * @return self
     */
    public function setEvents($events)
    {
        if (is_null($events)) {
            throw new \InvalidArgumentException('non-nullable events cannot be null');
        }
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets parcel_label_url
     *
     * @return string|null
     */
    public function getParcelLabelUrl()
    {
        return $this->container['parcel_label_url'];
    }

    /**
     * Sets parcel_label_url
     *
     * @param string|null $parcel_label_url parcel_label_url
     *
     * @return self
     */
    public function setParcelLabelUrl($parcel_label_url)
    {
        if (is_null($parcel_label_url)) {
            throw new \InvalidArgumentException('non-nullable parcel_label_url cannot be null');
        }
        $this->container['parcel_label_url'] = $parcel_label_url;

        return $this;
    }

    /**
     * Gets order_label_url
     *
     * @return string|null
     */
    public function getOrderLabelUrl()
    {
        return $this->container['order_label_url'];
    }

    /**
     * Sets order_label_url
     *
     * @param string|null $order_label_url order_label_url
     *
     * @return self
     */
    public function setOrderLabelUrl($order_label_url)
    {
        if (is_null($order_label_url)) {
            throw new \InvalidArgumentException('non-nullable order_label_url cannot be null');
        }
        $this->container['order_label_url'] = $order_label_url;

        return $this;
    }

    /**
     * Gets cancelation_requested
     *
     * @return bool
     */
    public function getCancelationRequested()
    {
        return $this->container['cancelation_requested'];
    }

    /**
     * Sets cancelation_requested
     *
     * @param bool $cancelation_requested True if you or system administrator had requested parcel cancelation
     *
     * @return self
     */
    public function setCancelationRequested($cancelation_requested)
    {
        if (is_null($cancelation_requested)) {
            throw new \InvalidArgumentException('non-nullable cancelation_requested cannot be null');
        }
        $this->container['cancelation_requested'] = $cancelation_requested;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Boxnow\Model\DeliveryPayment|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Boxnow\Model\DeliveryPayment|null $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        if (is_null($payment)) {
            throw new \InvalidArgumentException('non-nullable payment cannot be null');
        }
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return \DateTime|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param \DateTime|null $create_time ISO8601 Date time format
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        if (is_null($create_time)) {
            throw new \InvalidArgumentException('non-nullable create_time cannot be null');
        }
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return \DateTime|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param \DateTime|null $update_time ISO8601 Date time format
     *
     * @return self
     */
    public function setUpdateTime($update_time)
    {
        if (is_null($update_time)) {
            throw new \InvalidArgumentException('non-nullable update_time cannot be null');
        }
        $this->container['update_time'] = $update_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


