<?php
/**
 * DeliveryRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Partner API
 *
 * Document describes the API description for partners in order to create and track delivery requests.  ## Revision history  |Date|Author|Description|Version| |---|---|---|---| |2022-07-27|Vala J.| Add EP for listing shipping label data of parcels order /api/v1/delivery-requests/{orderNumber}/label |1.36| |2022-07-27|Vala J.| Add EP for listing shipping label data of parcel /api/v1/parcels/{id}/label |1.35| |2022-07-22|Vala J.| Add destination_public_id column to csv export of parcels |1.34| |2022-07-08|Vala J.| <ul><li>Add exportCsvUrl to headers ['X-export-url-csv'] to response from /api/v1/parcels</li><li>Add endpoint to export parcels to csv file /ui/v1/parcels.csv</li></ul> |1.33| |2022-06-27|Vala J.| Add width and printerModel query parameters for zpl shipping labels for /api/v1/delivery-requests/{orderNumber}/label.{type} and /api/v1/parcels/{id}/label.{type} |1.32| |2022-06-17|Šmolík, J.| Allow to select return location for delivery request |1.31| |2022-05-25|Vala, J.| Add single labelUrlPdf to headers ['X-labels-url-pdf'] in response from /api/v1/delivery-requests:fromCsv |1.30| |2022-05-25|Vala, J.| Add EP to handle csv import orders printing of shipping label /ui/v1/delivery-requests/{orderImportsNumber}/label.pdf |1.29| |2022-05-20|Vala, J.| Add possibility to overwrite 4 rows in shipping label sender info to /api/v1/delivery-requests endpoint |1.28| |2022-05-04|Azizov, J.| Add state and created filters to to /api/v1/parcels endpoint |1.27| |2022-05-03|Azizov, J.| Add possibility to search parcels to /api/v1/parcels endpoint |1.26| |2022-04-27|Azizov, J.| Add /api/v1/delivery-requests:customerReturns for customer returns delivery requests |1.25| |2022-04-26|Vala, J.| Add createTime, updateTime to parcel list response |1.24| |2022-04-21|Šmolík, J.| Add payment info to parcels |1.23| |2022-02-22|Azizov, J.| Add P408 and P409 error codes |1.22| |2022-02-22|Azizov, J.| Add notifySMSOnAccepted to DeliveryRequest |1.21| |2022-02-01|Šmolík, J.| <ul><li>Add check address delivery endpoint</li><li>Add /api/v1/simple-delivery-requests for simpler delivery creation</li></ul> |1.20| |2022-01-20|Šmolík, J.| Add P405, P406 and P407 error codes |1.19| |2022-01-10|Šmolík, J.| <ul><li>Add CSV import endpoint</li><li>Add JWT custom claims description</li><li>Move 403 error codes to own section</li></ul> |1.18| |2021-12-23|Šmolík, J.| <ul><li>Add new endpoint to confirm AnyAPM delivery of a parcel</li><li>Partition error codes by HTTP status response</li></ul> |1.17| |2021-12-16|Šmolík, J.| Add new error code P403 |1.16| |2021-12-09|Šmolík, J.| Add new error codes P401, P402 |1.15| |2021-11-30|Šmolík, J.| Add delivery request origin, destination and items fields description |1.14| |2021-11-11|Šmolík, J.| Add endpoint for parcel delivery cancellation |1.13| |2021-11-09|Šmolík, J.| Add X403 error code spec |1.12| |2021-10-14|Šmolík, J.| Add Accepted for return event |1.11| |2021-10-05|Šmolík, J.| Make DeliveryRequest.items required |1.10| |2021-09-22|Šmolík, J.| Add canceled event state and event|1.9| |2021-09-17|Šmolík, J.| Add PDF label URLs to parcels response |1.8 |2021-09-13|Šmolík, J.| <ul><li>Update parcel state enum values</li><li>Remove history event displayName, add type</li></ul>|1.7 |2021-08-25|Azizov, J.| <ul><li>Add possibility to print labels for all parcels in order</li><li>Make contact information of origin optional in delivery request</li></ul>|1.6 |2021-08-02|Azizov, J.| Add items metadata to parcel |1.5| |2021-07-15|Šmolík, J.| Add destination expected delivery time |1.4| |2021-06-23|Šmolík, J.| Update money value fields description |1.3| |2021-06-21|Šmolík, J.| <ul><li>Update Requesting a delivery text</li><li>Add `name` filter to origins and destinations </li><li>Rename delivery request code of description to plain description</li><li>Add more specific info to value amount fields</li><li>Update address country to match ISO Code</li><li>Update address postal code formatting</li><li>Update origin/destination for delivery request</li><li>Remove height, length, width from order item</li><li>Add events to parcel info</li><li>Update delivery request response</li><li>Update order number description</li><li>Add parcel id filter to /parcels</li><li>Add message to error</li><li>Make contact name required</li><li>Add delivery partner parcel ids</li><li>Remove order items' code and status</li></ul> |1.2| |2021-06-14|Šmolík, J.| <ul><li>Add a todo to specify client notification type after accepting the order.</li><li> Let the partner choose to receive an email when successful delivery request is made.</li><li> Remove `typeOfOrder` from delivery request.</li><li>Add option to select delivery partner for pickup</li><li>Make item weight in the order optional</li><li>Make origin contact email required</li><li>Add support to add sender's name when making delivery request</li><li>Remove landmark and code from address</li><li>Add new error code or partners not eligible to create COD delivery requests</li><li>Add support to filter destinations/origins by type</li><li>Add support to send compartment size for order item, required for APM origin</li><li>Make `typeOfService` optional</li></ul> |1.1| |2021-06-09|Šmolík, J.|Initial version|1.0|  # Setup  Register your company through our support.  We are going to need   - Company name   - List of Phone numbers for SMS OTP authentication of people who'll you want to have access to the Partner CMS   - List of addresses for pickup points - where do we pickup your order for delivery  You will get in return - `OAUTH_CLIENT_ID` - OAuth2 Client ID for authenticating with the Partner API. Keep it safe. Value may vary for each environment. - `OAUTH_CLIENT_SECRET` - OAuth2 Client Secret for authenticating with the Partner API. Keep it safe. Value may vary for each environment. - `API_URL` - Base URL for Partner API  ## Environments  Product offers multiple environments   - Sandbox - For you to test the integration. Limited functionality.   - Production - Connected to real end-users. Use with care.  Environment setting summary: | Value \\ Env | Sandbox |  Production | |---|---|---| | `API_URL`  | N/A  | N/A | | `OAUTH_CLIENT_SECRET`  | Contact Support | Contact Support | | `OAUTH_CLIENT_ID`  | Contact Support  | Contact Support |   # API  ## Authentication  Authentication is based on OAuth2 standard, Client Credentials grant. Token endpoint `/auth-sessions`, see examples below.  Client ID and Secret MUST be passed to you from BoxNow support in advance.  In order to use the API, you MUST attach the access token to Authorization header as a Bearer token.  ### Custom JWT claims  You can find additional user information in custom claims under namespace key `https://boxnow.gr`. For example  ```json {   \"iat\": 1641980553,   \"exp\": 1641984153,   \"https://boxnow.gr\": {     \"permission\": {       \"warehouseAsOrigin\": true,       \"anyApmAsOrigin\": true,       \"anyApmToSameApmDelivery\": true,       \"anyApmToSameApmDeliveryWithoutConfirmation\": true,       \"depotAsOrigin\": true     }   } } ```  ## Listing available destinations  You can skip this if you don't want to deliver your order to one of our APMs.  Use `/destinations` to list available APM locations we can deliver the goods to. You will refer to these records by `id` when requesting delivery later on.  ## Requesting a delivery  Create a delivery request to delivery your order to the client. Use `/delivery-requests` endpoint for this operation.  Once a successful request delivery is made   - (optional) we send you an email notifying about successful delivery request creation, if you choose to receive this email   - you should fetch the PDF label for each of the parcel from `/parcels/{id}/label.pdf`, print it and stick it to the parcel/s   - we send a courier to pick up the labeled parcel/s   - we notify the client via email that we have accepted the order from you and its being delivered by us  ## Modifying a delivery request  After a delivery request is successfully made, you can alter some parts of it later on. Use `/delivery-requests/{id}` endpoint for these modifications.  ## Checking on the deliveries  You can list parcel related to your delivery requests via `/parcels` endpoint.   ## Error codes  ### Description of codes for `400 Unprocessable entity` responses  - `P400` - Invalid request data. Make sure are sending the request according to this documentation. - `P401` - Invalid request origin location reference. Make sure you are referencing a valid location ID from Origins endpoint or valid address. - `P402` - Invalid request destination location reference. Make sure you are referencing a valid location ID from Destinations endpoint or valid address. - `P403` - You are not allowed to use AnyAPM-SameAPM delivery. Contact support if you believe this is a mistake. - `P404` - Invalid import CSV. See error contents for additional info. - `P405` - Invalid phone number. Make sure you are sending the phone number in full international format, e.g. +30 xx x xxx xxxx. - `P406` - Invalid compartment/parcel size. Make sure you are sending one of required sizes 1, 2 or 3. Size is required when sending from AnyAPM directly. - `P407` - Invalid country code. Make sure you are sending country code in ISO 3166-1 alpha-2 format, e.g. GR. - `P408` - Invalid amountToBeCollected amount. Make sure you are sending amount in the valid range of (0, 5000> - `P409` - Invalid delivery partner reference. Make sure you are referencing a valid delivery partner ID from Delivery partners endpoint. - `P410` - Order number conflict. You are trying to create a delivery request for order ID that has already been created. Choose another order id. - `P411` - You are not eligible to use Cash-on-delivery payment type. Use another payment type or contact our support. - `P412` - You are not allowed to create customer returns deliveries. Contact support if you believe this is a mistake. - `P413` - Invalid return location reference. Make sure you are referencing a valid location warehouse ID from Origins  endpoint or valid address. - `P420` - Parcel not ready for cancel. You can cancel only new, undelivered, or parcels that are not returned or lost. Make sure parcel is in transit and try again. - `P430` - Parcel not ready for AnyAPM confirmation. Parcel is probably already confirmed or being delivered. Contact support if you believe this is a mistake.  ### Description of codes for `403 Forbidden` responses  - `X403` - Account disabled. Your account had been disabled, contact support.  ### Description of codes for `503 Service Unavailable` responses  | Code | Description | |---|---| | `P600` | Locker bridge communication failed. There has been some error when communicating with the locker bridge. Try again later or contact support. | | `P610` | Geolocation API failed. There has been some error when translating address to gps coordinates. Try again later or contact support. |
 *
 * OpenAPI spec version: 1.36
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Boxnow;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DeliveryRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeliveryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeliveryRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'overwrite_sender_shipping_label_info' => '\Swagger\Client\Boxnow\DeliveryRequestOverwriteSenderShippingLabelInfo',
'type_of_service' => 'string',
'description' => 'string',
'order_number' => 'string',
'invoice_value' => 'string',
'payment_mode' => '\Swagger\Client\Boxnow\PaymentMode',
'amount_to_be_collected' => '\Swagger\Client\Boxnow\AmountToBeCollected',
'allow_return' => '\Swagger\Client\Boxnow\AllowReturn',
'notify_on_accepted' => 'string',
'notify_sms_on_accepted' => 'string',
'return_location' => 'AnyOfDeliveryRequestReturnLocation',
'origin' => 'AllOfDeliveryRequestOrigin',
'destination' => 'AllOfDeliveryRequestDestination',
'items' => '\Swagger\Client\Boxnow\DeliveryRequestItems[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'overwrite_sender_shipping_label_info' => null,
'type_of_service' => null,
'description' => null,
'order_number' => null,
'invoice_value' => null,
'payment_mode' => null,
'amount_to_be_collected' => null,
'allow_return' => null,
'notify_on_accepted' => null,
'notify_sms_on_accepted' => null,
'return_location' => null,
'origin' => null,
'destination' => null,
'items' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'overwrite_sender_shipping_label_info' => 'overwriteSenderShippingLabelInfo',
'type_of_service' => 'typeOfService',
'description' => 'description',
'order_number' => 'orderNumber',
'invoice_value' => 'invoiceValue',
'payment_mode' => 'paymentMode',
'amount_to_be_collected' => 'amountToBeCollected',
'allow_return' => 'allowReturn',
'notify_on_accepted' => 'notifyOnAccepted',
'notify_sms_on_accepted' => 'notifySMSOnAccepted',
'return_location' => 'returnLocation',
'origin' => 'origin',
'destination' => 'destination',
'items' => 'items'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'overwrite_sender_shipping_label_info' => 'setOverwriteSenderShippingLabelInfo',
'type_of_service' => 'setTypeOfService',
'description' => 'setDescription',
'order_number' => 'setOrderNumber',
'invoice_value' => 'setInvoiceValue',
'payment_mode' => 'setPaymentMode',
'amount_to_be_collected' => 'setAmountToBeCollected',
'allow_return' => 'setAllowReturn',
'notify_on_accepted' => 'setNotifyOnAccepted',
'notify_sms_on_accepted' => 'setNotifySmsOnAccepted',
'return_location' => 'setReturnLocation',
'origin' => 'setOrigin',
'destination' => 'setDestination',
'items' => 'setItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'overwrite_sender_shipping_label_info' => 'getOverwriteSenderShippingLabelInfo',
'type_of_service' => 'getTypeOfService',
'description' => 'getDescription',
'order_number' => 'getOrderNumber',
'invoice_value' => 'getInvoiceValue',
'payment_mode' => 'getPaymentMode',
'amount_to_be_collected' => 'getAmountToBeCollected',
'allow_return' => 'getAllowReturn',
'notify_on_accepted' => 'getNotifyOnAccepted',
'notify_sms_on_accepted' => 'getNotifySmsOnAccepted',
'return_location' => 'getReturnLocation',
'origin' => 'getOrigin',
'destination' => 'getDestination',
'items' => 'getItems'    ];

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
        return self::$swaggerModelName;
    }

    const TYPE_OF_SERVICE_SAME_DAY = 'same-day';
const TYPE_OF_SERVICE_NEXT_DAY = 'next-day';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeOfServiceAllowableValues()
    {
        return [
            self::TYPE_OF_SERVICE_SAME_DAY,
self::TYPE_OF_SERVICE_NEXT_DAY,        ];
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['overwrite_sender_shipping_label_info'] = isset($data['overwrite_sender_shipping_label_info']) ? $data['overwrite_sender_shipping_label_info'] : null;
        $this->container['type_of_service'] = isset($data['type_of_service']) ? $data['type_of_service'] : 'same-day';
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['invoice_value'] = isset($data['invoice_value']) ? $data['invoice_value'] : null;
        $this->container['payment_mode'] = isset($data['payment_mode']) ? $data['payment_mode'] : null;
        $this->container['amount_to_be_collected'] = isset($data['amount_to_be_collected']) ? $data['amount_to_be_collected'] : null;
        $this->container['allow_return'] = isset($data['allow_return']) ? $data['allow_return'] : null;
        $this->container['notify_on_accepted'] = isset($data['notify_on_accepted']) ? $data['notify_on_accepted'] : null;
        $this->container['notify_sms_on_accepted'] = isset($data['notify_sms_on_accepted']) ? $data['notify_sms_on_accepted'] : null;
        $this->container['return_location'] = isset($data['return_location']) ? $data['return_location'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeOfServiceAllowableValues();
        if (!is_null($this->container['type_of_service']) && !in_array($this->container['type_of_service'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type_of_service', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['order_number'] === null) {
            $invalidProperties[] = "'order_number' can't be null";
        }
        if ($this->container['invoice_value'] === null) {
            $invalidProperties[] = "'invoice_value' can't be null";
        }
        if ($this->container['payment_mode'] === null) {
            $invalidProperties[] = "'payment_mode' can't be null";
        }
        if ($this->container['amount_to_be_collected'] === null) {
            $invalidProperties[] = "'amount_to_be_collected' can't be null";
        }
        if ($this->container['origin'] === null) {
            $invalidProperties[] = "'origin' can't be null";
        }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets overwrite_sender_shipping_label_info
     *
     * @return \Swagger\Client\Boxnow\DeliveryRequestOverwriteSenderShippingLabelInfo
     */
    public function getOverwriteSenderShippingLabelInfo()
    {
        return $this->container['overwrite_sender_shipping_label_info'];
    }

    /**
     * Sets overwrite_sender_shipping_label_info
     *
     * @param \Swagger\Client\Boxnow\DeliveryRequestOverwriteSenderShippingLabelInfo $overwrite_sender_shipping_label_info overwrite_sender_shipping_label_info
     *
     * @return $this
     */
    public function setOverwriteSenderShippingLabelInfo($overwrite_sender_shipping_label_info)
    {
        $this->container['overwrite_sender_shipping_label_info'] = $overwrite_sender_shipping_label_info;

        return $this;
    }

    /**
     * Gets type_of_service
     *
     * @return string
     */
    public function getTypeOfService()
    {
        return $this->container['type_of_service'];
    }

    /**
     * Sets type_of_service
     *
     * @param string $type_of_service Type of delivery service. You may not be eligible to use all types of service, contact support for further information.
     *
     * @return $this
     */
    public function setTypeOfService($type_of_service)
    {
        $allowedValues = $this->getTypeOfServiceAllowableValues();
        if (!is_null($type_of_service) && !in_array($type_of_service, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type_of_service', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type_of_service'] = $type_of_service;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description This is the description of the order.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string $order_number Unique order reference number in Your system
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets invoice_value
     *
     * @return string
     */
    public function getInvoiceValue()
    {
        return $this->container['invoice_value'];
    }

    /**
     * Sets invoice_value
     *
     * @param string $invoice_value Total value of the order. Must only contain numbers with no more than one decimal point and exactly 2 decimal places.
     *
     * @return $this
     */
    public function setInvoiceValue($invoice_value)
    {
        $this->container['invoice_value'] = $invoice_value;

        return $this;
    }

    /**
     * Gets payment_mode
     *
     * @return \Swagger\Client\Boxnow\PaymentMode
     */
    public function getPaymentMode()
    {
        return $this->container['payment_mode'];
    }

    /**
     * Sets payment_mode
     *
     * @param \Swagger\Client\Boxnow\PaymentMode $payment_mode payment_mode
     *
     * @return $this
     */
    public function setPaymentMode($payment_mode)
    {
        $this->container['payment_mode'] = $payment_mode;

        return $this;
    }

    /**
     * Gets amount_to_be_collected
     *
     * @return \Swagger\Client\Boxnow\AmountToBeCollected
     */
    public function getAmountToBeCollected()
    {
        return $this->container['amount_to_be_collected'];
    }

    /**
     * Sets amount_to_be_collected
     *
     * @param \Swagger\Client\Boxnow\AmountToBeCollected $amount_to_be_collected amount_to_be_collected
     *
     * @return $this
     */
    public function setAmountToBeCollected($amount_to_be_collected)
    {
        $this->container['amount_to_be_collected'] = $amount_to_be_collected;

        return $this;
    }

    /**
     * Gets allow_return
     *
     * @return \Swagger\Client\Boxnow\AllowReturn
     */
    public function getAllowReturn()
    {
        return $this->container['allow_return'];
    }

    /**
     * Sets allow_return
     *
     * @param \Swagger\Client\Boxnow\AllowReturn $allow_return allow_return
     *
     * @return $this
     */
    public function setAllowReturn($allow_return)
    {
        $this->container['allow_return'] = $allow_return;

        return $this;
    }

    /**
     * Gets notify_on_accepted
     *
     * @return string
     */
    public function getNotifyOnAccepted()
    {
        return $this->container['notify_on_accepted'];
    }

    /**
     * Sets notify_on_accepted
     *
     * @param string $notify_on_accepted If set, we send a notification to this email when we accepted the order to our system.
     *
     * @return $this
     */
    public function setNotifyOnAccepted($notify_on_accepted)
    {
        $this->container['notify_on_accepted'] = $notify_on_accepted;

        return $this;
    }

    /**
     * Gets notify_sms_on_accepted
     *
     * @return string
     */
    public function getNotifySmsOnAccepted()
    {
        return $this->container['notify_sms_on_accepted'];
    }

    /**
     * Sets notify_sms_on_accepted
     *
     * @param string $notify_sms_on_accepted Phone number in international format. If set, we send a sms notification to this phone number.
     *
     * @return $this
     */
    public function setNotifySmsOnAccepted($notify_sms_on_accepted)
    {
        $this->container['notify_sms_on_accepted'] = $notify_sms_on_accepted;

        return $this;
    }

    /**
     * Gets return_location
     *
     * @return AnyOfDeliveryRequestReturnLocation
     */
    public function getReturnLocation()
    {
        return $this->container['return_location'];
    }

    /**
     * Sets return_location
     *
     * @param AnyOfDeliveryRequestReturnLocation $return_location return_location
     *
     * @return $this
     */
    public function setReturnLocation($return_location)
    {
        $this->container['return_location'] = $return_location;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return AllOfDeliveryRequestOrigin
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param AllOfDeliveryRequestOrigin $origin origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return AllOfDeliveryRequestDestination
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param AllOfDeliveryRequestDestination $destination destination
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Boxnow\DeliveryRequestItems[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Boxnow\DeliveryRequestItems[] $items List of parcels you want to send via BoxNow.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
