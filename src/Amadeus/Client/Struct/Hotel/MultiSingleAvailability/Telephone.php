<?php

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

use Amadeus\Client\Struct\WsMessageUtility;

class Telephone
{
    /**
     * Telephone number assigned to a single location.
     *
     * @var string
     */
    public $PhoneNumber;

    /**
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @var string
     */
    public $TransferAction;

    /**
     * A reference to the company from which this element has been inherited.
     *
     * @var string
     */
    public $ParentCompanyRef;

    /**
     * @var string
     */
    public $Operation;

    /**
     * @var string
     */
    public $LocationCode;

    /**
     * Used elsewhere in the message to reference a specific telephone number (including faxes).
     * The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items
     * (e.g. used to assign individual passengers or clients to particular itinerary items).
     * (Reference Place Holder) - an index code to identify an instance in a collection of like items..
     * For example, used to assign individual passengers or clients to particular itinerary items.
     *
     * @var string
     */
    public $RPH;

    /**
     * @var string
     */
    public $ShareSynchInd;

    /**
     * @var string
     */
    public $ShareMarketInd;

    /**
     * Describes the location of the phone, such as Home, Office, Property Reservation Office, etc. Refer to
     * OpenTravel Code List Phone Location Type (PLT). | Used for codes in the OpenTravel Code tables.
     * Possible values of this pattern are 1, 101, 101.EQP, or 101.EQP.X.
     *
     * @var string
     */
    public $PhoneLocationType;

    /**
     * Indicates type of technology associated with this telephone number, such as Voice, Data, Fax, Pager, Mobile,
     * TTY, etc. Refer to OpenTravel Code List Phone Technology Type (PTT).
     * Used for codes in the OpenTravel Code tables.
     *
     * @var string
     */
    public $PhoneTechType;

    /**
     * Describes the type of telephone number, in the context of its general use (e.g. Home, Business, Emergency
     * Contact, Travel Arranger, Day, Evening). Refer to OpenTravel Code List Phone Use Type (PUT).
     * Used for codes in the OpenTravel Code tables.
     *
     * @var string
     */
    public $PhoneUseType;

    /**
     * Code assigned by telecommunications authorities for international country access identifier.
     *
     * @var string
     */
    public $CountryAccessCode;

    /**
     * Code assigned for telephones in a specific region, city, or area.
     *
     * @var string
     */
    public $AreaCityCode;

    /**
     * Extension to reach a specific party at the phone number.
     *
     * @var string
     */
    public $Extension;

    /**
     * Additional codes used for pager or telephone access rights.
     *
     * @var string
     */
    public $PIN;

    /**
     * A remark associated with the telephone number.
     *
     * @var string
     */
    public $Remark;

    /**
     * Specifies if the associated data is formatted or not.
     * When true, then it is formatted; when false, then not formatted.
     *
     * @var bool
     */
    public $FormattedInd;

    /**
     * When true, indicates a default value should be used.
     *
     * @var bool
     */
    public $DefaultInd;

    /**
     * Indicates the starting date.
     *
     * @var string
     */
    public $EffectiveDate;

    /**
     * Indicates the ending date.
     *
     * @var string
     */
    public $ExpireDate;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable period
     * (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @var bool
     */
    public $ExpireDateExclusiveIndicator;
}
