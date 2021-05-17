<?php

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

class LocationType
{
    /**
     * A code used to identify a location.
     *
     * @var string
     */
    public $LocationCode;

    /**
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal code).
     *
     * @var string
     */
    public $CodeContext;

    /**
     * @var Location
     */
    public $Location;

    /**
     * @var CategoryType
     */
    public $LocationCategory;
}
