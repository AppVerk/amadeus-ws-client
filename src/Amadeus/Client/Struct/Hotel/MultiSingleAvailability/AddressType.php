<?php

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

class AddressType
{
    /**
     * Format of the recipient address
     *
     * @var string
     */
    public $Format;

    /**
     * @var string
     */
    public $Value;

    /**
     * @var StreetNmbr
     */
    public $StreetNmbr;

    /**
     * @var BldgRoom[]
     */
    public $BldgRoom = [];

    /**
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details.
     * When the address is formatted and street number and street name must be sent independently, the street number
     * and other suffixes will be sent using StreetNmbr, and the street name will be sent in the first AddressLine
     * occurrence.
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details.
     * When the address is formatted and street number and street name must be sent independently, the street number
     * will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @var mixed[]
     */
    public $AddressLine = [];

    /**
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @var mixed
     */
    public $CityName;

    /**
     * Post Office Code number.
     *
     * @var mixed
     */
    public $PostalCode;

    /**
     * County or Region Name (e.g., Fairfax).
     *
     * @var mixed
     */
    public $County;

    /**
     * State or Province name (e.g., Texas) or code. | State or Province name (e.g., Texas).
     *
     * @var mixed
     */
    public $StateProv;

    /**
     * Country name (e.g., Ireland).
     *
     * @var mixed
     */
    public $CountryName;

    /**
     * Defines the type of address (e.g. home, business, other).
     * Refer to OpenTravel Code List Communication Location Type (CLT).
     *
     * @var string
     */
    public $Type;

    /**
     * A remark associated with this address.
     *
     * @var string
     */
    public $Remark;

    /**
     * Specifies if the associated data is formatted or not. When true, then it is formatted; when false, then not formatted.
     *
     * @var bool
     */
    public $FormattedInd;

    /**
     * @var string
     */
    public $ShareSynchInd;

    /**
     * @var string
     */
    public $ShareMarketInd;

    /**
     * Describes the use of the address (e.g. mailing, delivery, billing.etc.) Not applicable - no code list exists.
     * Used for codes in the IATA code tables. Possible values of this pattern are 1, 101, 101.EQP, or 101.EQP.X.
     *
     * @var string
     */
    public $UseType;

    /**
     * Used elsewhere in the message to reference this specific address.
     * The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items
     * (e.g. used to assign individual passengers or clients to particular itinerary items).
     * (Reference Place Holder) - an index code to identify an instance in a collection of like items..
     * For example, used to assign individual passengers or clients to particular itinerary items.
     *
     * @var string
     */
    public $RPH;

    /**
     * When true, the receiving system should assume the default value if the user specifies no overriding value or action.
     *
     * @var bool
     */
    public $DefaultInd;
}
