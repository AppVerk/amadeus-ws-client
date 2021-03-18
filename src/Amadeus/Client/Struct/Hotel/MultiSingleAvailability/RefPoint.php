<?php

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\PointReference;

class RefPoint
{
    /**
     * The state or province in which the reference point is located.
     *
     * @var string
     */
    public $StateProv;

    /**
     * The country in which the reference point is located.
     *
     * @var string
     */
    public $CountryCode;

    /**
     * Indicates the type of location being referenced (e.g., Airport, Hotel).
     * Refer to the OpenTravel Code table Index Point Code (IPC).
     *
     * @var string
     */
    public $RefPointType;

    /**
     * The name of the reference point.
     *
     * @var string
     */
    public $Name;

    /**
     * The name of the city associated with this reference point.
     *
     * @var string
     */
    public $CityName;

    /**
     * Identifies the location of the code table.
     *
     * @var string
     */
    public $URI;

    /**
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @var string
     */
    public $Code;

    /**
     * Identifies the source authority for the code.
     *
     * @var string
     */
    public $CodeContext;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @var int
     */
    public $Quantity;

    public function __construct(PointReference $pointReference)
    {
        $this->RefPointType = null === $pointReference->refPointType
            ? null
            : (string) $pointReference->refPointType
        ;
        $this->StateProv = $pointReference->stateProv;
        $this->CountryCode = $pointReference->countryCode;
        $this->Name = $pointReference->name;
        $this->CityName = $pointReference->cityName;
        $this->URI = $pointReference->uri;
        $this->Code = $pointReference->code;
        $this->CodeContext = $pointReference->codeContext;
        $this->Quantity = $pointReference->quantity;
    }
}
