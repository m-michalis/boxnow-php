<?php
/**
 * Destination
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
 * Destination Class Doc Comment
 *
 * @category Class
 * @package  Boxnow
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Destination implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'type' => '\Boxnow\Model\LocationType',
        'image' => 'string',
        'lat' => 'string',
        'lng' => 'string',
        'region' => 'string',
        'title' => 'string',
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'postal_code' => 'string',
        'country' => 'string',
        'note' => 'string',
        'expected_delivery_time' => '\DateTime'
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
        'type' => null,
        'image' => null,
        'lat' => null,
        'lng' => null,
        'region' => null,
        'title' => null,
        'name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'postal_code' => null,
        'country' => null,
        'note' => null,
        'expected_delivery_time' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'type' => false,
        'image' => false,
        'lat' => false,
        'lng' => false,
        'region' => false,
        'title' => false,
        'name' => false,
        'address_line1' => false,
        'address_line2' => false,
        'postal_code' => false,
        'country' => false,
        'note' => false,
        'expected_delivery_time' => false
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
        'type' => 'type',
        'image' => 'image',
        'lat' => 'lat',
        'lng' => 'lng',
        'region' => 'region',
        'title' => 'title',
        'name' => 'name',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'postal_code' => 'postalCode',
        'country' => 'country',
        'note' => 'note',
        'expected_delivery_time' => 'expectedDeliveryTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'image' => 'setImage',
        'lat' => 'setLat',
        'lng' => 'setLng',
        'region' => 'setRegion',
        'title' => 'setTitle',
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry',
        'note' => 'setNote',
        'expected_delivery_time' => 'setExpectedDeliveryTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'image' => 'getImage',
        'lat' => 'getLat',
        'lng' => 'getLng',
        'region' => 'getRegion',
        'title' => 'getTitle',
        'name' => 'getName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry',
        'note' => 'getNote',
        'expected_delivery_time' => 'getExpectedDeliveryTime'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('lat', $data ?? [], null);
        $this->setIfExists('lng', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('address_line1', $data ?? [], null);
        $this->setIfExists('address_line2', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('expected_delivery_time', $data ?? [], null);
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * @param string $id Unique location ID
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
     * Gets type
     *
     * @return \Boxnow\Model\LocationType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Boxnow\Model\LocationType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image Location image
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return string|null
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param string|null $lat lat
     *
     * @return self
     */
    public function setLat($lat)
    {
        if (is_null($lat)) {
            throw new \InvalidArgumentException('non-nullable lat cannot be null');
        }
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lng
     *
     * @return string|null
     */
    public function getLng()
    {
        return $this->container['lng'];
    }

    /**
     * Sets lng
     *
     * @param string|null $lng lng
     *
     * @return self
     */
    public function setLng($lng)
    {
        if (is_null($lng)) {
            throw new \InvalidArgumentException('non-nullable lng cannot be null');
        }
        $this->container['lng'] = $lng;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region BCP 47 language tag format
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

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
     * @param string|null $name name
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
     * Gets address_line1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 address_line1
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        if (is_null($address_line1)) {
            throw new \InvalidArgumentException('non-nullable address_line1 cannot be null');
        }
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 address_line2
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        if (is_null($address_line2)) {
            throw new \InvalidArgumentException('non-nullable address_line2 cannot be null');
        }
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Postal code of the location. If set, must include only numbers
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country ISO 3166 Alpha-2 code of the country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets expected_delivery_time
     *
     * @return \DateTime|null
     */
    public function getExpectedDeliveryTime()
    {
        return $this->container['expected_delivery_time'];
    }

    /**
     * Sets expected_delivery_time
     *
     * @param \DateTime|null $expected_delivery_time ISO8601 Date time format
     *
     * @return self
     */
    public function setExpectedDeliveryTime($expected_delivery_time)
    {
        if (is_null($expected_delivery_time)) {
            throw new \InvalidArgumentException('non-nullable expected_delivery_time cannot be null');
        }
        $this->container['expected_delivery_time'] = $expected_delivery_time;

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


