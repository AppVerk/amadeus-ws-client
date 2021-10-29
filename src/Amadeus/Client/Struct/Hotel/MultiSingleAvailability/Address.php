<?php

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

class Address extends AddressInfoType
{
    /**
     * @var mixed
     */
    public $CompanyName;

    /**
     * @var mixed
     */
    public $AddresseeName;

    /**
     * @var string
     */
    public $ValidationStatus;

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
     * When true, only locations in the same country as the specified city's country should be selected.
     *
     * @var bool
     */
    public $SameCountryInd;

    /**
     * @var string
     */
    public $AddressSearchScope;

    /**
     * @var string
     */
    public $Operation;

    /**
     * @var string
     */
    public $SiteID;

    /**
     * @var string
     */
    public $SiteName;

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
